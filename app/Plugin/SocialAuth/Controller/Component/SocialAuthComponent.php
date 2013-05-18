<?php

App::uses('Component', 'Controller');
require_once HYBRID_AUTH_LIB_PATH . DS . 'Auth.php';

/**
 * CakePHP SocialAuthComponent
 * @author david
 */
class SocialAuthComponent extends Component {

    public $components = array('Session');
    protected $_hybridAuthConfig;
    public $hybridAuth;

    /**
     *
     * @var Hybrid_User_Profile
     */
    public $userProfile;

    /**
     *
     * @var Hybrid_Provider_Model 
     */
    public $adapter;
    private $__defaultSettings = array(
        'register_url' => '/register',
        'login' => '/login'
    );

    /**
     *
     * @var Controller
     */
    public $controller;
    public $provider;
    private $__hybridAuthError;

    public function __construct(\ComponentCollection $collection, $settings = array()) {
        $settings = Hash::merge($this->__defaultSettings, $settings);
        parent::__construct($collection, $settings);
    }

    public function initialize(\Controller $controller) {
        parent::initialize($controller);
        $this->controller = $controller;
    }

    /**
     * 
     */
    protected function _initializeHybridAuth() {
        $this->hybridAuth = new Hybrid_Auth($this->_hybridAuthConfig);
        return $this->hybridAuth->authenticate($this->provider);
    }

    /**
     * 
     * @param type $provider
     * @return Hybrid_User_Profile $userProfile if successful or false on failture
     */
    public function hybridAuthAuthenticate($provider) {
        $this->provider = $provider;
        try {
            $this->_loadHybridAuthConfig();
            if (($this->adapter = $this->_initializeHybridAuth())) {

                $this->userProfile = $this->adapter->getUserProfile();

                return $this->userProfile;
            }
        } catch (Exception $exc) {
            echo $exc->getMessage();
            $this->Session->destroy();


            $this->controller->Session->write('SocialAuth.error', $exc->getMessage());
            CakeLog::write('error', $exc->getTraceAsString());
            return false;
        }
    }

    protected function _loadHybridAuthConfig() {
        $this->_hybridAuthConfig = require APP . 'Plugin' . DS . 'SocialAuth' . DS . 'Config' . DS . 'config.php';
    }

    protected function _checkUserSocialDetails() {

        return $this->controller->{$this->settings['userSocialModel']}->checkUserSocialDetail($this->userProfile->identifier, $this->provider);
    }

    protected function _userExists() {

        return $this->controller->{$this->settings['userSocialModel']}->find('first', array('conditions' => array('User.email_address' => $this->userProfile->email)));
    }

    public function loadUserSocialModel() {
        $this->controller->loadModel($this->settings['userSocialModel']);
        if (!(${$this->settings['userSocialModel']} instanceof UserSocialModel)) {
            throw new Exception('UserSocial Model does not implement the UserSocialModel Interface');
        }
    }

    public function getHybridAuthError() {
        return $this->__hybridAuthError;
    }

}
