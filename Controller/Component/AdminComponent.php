<?php
class AdminComponent extends Component {
	public $settings = array(
		'sitename'=>'Your Site',
		'menu' => array());
	private $loginAction = array(
            'controller' => 'users',
            'action' => 'login',
            'plugin' => 'cms'
        );
	public function __construct(ComponentCollection $collection, $settings = array()) {
		$settings = array_merge($this->settings, (array)$settings);
		parent::__construct($collection, $settings);
	}
	public function initialize(Controller $controller) {
		if ($controller->Auth) {
			$controller->Auth->loginAction = $this->loginAction;
		} else {
			$this->Auth = $controller->Auth = $controller->Components->load('Auth', array('loginAction' => $this->loginAction,
			'authenticate'=>array('Form' => array('userModel'=>'Cms.User'))));
			$this->Auth->initialize($controller);
		}
	}	
	public function startup(Controller $controller) {
		if (isset($controller->params['admin']) && $controller->params['admin']) {
			$this->Controller = $controller;
			$controller->set('admin_menu', $this->settings['menu']);
			$controller->set('site_name', $this->settings['sitename']);
			$controller->layout = 'Cms.admin';
			$this->request = $controller->request;
		} else {
			$this->Auth->allow();
		}
	}
}
?>