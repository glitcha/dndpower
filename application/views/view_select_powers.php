<div class="panel panel-default">
	<div class="panel-heading">
		<span><?php echo $title; ?></span>
		<div class="panel-actions">
			<a class="btn btn-primary" href="/character/browse" class="buttonH bGreen">Back</a>
		</div>
	</div>
	<div class="panel-body">
		
		<?php foreach ($powers as $power) :?>
		<div class="power-select">
			<div class="row">
				<div class="col-md-8">
					<div class="power <?php echo strtolower($power->background);?>">
						<div class="row heading">
							<div class="col-md-8"><h4><?php echo $power->name; ?></h4></div>
							<div class="col-md-4"><h4>Level <?php echo $power->level; ?></h4></div>
						</div>
						<div class="row">
							<div class="col-md-6"><?php echo $power->sub_type;?></div>
							<div class="col-md-6"><?php echo $power->frequency;?></div>
						</div>
						<div class="description">
							<?php echo $power->flavor_text; ?>
						</div>
						<div class="rules">
							<?php echo $power->rule_text;?>
						</div>
					</div>
				</div>
				<div class="col-md-4">
				<?php if ($power->cp_id == null):?>
					<a href="/character/add_power/<?php echo $character->id;?>/<?php echo $power->id; ?>" class="btn btn-primary">Add</a>
				<?php else: ?>
					<a href="/character/remove_power/<?php echo $character->id;?>/<?php echo $power->id; ?>" class="btn btn-danger">Remove</a>
				<?php endif; ?>
				</div>
			</div>
		</div>
		<?php endforeach; ?>
		
	</div>
</div>