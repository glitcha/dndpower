<?php
//var_dump($object);
?>

<form id="form-character" method="post" action="<?php echo $action;?>" enctype="multipart/form-data">
    <div class="panel panel-default">
    	<div class="panel-heading">
    		<span><?php echo $title; ?></span>
    	</div>
    	<div class="panel-body">
    		<?php echo validation_errors('<div class="nWarning message"><p>', '</p></div>'); ?>
    		<div class="form-group fieldRequired row">
    			<label class="col-md-2">Name</label>
    			<div class="col-md-10">
    				<div class="row">
    					<input type="text" name="name" placeholder="" class="two form-control" value="<?php echo $object->name;?>"/>
    				</div>
    			</div>
    		</div>
    		<?php if (isset($object->id)):?>
    		<div class="form-group fieldRequired row">
    			<label class="col-md-2">Image</label>
    			<div class="col-md-10">
    				<div class="row">
    					<input type="file" id="image" name="image"/>
    				</div>
    			</div>
    		</div>
    		<?php endif;?>
    		<div class="form-group fieldRequired row">
    			<label class="col-md-2">Race</label>
    			<div class="col-md-10">
    				<div class="row">
    					<?php echo form_dropdown('race_id', $races, $object->race_id, 'class="form-control"'); ?>
    				</div>
    			</div>
    		</div>
    		<div class="form-group fieldRequired row">
    			<label class="col-md-2">Class</label>
    			<div class="col-md-10">
    				<div class="row">
    					<?php echo form_dropdown('class_id', $classes, $object->class_id, 'class="form-control"'); ?>
    				</div>
    			</div>
    		</div>
    		<div class="form-group fieldRequired row">
    			<label class="col-md-2">Level</label>
    			<div class="col-md-10">
    				<div class="row">
    					<input type="text" name="level" placeholder="" class="two form-control" value="<?php echo $object->level;?>"/>
    				</div>
    			</div>
    		</div>
    		<div class="form-group fieldRequired row">
    			<label class="col-md-2">Strength</label>
    			<div class="col-md-10">
    				<div class="row">
    					<input type="text" name="strength" placeholder="" class="two form-control" value="<?php echo $object->strength;?>"/>
    				</div>
    			</div>
    		</div>
    		<div class="form-group fieldRequired row">
    			<label class="col-md-2">Constitution</label>
    			<div class="col-md-10">
    				<div class="row">
    					<input type="text" name="constitution" placeholder="" class="two form-control" value="<?php echo $object->constitution;?>"/>
    				</div>
    			</div>
    		</div>
    		<div class="form-group fieldRequired row">
    			<label class="col-md-2">Dexterity</label>
    			<div class="col-md-10">
    				<div class="row">
    					<input type="text" name="dexterity" placeholder="" class="two form-control" value="<?php echo $object->dexterity;?>"/>
    				</div>
    			</div>
    		</div>
    		<div class="form-group fieldRequired row">
    			<label class="col-md-2">Intelligence</label>
    			<div class="col-md-10">
    				<div class="row">
    					<input type="text" name="intelligence" placeholder="" class="two form-control" value="<?php echo $object->intelligence;?>"/>
    				</div>
    			</div>
    		</div>
    		<div class="form-group fieldRequired row">
    			<label class="col-md-2">Wisdom</label>
    			<div class="col-md-10">
    				<div class="row">
    					<input type="text" name="wisdom" placeholder="" class="two form-control" value="<?php echo $object->wisdom;?>"/>
    				</div>
    			</div>
    		</div>
    		<div class="form-group fieldRequired row">
    			<label class="col-md-2">Charisma</label>
    			<div class="col-md-10">
    				<div class="row">
    					<input type="text" name="charisma" placeholder="" class="two form-control" value="<?php echo $object->charisma;?>"/>
    				</div>
    			</div>
    		</div>
    		<div class="form-group fieldRequired row">
    			<label class="col-md-2">Hit Points</label>
    			<div class="col-md-10">
    				<div class="row">
    					<input type="text" name="hp" placeholder="" class="two form-control" value="<?php echo $object->hp;?>"/>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
</form>
