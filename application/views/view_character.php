<div class="panel panel-default">
	<div class="panel-heading">
		<span><?php echo $title; ?></span>
		<div class="panel-actions">
			<a class="btn btn-primary" href="/character/browse" class="buttonH bGreen">Back</a>
		</div>
	</div>
	<div class="panel-body">
		
		<h2>Stats</h2>
		
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
			<label name="att-bonus"><?php echo $record->str_bonus;?></label>
		</div>
		<div>	
			<label class="col-md-2">CON</label>
			<label name="con"><?php echo $record->con;?></label>	
			<label name="att-bonus"><?php echo $record->con_bonus;?></label>
		</div>
		<div>	
			<label class="col-md-2">DEX</label>
			<label name="dex"><?php echo $record->dex;?></label>	
			<label name="att-bonus"><?php echo $record->dex_bonus;?></label>
		</div>
		<div>	
			<label class="col-md-2">INT</label>
			<label name="int"><?php echo $record->int;?></label>	
			<label name="att-bonus"><?php echo $record->int_bonus;?></label>
		</div>
		<div>	
			<label class="col-md-2">WIS</label>
			<label name="wis"><?php echo $record->wis;?></label>	
			<label name="att-bonus"><?php echo $record->wis_bonus;?></label>
		</div>
		<div>	
			<label class="col-md-2">CHA</label>
			<label name="cha"><?php echo $record->cha;?></label>	
			<label name="att-bonus"><?php echo $record->cha_bonus;?></label>
		</div>
		<div>	
			<label class="col-md-2">Fortitude</label>
			<label name="fortitude"><?php echo $record->fortitude['total'];?></label>	
			<label name="fortitude"><?php echo $record->fortitude['description'];?></label>	
		</div>
		<div>	
			<label class="col-md-2">Reflex</label>
			<label name="reflex"><?php echo $record->reflex['total'];?></label>	
			<label name="reflex"><?php echo $record->reflex['description'];?></label>	
		</div>
		<div>	
			<label class="col-md-2">Will Power</label>
			<label name="will"><?php echo $record->will['total'];?></label>	
			<label name="will_working"><?php echo $record->will['description'];?></label>	
		</div>
		<div>	
			<label class="col-md-2">Hit Points</label>
			<label name="hp"><?php echo $record->hp;?></label>	
		</div>
	</div>
	<div class="panel-body">
		<h2>Skills</h2>
		<?php echo $skills;?>
	</div>
	<div class="panel-body">
		<h2>Feats</h2>
		<?php echo $feats;?>
	</div>
	<div class="panel-body">
		<h2>Powers</h2>
		<?php echo $powers;?>
	</div>
</div>
