<div class="navbar navbar-static-top affix" role="navigation" data-spy="affix" data-offset-top="1" data-offset-bottom="0">
	<div class="container home">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<button type="button" class="btn btn-primary" id="quick-attr">Attr</button>
			<a class="navbar-brand" href="/cms/page/default">
				<span>D&D 4th</span>
			</a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav home">
				<li><a href="/character/browse">View Characters</a></li>
				<li><a href="/character/edit/<?php echo $record->id; ?>">Edit Character</a></li>
			</ul>
		</div>
	</div>
</div>

<div id="quick-attr-content" class="hidden">
	<table class="table">
		<thead>
			<tr>
				<th>Attr</th>
				<th>Stat</th>
				<th>Bonus</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>STR</td>
				<td><?php echo $record->str;?></td>
				<td><?php echo $record->str_bonus;?></td>
			</tr>
			<tr>
				<td>CON</td>
				<td><?php echo $record->con;?></td>
				<td><?php echo $record->con_bonus;?></td>
			</tr>
			<tr>
				<td>DEX</td>
				<td><?php echo $record->dex;?></td>
				<td><?php echo $record->dex_bonus;?></td>
			</tr>
			<tr>
				<td>INT</td>
				<td><?php echo $record->int;?></td>
				<td><?php echo $record->int_bonus;?></td>
			</tr>
			<tr>
				<td>WIS</td>
				<td><?php echo $record->wis;?></td>
				<td><?php echo $record->wis_bonus;?></td>
			</tr>
			<tr>
				<td>CHA</td>
				<td><?php echo $record->cha;?></td>
				<td><?php echo $record->cha_bonus;?></td>
			</tr>
			<tr>
				<td>Fortitude</td>
				<td><?php echo $record->fortitude['total'];?></td>
				<td></td>
			</tr>
			<tr>
				<td>Reflex</td>
				<td><?php echo $record->reflex['total'];?></td>
				<td></td>
			</tr>
			<tr>
				<td>Will Power</td>
				<td><?php echo $record->will['total'];?></td>
				<td></td>
			</tr>
			<tr>
				<td>AC</td>
				<td><?php echo $record->ac['total'];?></td>
				<td></td>
			</tr>
		</tbody>
	</table>


<!-- 					<div class="form-group">
						<label class="col-sm-4 control-label">Fortitude</label>
						<div class="col-sm-6">
							<label name="fortitude" class="form-control-static"><?php echo $record->fortitude['total'];?></label>
							<label name="fortitude_working" class="working form-control-static"><?php echo $record->fortitude['description'];?></label>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4 control-label">Reflex</label>
						<div class="col-sm-6">
							<label name="reflex" class="form-control-static"><?php echo $record->reflex['total'];?></label>
							<label name="reflex_working" class="working form-control-static"><?php echo $record->reflex['description'];?></label>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4 control-label">Will Power</label>
						<div class="col-sm-6">
							<label name="will" class="form-control-static"><?php echo $record->will['total'];?></label>
							<label name="will_working" class="working form-control-static"><?php echo $record->will['description'];?></label>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4 control-label">AC</label>
						<div class="col-sm-6">
							<label name="ac" class="form-control-static"><?php echo $record->ac['total'];?></label>
							<label name="ac_working" class="working form-control-static"><?php echo $record->ac['description'];?></label>
						</div>
					</div> -->
</div>

<div class="panel panel-default">
	<div class="panel-body">
		<div>

			<!-- Nav tabs -->
			<ul class="nav nav-tabs" role="tablist">
				<li role="presentation" class="active"><a href="#details" aria-controls="details" role="tab" data-toggle="tab">Details</a></li>
				<li role="presentation"><a href="#attributes" aria-controls="attributes" role="tab" data-toggle="tab">Attr</a></li>
				<li role="presentation"><a href="#tracking" aria-controls="tracking" role="tab" data-toggle="tab">HP</a></li>
				<li role="presentation"><a href="#skills" aria-controls="skills" role="tab" data-toggle="tab">Skills</a></li>
				<li role="presentation"><a href="#feats" aria-controls="feats" role="tab" data-toggle="tab">Feats</a></li>
				<li role="presentation"><a href="#powers" aria-controls="powers" role="tab" data-toggle="tab">Powers</a></li>
				<li role="presentation"><a href="#extras" aria-controls="extras" role="tab" data-toggle="tab">Extras</a></li>
			</ul>

			<!-- Tab panes -->
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="details">
					<div class="">
						<div class="form-group">
							<label class="col-sm-4 control-label">Name</label>
							<div class="col-sm-6">
								<label name="name" class="form-control-static"><?php echo $record->name;?></label>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label">Race</label>
							<div class="col-sm-6">
								<label class="form-control-static"><?php echo $record->race; ?></label>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label">Class</label>
							<div class="col-sm-6">
								<label class="form-control-static"><?php echo $record->class; ?></label>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label">Level</label>
							<div class="col-sm-6">
								<label name="level" class="form-control-static"><?php echo $record->level;?></label>
							</div>
						</div>
						<div>
							<?php if ($record->image != ''): ?>
							<img src="/files/images/<?php echo $record->image;?>" width="300px"/>
							<?php endif; ?>
						</div>
					</div>
				</div>
				<div role="tabpanel" class="tab-pane" id="attributes">
					<div class="form-group">
						<label class="col-sm-4 control-label">STR<span class="light">ength</span></label>
						<div class="col-sm-6">
							<label name="str" class="form-control-static"><?php echo $record->str;?></label>
							<label name="att-bonus" class="bonus form-control-static">(<?php echo $record->str_bonus;?>)</label>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4 control-label">CON<span class="light">stitution</span></label>
						<div class="col-sm-6">
							<label name="con" class="form-control-static"> <?php echo $record->con;?></label>
							<label name="att-bonus" class="bonus form-control-static">(<?php echo $record->con_bonus;?>)</label>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4 control-label">DEX<span class="light">terity</span></label>
						<div class="col-sm-6">
							<label name="dex" class="form-control-static"><?php echo $record->dex;?></label>
							<label name="att-bonus" class="bonus form-control-static">(<?php echo $record->dex_bonus;?>)</label>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4 control-label">INT<span class="light">elligence</span></label>
						<div class="col-sm-6">
							<label name="int" class="form-control-static"><?php echo $record->int;?></label>
							<label name="att-bonus" class="bonus form-control-static">(<?php echo $record->int_bonus;?>)</label>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4 control-label">WIS<span class="light">dom</span></label>
						<div class="col-sm-6">
							<label name="wis" class="form-control-static"><?php echo $record->wis;?></label>
							<label name="att-bonus" class="bonus form-control-static">(<?php echo $record->wis_bonus;?>)</label>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4 control-label">CHA<span class="light">risma</span></label>
						<div class="col-sm-6">
							<label name="cha" class="form-control-static"><?php echo $record->cha;?></label>
							<label name="att-bonus" class="bonus form-control-static">(<?php echo $record->cha_bonus;?>)</label>
						</div>
					</div>
					<hr/>
					<div class="form-group">
						<label class="col-sm-4 control-label">Fortitude</label>
						<div class="col-sm-6">
							<label name="fortitude" class="form-control-static"><?php echo $record->fortitude['total'];?></label>
							<label name="fortitude_working" class="working form-control-static"><?php echo $record->fortitude['description'];?></label>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4 control-label">Reflex</label>
						<div class="col-sm-6">
							<label name="reflex" class="form-control-static"><?php echo $record->reflex['total'];?></label>
							<label name="reflex_working" class="working form-control-static"><?php echo $record->reflex['description'];?></label>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4 control-label">Will Power</label>
						<div class="col-sm-6">
							<label name="will" class="form-control-static"><?php echo $record->will['total'];?></label>
							<label name="will_working" class="working form-control-static"><?php echo $record->will['description'];?></label>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4 control-label">AC</label>
						<div class="col-sm-6">
							<label name="ac" class="form-control-static"><?php echo $record->ac['total'];?></label>
							<label name="ac_working" class="working form-control-static"><?php echo $record->ac['description'];?></label>
						</div>
					</div>
				</div>
				<div role="tabpanel" class="tab-pane" id="tracking">
					<form id="form-character-view" class="form-horizontal" method="post" action="/character/view/<?php echo $record->id;?>">
						<div class="form-group">
							<label class="col-sm-4 control-label">Hit Points</label>
							<div class="col-sm-6">
								<label name="hp" class="form-control-static"><?php echo $record->hp;?></label>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label">Current Hit Points</label>
							<div class="col-sm-6">
								<div class="input-group">
									<input class="form-control" type="text" name="hp_current" placeholder="" class="two form-control" value="<?php echo $record->hp_current;?>"/>
									<span class="input-group-btn">
										<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
									</span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label">Gold Coin</label>
							<div class="col-sm-6">
								<div class="input-group">
									<input class="form-control" type="text" name="gold" placeholder="" class="two form-control" value="<?php echo $record->gold;?>"/>
									<span class="input-group-btn">
										<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
									</span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label"> </label>
							<div class="col-sm-6">
								<button class="btn btn-primary" type="submit">Save</button>
							</div>
						</div>
					</form>
				</div>
				<div role="tabpanel" class="tab-pane" id="skills">
					<h2>Skills</h2>
					<?php echo $skills;?>
				</div>
				<div role="tabpanel" class="tab-pane" id="feats">
					<h2>Feats</h2>
					<?php echo $feats;?>
				</div>
				<div role="tabpanel" class="tab-pane" id="powers">
					<h2>Powers</h2>
					<?php echo $powers;?>
				</div>
				<div role="tabpanel" class="tab-pane" id="extras">
					<h2>Extra</h2>
					<?php echo $extras;?>
				</div>
			</div>
		</div>
	</div>
</div>
