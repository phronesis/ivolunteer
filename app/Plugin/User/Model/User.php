<?php

App::uses('UserAppModel', 'User.Model');
App::uses('AuthComponent', 'Controller/Component');

/**
 * User Model
 *
 * @property ProjectComment $ProjectComment
 * @property ProjectImage $ProjectImage
 * @property Project $Project
 * @property UserSkill $UserSkill
 * @property UserSocialAuth $UserSocialAuth
 */
class User extends UserAppModel {

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
        'email' => array(
            'email' => array(
                'rule' => array('email'),
                'message' => 'Specify a valid email address',
                //'allowEmpty' => false,
                'required' => true,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
            'isUnique' => array(
                'rule' => array('isUnique'),
                'message' => 'A user with this email address already exists',
                //'allowEmpty' => false,
                'required' => false,
                'last' => true, // Stop validation after this rule
                'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
            'checkEmail' => array(
                'rule' => array('checkEmail'),
                'message' => 'Another user has this Email',
                'on' => 'update',
                'required' => true,
            )
        ),
        'password' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'Please specify your password',
                'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
            'between' => array(
                'rule' => array('between', 5, 15),
                'message' => 'Password has to be between %d and %d characters',
                'required' => true,
                'on' => 'create'
            )
        ),
        'confirm_password' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'Confirm password field can not be empty',
                'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
            'equalPassword' => array(
                'rule' => 'equalPassword',
                'message' => 'Your passwords do not match',
                'on' => 'create'
            )
        ),
        'full_name' => array(
            'notempty' => array(
                'rule' => array('notempty'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'phone' => array(
            'notempty' => array(
                'rule' => array('notempty'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'active' => array(
            'boolean' => array(
                'rule' => array('boolean'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'verified' => array(
            'boolean' => array(
                'rule' => array('boolean'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
    );

    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * hasMany associations
     *
     * @var array
     */
    public $hasMany = array(
        'ProjectComment' => array(
            'className' => 'ProjectComment',
            'foreignKey' => 'user_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        ),
        'ProjectImage' => array(
            'className' => 'ProjectImage',
            'foreignKey' => 'user_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        ),
        'Project' => array(
            'className' => 'Project',
            'foreignKey' => 'user_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        ),
        'UserSkill' => array(
            'className' => 'UserSkill',
            'foreignKey' => 'user_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        ),
        'UserSocialAuth' => array(
            'className' => 'UserSocialAuth',
            'foreignKey' => 'user_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        )
    );

    public function beforeSave($options = array()) {
        if (isset($this->data['User']['password'])) {
            $this->data['User']['password'] = $this->hashPassword();
            unset($this->data['User']['confirm_password']);
        }
        parent::beforeSave($options);
    }

    public function hashPassword() {
        return AuthComponent::password($this->data['User']['password']);
    }

    public function equalPassword() {
        if ($this->data['User']['password'] === $this->data['User']['confirm_password']) {
            return true;
        }
        return false;
    }
    
     function checkEmail() {
        $conditions = array(
            'User.email' => $this->data['User']['email'],
            'User.id <>' => $this->data['User']['id']
        );
        if ($this->find('count', array('conditions' => $conditions))) {
            return false;
        } else {
            return true;
        }
    }

}
