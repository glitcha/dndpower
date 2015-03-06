<?php foreach ($extras as $extra) : ?>
<div class="extra">
	<?php if ($extra->image != null):?>
	<img src="/files/images/<?php echo $extra->image;?>"/>
	<?php endif; ?>
	<div>
		<?php echo $extra->note; ?>
	</div>
</div>
<?php endforeach; ?>