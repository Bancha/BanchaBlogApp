<?php
/**
 * Comment Model
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
class Comment extends AppModel {
	public $actsAs = array('Bancha.BanchaRemotable');
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'comment';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'article_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
			),
		),
		'comment' => array(
			'notempty' => array(
				'rule' => array('notempty'),
			),
		),
	);

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Article' => array(
			'className' => 'Article',
			'foreignKey' => 'article_id',
		)
	);
}
