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
