<div class="<?=$this->request->params['controller'];?> form">
<?php echo $this->Html->link('&larr; '.__('return', true), array('action'=>'index'), array('class'=>'return', 'escape'=>false));?>
<?php echo $this->Form->create(Inflector::singularize($this->request->params['controller']), array('type'=>'file', 'url'=>'/admin/'.$this->request->params['controller'].'/edit/'.$id, 'inputDefaults'=>array('dateFormat'=>'DMY', 'maxYear'=>'2011', 'minYear'=>'2002')));?>
	<fieldset class="main">
	<?php echo $this->fetch('main');?>
	</fieldset>
	<?php echo $this->fetch('content');?>
<?php echo $this->Form->end('Submit');?>
</div>
