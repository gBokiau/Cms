<?php
App::uses('AppController', 'Controller');

class UsersController extends AppController {
	public $components = array('Cms.Admin', 'Session');
	public $helpers = array('Form');

	public function admin_login() {
		$this->layout = 'Cms.log';
	    if ($this->request->is('post')) {
	        if ($this->Auth->login()) {
	            return $this->redirect($this->Auth->redirect());
	        } else {
	            $this->Session->setFlash(__('Username or password is incorrect'), 'default', array(), 'auth');
	        }
	    }
	}
	function admin_logout() {
		$this->Auth->logout();
		$this->redirect('/');
	}
}
?>