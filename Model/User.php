<?php
/**
 * User Model
 *
 */
class User extends AppModel {
	public $actsAs = array('Bancha.BanchaRemotable');

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
