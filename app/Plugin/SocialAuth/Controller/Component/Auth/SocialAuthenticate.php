<?php

App::uses('BaseAuthenticate', 'Controller/Component/Auth');

/**
 * CakePHP SocialAuthenticateComponent
 * @author david
 */
class SocialAuthenticate extends BaseAuthenticate {

    /**
     *
     * @var SocialAuthComponent 
     */
    public $SocialAuth;

    /**
     *
     * @var Hybrid_User_Profile 
     */
    public $userProfile;

    /**
     *  
     * @param CakeRequest $request
     * @param CakeResponse $response
     */
    public function authenticate(CakeRequest $request, CakeResponse $response) {

        return $this->_findUser(array(
                    'email_address' => $request->data['User']['email_address']
        ));
    }

}
