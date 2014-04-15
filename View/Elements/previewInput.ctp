<?php
if (!isset($inputOptions)) {
	$inputOptions = array();
}
if(!isset($label)) {
	if (array_key_exists('label', $inputOptions)) {
		if (!is_array($inputOptions['label'])) {
			$label = $inputOptions['label'];
		} else {
			if (array_key_exists('text', $inputOptions[$label])) {
				$label = $inputOptions['label']['text'];
			}
		}
	} else {
		$label = __(Inflector::humanize(Inflector::underscore($input)));
	}
}

?>
<div class="panel previewable-form">
	<div class="panel-header">
		<label for="<?php echo $this->Form->domId($input)?>"><?php echo $label;?></label>
		<p class="pull-right">Text is parsed with <a href="http://txstyle.org">Textile Markup</a>.</p>
	</div>
	<div class="panel-body">
		<?php echo $this->Form->input($input, array_merge(array('label'=>false), $inputOptions));?>
	</div>
</div>