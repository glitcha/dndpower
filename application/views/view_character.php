<div class="panel panel-default">
	<div class="panel-heading">
		<span><?php echo $title; ?></span>
		<div class="panel-actions">
			<a class="btn btn-primary" href="/character/browse" class="buttonH bGreen">Back</a>
		</div>
	</div>
	<div class="panel-body">
		<?php echo validation_errors('<div class="nWarning message"><p>', '</p></div>'); ?>
		
			<div>
				<label class="col-md-2">Name</label>
				<label name="name"><?php echo $record->name;?></label>	
			</div>
			<div>
				<label class="col-md-2">Race</label>
				<label><?php echo $record->race; ?></label>
			</div>
			<div>	
				<label class="col-md-2">Class</label>
				<label><?php echo $record->class; ?></label>
			</div>
			<div>	
				<label class="col-md-2">Level</label>
				<label name="level"><?php echo $record->level;?></label>	
			</div>
			<div>	
				<label class="col-md-2">STR</label>
				<label name="str"><?php echo $record->str;?></label>	
			</div>
			<div>	
				<label class="col-md-2">CON</label>
				<label name="con"><?php echo $record->con;?></label>	
			</div>
			<div>	
				<label class="col-md-2">Dex</label>
				<label name="dex"><?php echo $record->dex;?></label>	
			</div>
			<div>	
				<label class="col-md-2">INT</label>
				<label name="int"><?php echo $record->int;?></label>	
			</div>
			<div>	
				<label class="col-md-2">WIS</label>
				<label name="wis"><?php echo $record->wis;?></label>	
			</div>
			<div>	
				<label class="col-md-2">CHA</label>
				<label name="cha"><?php echo $record->cha;?></label>	
			</div>
			<div>	
				<label class="col-md-2">Fortitude</label>
				<label name="fortitude_bonus"><?php echo $record->fortitude_bonus;?></label>	
			</div>
			<div>	
				<label class="col-md-2">Reflex</label>
				<label name="reflex_bonus"><?php echo $record->reflex_bonus;?></label>	
			</div>
			<div>	
				<label class="col-md-2">Will Power</label>
				<label name="will_bonus"><?php echo $record->will_bonus;?></label>	
			</div>
			<div>	
				<label class="col-md-2">Hit Points</label>
				<label name="hp"><?php echo $record->hp;?></label>	
			</div>
		</div>
	</div>
</div>
