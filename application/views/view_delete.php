<div class="confirmForm">
	<?php 
	$attributes = array('id' => 'form-delete');
	echo form_open($post_link, $attributes); 
	?>

	<h4><?php if(isset($msg)) : ?><?php echo $msg; ?><?php else: ?>Are you sure you want to delete?<?php endif;?></h4>

	<div>
		<a class="buttonS bGreyish" href="<?php echo ($cancel_link);?>">No, go back</a>
		<input class="buttonS bBlue" type="submit" value="<?php if(isset($btn)) : ?><?php echo $btn; ?><?php else: ?>Yes, proceed<?php endif;?>"/>
	</div>

	<input type="hidden" name="delete_request" value="true"/>

	<?php echo form_close(); ?>
</div>