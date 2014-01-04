<div class="<?=$this->request->params['controller'];?> new">
<?php echo $this->Form->create(Inflector::singularize($this->request->params['controller']), array("action"=>"add"));?>
<p>Add new <?= Inflector::singularize($this->request->params['controller']) ?> :</p>
	<?php echo $this->fetch('create');?>
<?php echo $this->Form->end('Create');?>
</div>
<div class="<?=$this->request->params['controller'];?>  index">
<h2><?= ucfirst($this->request->params['controller']);?></h2>
<ul class="list">
	<?php echo $this->fetch('main');?>
</ul>