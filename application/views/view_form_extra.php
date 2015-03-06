<form id="form-character" method="post" action="<?php echo $action;?>" enctype="multipart/form-data">

	<div class="panel panel-default">
		<div class="panel-heading">
			<h1><?php echo $title; ?></h1>
			<div class="panel-actions">
				<a class="btn btn-warning" href="/character/extras/<?php echo $character_id;?>" class="buttonH bGreen">Back</a>
				<a class="btn btn-success" href="#" onclick="$('#form-character').submit();return false;" class="buttonH bGreen">Save</a>
			</div>
		</div>
		<div class="panel-body">
			<?php echo validation_errors('<div class="nWarning message"><p>', '</p></div>'); ?>

			<div class="form-group fieldRequired row">
				<label class="col-md-2">Title</label>
				<div class="col-sm-10">
					<div class="row">
						<input type="text" name="title" placeholder="" class="two form-control" value="<?php echo $record->title;?>"/>				
						<?php
						if (isset($record->image) && $record->image != null) 
							echo '<img src="/files/images/'.$record->image.'"/>';
						?>
					</div>
				</div>
			</div>

			<div class="form-group fieldRequired row">
				<label class="col-md-2">Image</label>
				<div class="col-sm-10">
					<div class="row">
						<input type="file" id="image" name="image"/>					
					</div>
				</div>
			</div>

			<div class="form-group fieldRequired row">
				<label class="col-md-2">Notes</label>
				<div class="col-sm-10">
					<div class="row">
						<textarea name="note" class="form-control" rows="3"><?php echo $record->note; ?></textarea>
					</div>
				</div>
			</div>

		</div>
	</div>

</form>