<?php
/**
 * Comments Controller file
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
 * Comments Controller
 *
 * @property Comment $Comment
 */
class CommentsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Comment->recursive = 0;
		$comments = $this->paginate();
		$this->set('comments', $comments);
		return array_merge($this->request['paging']['Comment'],array('records'=>$comments));
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Comment->id = $id;
		if (!$this->Comment->exists()) {
			throw new NotFoundException(__('Invalid comment'));
		}
		$this->set('comment', $this->Comment->read(null, $id));
		return $this->Comment->data;
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Comment->create();
			
			if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) return $this->Comment->saveFieldsAndReturn($this->request->data);
			
			if ($this->Comment->save($this->request->data)) {
				$this->flash(__('Comment saved.'), array('action' => 'index'));
			} else {
			}
		}
		$articles = $this->Comment->Article->find('list');
		$this->set(compact('articles'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Comment->id = $id;
		if (!$this->Comment->exists()) {
			throw new NotFoundException(__('Invalid comment'));
		}
		
		if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) return $this->Comment->saveFieldsAndReturn($this->request->data);
		
		
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Comment->save($this->request->data)) {
				$this->flash(__('The comment has been saved.'), array('action' => 'index'));
			} else {
			}
		} else {
			$this->request->data = $this->Comment->read(null, $id);
		}
		$articles = $this->Comment->Article->find('list');
		$this->set(compact('articles'));
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
		$this->Comment->id = $id;
		if (!$this->Comment->exists()) {
			throw new NotFoundException(__('Invalid comment'));
		}
		
		if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) return $this->Comment->deleteAndReturn();
		
		
		if ($this->Comment->delete()) {
			$this->flash(__('Comment deleted'), array('action' => 'index'));
		}
		$this->flash(__('Comment was not deleted'), array('action' => 'index'));
		$this->redirect(array('action' => 'index'));
	}
}
