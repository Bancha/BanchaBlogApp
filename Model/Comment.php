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
class Comment extends AppModel {
	public $actsAs = array('Bancha.BanchaRemotable');
	
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'string' => array(
			'notempty' => array(
				'rule' => array('notempty'),
			),
		),
	);

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Article' => array(
			'className' => 'Article',
			'joinTable' => 'articles_comments',
			'foreignKey' => 'comment_id',
			'associationForeignKey' => 'article_id',
		)
	);

}
