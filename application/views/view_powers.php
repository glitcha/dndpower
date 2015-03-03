		<?php foreach ($powers as $power) :?>
		<div class="powers">
				
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
		<?php endforeach; ?>