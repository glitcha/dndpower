<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="/css/app.css" />
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css" />
		<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<div data-role="page" data-theme="a" id="home">
			<ul id="listview" data-role="listview" data-filter="true">
				<?php foreach ($powers as $power) : ?>
				<li data-name="<?php echo $power->id; ?>">
					<a href="#" ><?php echo $power->super_type; ?> - <?php echo $power->level; ?> - <?php echo $power->name; ?></a>
				</li>
				<?php endforeach; ?>
			</ul>
		</div>
		
		<div data-role="page" data-theme="a" id="power">
			 
		</div>
		
	</body>
	<script>
		$('ul').children('li').bind('touchstart mousedown', function(e) {

			var power_id = $(this).attr('data-name');
			
			$.ajax({
				type: 'GET',
				url: '/power/render/' + power_id,
				success: function(data) {
					$('#power').html(data);
				}
			});
			
			jQuery.mobile.changePage('#power');
		});
	</script>
</html>