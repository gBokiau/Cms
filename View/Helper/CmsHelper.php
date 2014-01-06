<?php
App::uses('AppHelper', 'View/Helper');

class CmsHelper extends AppHelper {

/**
 * Helpers
 *
 * @var array
 */
	public $helpers = array('Form');
	

	public function statusInput($field='status_id', $text = '') {
		$this->setEntity($field);
		$text = count($text) ? ' '.$text : '';
		$value = $this->value();
		$labelclass = $value['value'] ? ' btn-success' : '';
		return $this->Form->input($field, array(
		'label' => array(
			'class' => 'btn active'.$labelclass,
			'text'  => '<span class="glyphicon glyphicon-views"></span>'.$text),
		'div' => array(
			'class' => 'btn-group switch'
			),
		'type'=>'checkbox',
		'options'=>false
		));
	}
}
