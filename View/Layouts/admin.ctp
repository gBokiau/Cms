<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset()."\n"; ?>
	<title><?php echo $site_name; ?> 	&rsaquo; Administration 	&rsaquo; 	<?php echo $title_for_layout; ?></title>
	<?php
		echo $this->Html->css('/cms/css/style');
		echo $this->Html->script('/mootools/js/mootools-1.2.4-core-nc');
		echo $scripts_for_layout;
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<p><?php echo $this->Html->link('Se déconecter', array('plugin'=>'cms', 'controller'=>'users', 'action'=>'logout'));?> – <?php echo $this->Html->link('voir le site', '/', array('target'=>'_blank'));?></p>
		</div>
		<div id="main">
			<div id="left">
				<ul>
					<?php foreach($admin_menu as $link) {
						echo "<li>".$this->Html->link(__($link, true), array('controller'=>Inflector::tableize($link), 'action'=>'index', 'admin'=>1, 'plugin'=>false))."</li>";
					}?>
				</ul>
			</div>
			<div id="content">
				<?php $this->Session->flash(); ?>
				<h1><?= ucfirst($this->request->params['controller']);?></h1>
				<?php
				if(count($this->validationErrors[$modelName])) {
					echo '<p class="error-message">Changes could not be saved ! Please review the fields indicated in red below.</p>';
				}?>
				<?php echo $content_for_layout; ?>
			</div>
		</div>
	</div>
</body>
</html>