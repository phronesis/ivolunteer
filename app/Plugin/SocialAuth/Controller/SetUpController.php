<?php

/**
 * @property SetUp $SetUp
 */
class SetUpController extends SocialAuthAppController {

    public $helpers = array('SocialAuth.Site');

    public function index() {
        $this->SetUp->effectAuth();
    }

    public function install() {

        if ($this->request->is('post')) {
            if ($this->SetUp->saveSettings($this->request->data)) {
                $this->Session->setFlash(__('Hybrid Auth Settings Correctly Set'));
            } else {
                $this->Session->setFlash(__('There was a problem saving settings. Please check that the form is writable.'));
            }
        } else {
            $this->_checkRequirements();            
            
        }
        
        $this->set('configData',$this->_loadConfig());
    }

    protected function _checkRequirements() {
        if ($this->SetUp->checkRequirements()) {
            $this->set('requirementErrors', $this->SetUp->getRequirementIssues());
        }
    }
    
    protected function _loadConfig(){
        $configData = require APP . 'Plugin' . DS . 'SocialAuth' . DS . 'Config' . DS . 'config.php';
    
        return $configData['providers'];
    }

}

?>
