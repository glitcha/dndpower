<div class="power <?php echo strtolower($power->background); ?>">
	<h1><?php echo $power->name ;?> - <?php echo $power->descriptors;?></h1>
	
	<div class="rule-text">
		<?php echo nl2br(trim($power->rule_text)); ?>
	</div>

	<?php foreach ($power as $field => $value) :?>
	<?php if (!(in_array($field, array('id', 'has_styling', 'extra_data', 'name', 'rule_text', 'descriptors', 'background', 'range_icon', 'action_icon')))) :?>
	<div class="attr attr-<?php echo $field; ?>">
		<span class="label"><span><?php echo $field; ?></span></span>
		<span class="value"><span><?php echo $value; ?></span></span>
	</div>
	<?php endif;?>
	<?php endforeach; ?>
</div>