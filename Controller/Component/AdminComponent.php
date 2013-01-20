<?php
class AdminComponent extends Component {
	public $settings = array(
		'sitename'=>'Your Site',
		'adminmenu' => array());
	
	public function __construct(ComponentCollection $collection, $settings = array()) {
		$settings = array_merge($this->settings, (array)$settings);
		parent::__construct($collection, $settings);
	}
	public function initialize(Controller $controller) {
		$this->Auth = $controller->Auth = $controller->Components->load('Auth', array('loginAction' => array(
            'controller' => 'users',
            'action' => 'login',
            'plugin' => 'cms'
        ),
		'authenticate'=>array('Form' => array('userModel'=>'Cms.User'))));
		$this->Auth->initialize($controller);
	}	
	public function startup(Controller $controller) {
		if (isset($controller->params['admin']) && $controller->params['admin']) {
			$this->Controller = $controller;
			$controller->set('admin_menu', $this->settings['adminmenu']);
			$controller->set('site_name', $this->settings['sitename']);
			$controller->layout = 'Cms.admin';
			$this->request = $controller->request;
		} else {
			$this->Auth->allow();
		}
	}
}
?>