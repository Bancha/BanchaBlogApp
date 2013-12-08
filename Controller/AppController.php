<?php

App::uses('Controller', 'Controller');
/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package	   app.Controller
 */
class AppController extends Controller {
	/*
	 * Add authentication, same as in the Bancha config in core.php
	 */
	public $components = array(
		'Auth' => array(
			'Form' => array(
				'userModel' => 'User',
				'fields' => array(
					'username' => 'username',
					'password' => 'password'
				)
			),
			'loginAction' => array(
				'controller' => 'users',
				'action' => 'login',
			),
			'logoutRedirect' => 'app.html'
		)
	);
	
	public function beforeFilter() {
		// allow the Bancha API and meta data do be loaded from anyone
		if(strtolower($this->params['plugin']) == 'bancha' && strtolower($this->name) == 'bancha') {
			$this->Auth->allow('index');
		}
	}
}
