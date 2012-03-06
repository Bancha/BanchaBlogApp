<?php
/**
 * User Model
 *
 * Bancha Sample Project
 * Copyright 2011-2012 Roland Schuetz
 *
 * @package       BanchaSampleProject
 * @subpackage    Model
 * @copyright     Copyright 2011-2012 Roland Schuetz
 * @link          http://banchaproject.org Bancha Project
 * @author        Roland Schuetz <mail@rolandschuetz.at>
 * @since         v 1.0
 */
App::uses('AppModel', 'Model');
class User extends AppModel {
	public $actsAs = array('Bancha.BanchaRemotable', 'Acl' => array('type' => 'requester'));


/**
 * ACL support
 */
    public function parentNode() {
        if (!$this->id && empty($this->data)) {
            return null;
        }
        if (isset($this->data['User']['group_id'])) {
            $groupId = $this->data['User']['group_id'];
        } else {
            $groupId = $this->field('group_id');
        }
        if (!$groupId) {
            return null;
        } else {
            return array('Group' => array('id' => $groupId));
        }
    }




/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array( // TODO example for validation rule "url" missing
	   'id' => array(	
           'numeric' => array(
               'rule' => array('numeric'),
               'precision' => 0
            ),
	   ),
	   'name' => array(
            'notempty' => array(
                'rule' => array('notempty')
            ),
            'minLength' => array(
                'rule' => array('minLength',3),
            ),
            'maxLength' => array(
                'rule' => array('maxLength',64),
            ),
		),
		'username' => array(
            'isUnique' => array( // this has to be checked by the server (so there's nothing onthe frontend for this)
                'rule' => array('isUnique'),
		        'message' => 'Username is already taken.'
            ),
            'minLength' => array(
                'rule' => array('minLength', 3),
                'required' => true, // this one is slick
            ),
            'maxLength' => array(
                'rule' => array('maxLength',64),
            ),
            'alphaNumeric' => array(
                'rule' => array('alphaNumeric')
            ),
		),
        'email' => array(
            'email' => array(
                'rule' => array('email'),
                'required' => true,
            ),
        ),
	);
	
/**
 * allways has saved passwords
 */
	public function beforeSave($options = array()) {
        $this->data['User']['password'] = AuthComponent::password($this->data['User']['password']);
        return true;
    }

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Article' => array(
			'className' => 'Article',
			'foreignKey' => 'user_id',
		)
	);

}
