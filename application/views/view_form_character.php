<form id="form-character" method="post" action="<?php echo $action;?>" enctype="multipart/form-data">

<div class="panel panel-default">
	<div class="panel-heading">
		<h1><?php echo $title; ?></h1>
		<div class="panel-actions">
			<a class="btn btn-primary" href="/character/browse" class="buttonH bGreen">Back</a>
			<a class="btn btn-primary" href="#" onclick="$('#form-character').submit();return false;" class="buttonH bGreen">Save</a>
			<?php if (isset($record->id)):?>
			<a class="btn btn-primary" href="/character/view/<?php echo $record->id; ?>">View</a>
			<a class="btn btn-primary" href="/character/powers/<?php echo $record->id; ?>">Powers</a>
			<a class="btn btn-primary" href="/character/skills/<?php echo $record->id; ?>">Skills</a>
			<a class="btn btn-primary" href="/character/feats/<?php echo $record->id; ?>">Feats</a>
			<?php endif;?>
		</div>
	</div>
	<div class="panel-body">
		<?php echo validation_errors('<div class="nWarning message"><p>', '</p></div>'); ?>
		<div class="form-group fieldRequired row">
			<label class="col-md-2">Name</label>
			<div class="col-sm-10">
				<div class="row">
					<input type="text" name="name" placeholder="" class="two form-control" value="<?php echo $record->name;?>"/>				
				</div>
			</div>
		</div>
		<?php if (isset($record->id)):?>
		<div class="form-group fieldRequired row">
			<label class="col-md-2">Image</label>
			<div class="col-sm-10">
				<div class="row">
					<input type="file" id="image" name="image"/>					
				</div>
			</div>
		</div>
		<?php endif;?>
		<div class="form-group fieldRequired row">
			<label class="col-md-2">Race</label>
			<div class="col-sm-10">
				<div class="row">
					<?php echo form_dropdown('race', $races, $record->race, 'class="form-control"'); ?>
				</div>
			</div>
		</div>
		<div class="form-group fieldRequired row">
			<label class="col-md-2">Class</label>
			<div class="col-sm-10">
				<div class="row">
					<?php echo form_dropdown('class', $classes, $record->class, 'class="form-control"'); ?>
				</div>
			</div>
		</div>
		<div class="form-group fieldRequired row">
			<label class="col-md-2">Level</label>
			<div class="col-sm-10">
				<div class="row">
					<input type="text" name="level" placeholder="" class="two form-control" value="<?php echo $record->level;?>"/>					
				</div>
			</div>
		</div>
		<div class="form-group fieldRequired row">
			<label class="col-md-2">STR</label>
			<div class="col-sm-10">
				<div class="row">
					<input type="text" name="str" placeholder="" class="two form-control" value="<?php echo $record->str;?>"/>					
				</div>
			</div>
		</div>
		<div class="form-group fieldRequired row">
			<label class="col-md-2">CON</label>
			<div class="col-sm-10">
				<div class="row">
					<input type="text" name="con" placeholder="" class="two form-control" value="<?php echo $record->con;?>"/>					
				</div>
			</div>
		</div>
		<div class="form-group fieldRequired row">
			<label class="col-md-2">Dex</label>
			<div class="col-sm-10">
				<div class="row">
					<input type="text" name="dex" placeholder="" class="two form-control" value="<?php echo $record->dex;?>"/>					
				</div>
			</div>
		</div>
		<div class="form-group fieldRequired row">
			<label class="col-md-2">INT</label>
			<div class="col-sm-10">
				<div class="row">
					<input type="text" name="int" placeholder="" class="two form-control" value="<?php echo $record->int;?>"/>					
				</div>
			</div>
		</div>
		<div class="form-group fieldRequired row">
			<label class="col-md-2">WIS</label>
			<div class="col-sm-10">
				<div class="row">
					<input type="text" name="wis" placeholder="" class="two form-control" value="<?php echo $record->wis;?>"/>					
				</div>
			</div>
		</div>
		<div class="form-group fieldRequired row">
			<label class="col-md-2">CHA</label>
			<div class="col-sm-10">
				<div class="row">
					<input type="text" name="cha" placeholder="" class="two form-control" value="<?php echo $record->cha;?>"/>					
				</div>
			</div>
		</div>
		<div class="form-group fieldRequired row">
			<label class="col-md-2">Fortitude Bonus</label>
			<div class="col-sm-10">
				<div class="row">
					<input type="text" name="fortitude_bonus" placeholder="" class="two form-control" value="<?php echo $record->fortitude_bonus;?>"/>					
				</div>
			</div>
		</div>
		<div class="form-group fieldRequired row">
			<label class="col-md-2">Reflex Bonus</label>
			<div class="col-sm-10">
				<div class="row">
					<input type="text" name="reflex_bonus" placeholder="" class="two form-control" value="<?php echo $record->reflex_bonus;?>"/>					
				</div>
			</div>
		</div>
		<div class="form-group fieldRequired row">
			<label class="col-md-2">Will Power Bonus</label>
			<div class="col-sm-10">
				<div class="row">
					<input type="text" name="will_bonus" placeholder="" class="two form-control" value="<?php echo $record->will_bonus;?>"/>					
				</div>
			</div>
		</div>
		<div class="form-group fieldRequired row">
			<label class="col-md-2">AC Bonus</label>
			<div class="col-sm-10">
				<div class="row">
					<input type="text" name="ac_bonus" placeholder="" class="two form-control" value="<?php echo $record->ac_bonus;?>"/>					
				</div>
			</div>
		</div>
		<div class="form-group fieldRequired row">
			<label class="col-md-2">Hit Points</label>
			<div class="col-sm-10">
				<div class="row">
					<input type="text" name="hp" placeholder="" class="two form-control" value="<?php echo $record->hp;?>"/>					
				</div>
			</div>
		</div>
	</div>
</div>
