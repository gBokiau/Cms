<div class="<?=$this->request->params['controller'];?> form">
<?php echo $this->Html->link('&larr; '.__('return', true), array('action'=>'index'), array('class'=>'return', 'escape'=>false));?>
<?php echo $this->Form->create(Inflector::singularize($this->request->params['controller']), array('type'=>'file', 'url'=>'/admin/'.$this->request->params['controller'].'/edit/'.$id, 'inputDefaults'=>array('dateFormat'=>'DMY', 'maxYear'=>'2011', 'minYear'=>'2002')));
	$formID= $this->Form->domId($this->request->params['action'].'Form');
?>
	<fieldset class="main">
	<?php echo $this->fetch('main');?>
	</fieldset>
	<?php echo $this->fetch('content');?>

<?php echo $this->Form->end(array('label'=>'Save changes', 'class'=>'btn btn-success'));?>
</div>
<?php echo $this->Html->scriptBlock("
window.addEvent('domready', function() {
	var form = document.getElementById('".$formID."');
	var submit = $(form).getElement('.submit');
	$$(form.elements).addEvent('change', function() {submit.addClass('fixed').fade('in').highlight();});
});");?>