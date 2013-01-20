<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset()."\n"; ?>
	<title><?php echo $site_name; ?> 	&rsaquo; Administration 	&rsaquo; 	<?php echo $title_for_layout; ?></title>
	<?php
		echo $this->Html->css('/cms/css/style');
		echo $this->Html->script('/mootools/js/1.2.4-core-yc');
		echo $scripts_for_layout;
	?>
</head>
<body>
	<div id="container">
		<div id="main">
			<div id="content">
				<?php echo $this->Session->flash('auth'); ?>
				<h1>Log in</h1>
				<?php echo $content_for_layout; ?>
			</div>
		</div>
	</div>
</body>
</html>