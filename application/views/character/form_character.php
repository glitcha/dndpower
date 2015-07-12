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
    					<input type="text" name="name" placeholder="" class="two form-control" value="<?php echo $record->name;?>"/>
    				</div>
    			</div>
    		</div>
    		<?php if (isset($record->id)):?>
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
    					<?php echo form_dropdown('race', $races, $record->race, 'class="form-control"'); ?>
    				</div>
    			</div>
    		</div>
    		<div class="form-group fieldRequired row">
    			<label class="col-md-2">Class</label>
    			<div class="col-md-10">
    				<div class="row">
    					<?php echo form_dropdown('class', $classes, $record->class, 'class="form-control"'); ?>
    				</div>
    			</div>
    		</div>
    		<div class="form-group fieldRequired row">
    			<label class="col-md-2">Level</label>
    			<div class="col-md-10">
    				<div class="row">
    					<input type="text" name="level" placeholder="" class="two form-control" value="<?php echo $record->level;?>"/>
    				</div>
    			</div>
    		</div>
    		<div class="form-group fieldRequired row">
    			<label class="col-md-2">STR</label>
    			<div class="col-md-10">
    				<div class="row">
    					<input type="text" name="str" placeholder="" class="two form-control" value="<?php echo $record->strength;?>"/>
    				</div>
    			</div>
    		</div>
    		<div class="form-group fieldRequired row">
    			<label class="col-md-2">CON</label>
    			<div class="col-md-10">
    				<div class="row">
    					<input type="text" name="con" placeholder="" class="two form-control" value="<?php echo $record->constitution;?>"/>
    				</div>
    			</div>
    		</div>
    		<div class="form-group fieldRequired row">
    			<label class="col-md-2">Dex</label>
    			<div class="col-md-10">
    				<div class="row">
    					<input type="text" name="dex" placeholder="" class="two form-control" value="<?php echo $record->dex;?>"/>
    				</div>
    			</div>
    		</div>
    		<div class="form-group fieldRequired row">
    			<label class="col-md-2">INT</label>
    			<div class="col-md-10">
    				<div class="row">
    					<input type="text" name="int" placeholder="" class="two form-control" value="<?php echo $record->int;?>"/>
    				</div>
    			</div>
    		</div>
    		<div class="form-group fieldRequired row">
    			<label class="col-md-2">WIS</label>
    			<div class="col-md-10">
    				<div class="row">
    					<input type="text" name="wis" placeholder="" class="two form-control" value="<?php echo $record->wis;?>"/>
    				</div>
    			</div>
    		</div>
    		<div class="form-group fieldRequired row">
    			<label class="col-md-2">CHA</label>
    			<div class="col-md-10">
    				<div class="row">
    					<input type="text" name="cha" placeholder="" class="two form-control" value="<?php echo $record->cha;?>"/>
    				</div>
    			</div>
    		</div>
    		<div class="form-group fieldRequired row">
    			<label class="col-md-2">Hit Points</label>
    			<div class="col-md-10">
    				<div class="row">
    					<input type="text" name="hp" placeholder="" class="two form-control" value="<?php echo $record->hp;?>"/>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
</form>
