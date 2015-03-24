<div class="panel panel-default">
	<div class="panel-heading">
		<span><?php echo $title; ?></span>
		<div class="panel-actions">
			<a class="btn btn-warning" href="/character/browse">Browse</a>
			<a class="btn btn-success" href="#" onclick="$('#form-skills').submit();return false;" class="buttonH bGreen">Save</a>
			<a class="btn btn-primary" href="/character/view/<?php echo $character->id; ?>">view</a>
			<a class="btn btn-primary" href="/character/edit/<?php echo $character->id; ?>">Character</a>
			<a class="btn btn-primary" href="/character/powers/<?php echo $character->id; ?>">Powers</a>
			<a class="btn btn-primary" href="/character/skills/<?php echo $character->id; ?>">Skills</a>
			<a class="btn btn-primary" href="/character/feats/<?php echo $character->id; ?>">Feats</a>
			<a class="btn btn-primary" href="/character/extras/<?php echo $character->id; ?>">Extras</a>
		</div>
	</div>
	<div class="panel-body">
		
		<form id="form-skills" action="/character/skills/<?php echo $character->id;?>" method="post">
			<table class="table">
				<thead>
					<tr>
						<th>Skill</th>
						<th>Trained</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($skills as $skill) :?>
					<tr>
						<td><?php echo $skill->title; ?></td>
						<td>
							<input type="checkbox" name="skill_<?php echo $skill->id;?>" <?php if ($skill->cs_id != null):?>checked="checked"<?php endif;?>/>
						</td>
					</tr>
				<?php endforeach; ?>	
				</tbody>
			</table>
		</form>
	</div>
</div>