<form method="post" action="<?php echo $action;?>"

<div class="panel panel-default">
	<div class="panel-heading">
		<span><?php echo $title; ?></span>
		<div class="panel-actions">
			<a class="btn btn-default" href="#" onclick="$('#formUser').submit();return false;" class="buttonH bGreen">Save</a>
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
				<label class="col-md-2">Fortitude</label>
				<div class="col-sm-10">
					<div class="row">
						<input type="text" name="fortitude" placeholder="" class="two form-control" value="<?php echo $record->fortitude;?>"/>					
					</div>
				</div>
			</div>
			<div class="form-group fieldRequired row">
				<label class="col-md-2">Reflex</label>
				<div class="col-sm-10">
					<div class="row">
						<input type="text" name="reflex" placeholder="" class="two form-control" value="<?php echo $record->reflex;?>"/>					
					</div>
				</div>
			</div>
			<div class="form-group fieldRequired row">
				<label class="col-md-2">Will Power</label>
				<div class="col-sm-10">
					<div class="row">
						<input type="text" name="will" placeholder="" class="two form-control" value="<?php echo $record->will;?>"/>					
					</div>
				</div>
			</div>
		</div>
	</div>
</div>