<?php
/**
 * Articles Controller file
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

App::uses('AppController', 'Controller');
/**
 * Articles Controller
 *
 * @property Article $Article
 */
class ArticlesController extends AppController {
	
	
	/* this was used once to init all ACL AROs
	function init() {
	    $aro = new Aro();
	    $aroObjs = array(
        	0 => array(
	            'alias' => 'admins'
	        ),
	        1 => array(
	            'alias' => 'moderators'
	        ),
	        2 => array(
	            'alias' => 'Users'
	        ),
	        3 => array(
	            'alias' => 'Admin Roland',
	            'parent_id' => 1,
	            'model' => 'User',
	            'foreign_key' => 2,
	        ),
	        4 => array(
	            'alias' => 'Moderator Joe',
	            'parent_id' => 2,
	            'model' => 'User',
	            'foreign_key' => 3,
	        ),
	        5 => array(
	            'alias' => 'Normal User Martin',
	            'parent_id' => 3,
	            'model' => 'User',
	            'foreign_key' => 1,
	        ),
	    );
	    // Iterate and create AROs
	    foreach ($aroObjs as $data) {
	        $aro->create();
	        $aro->save($data);
	    }


		$aco = new Aco();
		$acoObjs = array(
			0 => array(
		        'alias' => 'Users'
		    ),
		    1 => array(
		        'alias' => 'Articles'
		    ),
		    2 => array(
		        'alias' => 'Comments'
		    ),
		);
		// Iterate and create ACOs
		foreach ($acoObjs as $data) {
		    $aco->create();
		    $aco->save($data);
		}


		exit('done');
	}*/
	
	
	
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Article->recursive = 0;
		$articles = $this->paginate();
		$this->set('articles', $articles);
		return array_merge($this->request['paging']['Article'],array('records'=>$articles));
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Article->id = $id;
		if (!$this->Article->exists()) {
			throw new NotFoundException(__('Invalid article'));
		}
		$this->set('article', $this->Article->read(null, $id));
		return $this->Article->data;
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Article->create();
			
			if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) return $this->Article->saveFieldsAndReturn($this->request->data);
			
			if ($this->Article->save($this->request->data)) {
				$this->flash(__('Article saved.'), array('action' => 'index'));
			} else {
			}
		}
		$users = $this->Article->User->find('list');
		$comments = $this->Article->Comment->find('list');
		$this->set(compact('users', 'comments'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Article->id = $id;
		if (!$this->Article->exists()) {
			throw new NotFoundException(__('Invalid article'));
		}
		
		if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) return $this->Article->saveFieldsAndReturn($this->request->data);
		
		
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Article->save($this->request->data)) {
				$this->flash(__('The article has been saved.'), array('action' => 'index'));
			} else {
			}
		} else {
			$this->request->data = $this->Article->read(null, $id);
		}
		$users = $this->Article->User->find('list');
		$comments = $this->Article->Comment->find('list');
		$this->set(compact('users', 'comments'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Article->id = $id;
		if (!$this->Article->exists()) {
			throw new NotFoundException(__('Invalid article'));
		}
		
		if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) return $this->Article->deleteAndReturn();
		
		
		if ($this->Article->delete()) {
			$this->flash(__('Article deleted'), array('action' => 'index'));
		}
		$this->flash(__('Article was not deleted'), array('action' => 'index'));
		$this->redirect(array('action' => 'index'));
	}
}
