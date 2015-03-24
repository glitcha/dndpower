<div class="panel panel-default">
	<div class="panel-heading">
		<span><?php echo $title; ?></span>
		<div class="panel-actions">
			<a class="btn btn-primary" href="/character/browse" class="buttonH bGreen">Back</a>
			<a class="btn btn-success" href="#" onclick="$('#form-character-view').submit();return false;" class="buttonH bGreen">Save</a>
		</div>
	</div>
	<div class="panel-body">		
		<div class="row">
			<div class="col-md-6">
				<form id="form-character-view" class="form-horizontal" method="post" action="/character/view/<?php echo $record->id;?>">
					<div class="form-group">
						<label class="col-md-4 control-label">Name</label>
						<div class="col-md-6">
							<label name="name" class="form-control-static"><?php echo $record->name;?></label>	
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-4 control-label">Race</label>
						<div class="col-md-6">
							<label class="form-control-static"><?php echo $record->race; ?></label>
						</div>
					</div>
					<div class="form-group">	
						<label class="col-md-4 control-label">Class</label>
						<div class="col-md-6">
							<label class="form-control-static"><?php echo $record->class; ?></label>
						</div>
					</div>
					<div class="form-group">	
						<label class="col-md-4 control-label">Level</label>
						<div class="col-md-6">
							<label name="level" class="form-control-static"><?php echo $record->level;?></label>	
						</div>
					</div>
					<hr/>
					<div class="form-group">	
						<label class="col-md-4 control-label">STR</label>
						<div class="col-md-6">
							<label name="str" class="form-control-static"><?php echo $record->str;?></label>	
							<label name="att-bonus" class="form-control-static">(<?php echo $record->str_bonus;?>)</label>
						</div>
					</div>
					<div class="form-group">	
						<label class="col-md-4 control-label">CON</label>
						<div class="col-md-6">
							<label name="con" class="form-control-static"> <?php echo $record->con;?></label>	
							<label name="att-bonus" class="form-control-static">(<?php echo $record->con_bonus;?>)</label>
						</div>
					</div>
					<div class="form-group">	
						<label class="col-md-4 control-label">DEX</label>
						<div class="col-md-6">
							<label name="dex" class="form-control-static"><?php echo $record->dex;?></label>	
							<label name="att-bonus" class="form-control-static">(<?php echo $record->dex_bonus;?>)</label>
						</div>
					</div>
					<div class="form-group">	
						<label class="col-md-4 control-label">INT</label>
						<div class="col-md-6">
							<label name="int" class="form-control-static"><?php echo $record->int;?></label>	
							<label name="att-bonus" class="form-control-static">(<?php echo $record->int_bonus;?>)</label>
						</div>
					</div>
					<div class="form-group">	
						<label class="col-md-4 control-label">WIS</label>
						<div class="col-md-6">
							<label name="wis" class="form-control-static"><?php echo $record->wis;?></label>	
							<label name="att-bonus" class="form-control-static">(<?php echo $record->wis_bonus;?>)</label>
						</div>
					</div>
					<div class="form-group">	
						<label class="col-md-4 control-label">CHA</label>
						<div class="col-md-6">
							<label name="cha" class="form-control-static"><?php echo $record->cha;?></label>	
							<label name="att-bonus" class="form-control-static">(<?php echo $record->cha_bonus;?>)</label>
						</div>
					</div>
					<hr/>
					<div class="form-group">	
						<label class="col-md-4 control-label">Fortitude</label>
						<div class="col-md-6">
							<label name="fortitude" class="form-control-static"><?php echo $record->fortitude['total'];?></label>	
							<label name="fortitude" class="form-control-static"><?php echo $record->fortitude['description'];?></label>	
						</div>
					</div>
					<div class="form-group">	
						<label class="col-md-4 control-label">Reflex</label>
						<div class="col-md-6">
							<label name="reflex" class="form-control-static"><?php echo $record->reflex['total'];?></label>	
							<label name="reflex" class="form-control-static"><?php echo $record->reflex['description'];?></label>	
						</div>
					</div>
					<div class="form-group">	
						<label class="col-md-4 control-label">Will Power</label>
						<div class="col-md-6">
							<label name="will" class="form-control-static"><?php echo $record->will['total'];?></label>	
							<label name="will_working" class="form-control-static"><?php echo $record->will['description'];?></label>	
						</div>
					</div>
					<div class="form-group">	
						<label class="col-md-4 control-label">AC</label>
						<div class="col-md-6">
							<label name="ac" class="form-control-static"><?php echo $record->ac['total'];?></label>	
							<label name="ac_working" class="form-control-static"><?php echo $record->ac['description'];?></label>	
						</div>
					</div>
					<hr/>
					<div class="form-group">	
						<label class="col-md-4 control-label">Hit Points</label>
						<div class="col-md-6">
							<label name="hp" class="form-control-static"><?php echo $record->hp;?></label>	
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-4 control-label">Current Hit Points</label>
						<div class="col-md-6">
							<div class="input-group">
								<input class="form-control" type="text" name="hp_current" placeholder="" class="two form-control" value="<?php echo $record->hp_current;?>"/>
								<span class="input-group-btn">
									<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
								</span>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-4 control-label">Gold Coin</label>
						<div class="col-md-6">
							<div class="input-group">
								<input class="form-control" type="text" name="gold" placeholder="" class="two form-control" value="<?php echo $record->gold;?>"/>
								<span class="input-group-btn">
									<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
								</span>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="col-md-6">
				<div>
					<?php if ($record->image != ''): ?>
					<img src="/files/images/<?php echo $record->image;?>" width="300px"/>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
	<div class="panel-body">
		<div class="row">
			<div class="col-md-8">
				<h2>Skills</h2>
				<?php echo $skills;?>
			</div>
			<div class="col-md-4">
				<h2>Feats</h2>
				<?php echo $feats;?>		
			</div>
		</div>
	</div>
	<div class="panel-body">
		<h2>Powers</h2>
		<?php echo $powers;?>
	</div>
	<div class="panel-body">
		<h2>Extra</h2>
		<?php echo $extras;?>
	</div>
</div>
