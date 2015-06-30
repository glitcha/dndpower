<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="/js/bower_components/bootstrap/dist/css/bootstrap.min.css" />
		<!-- <link rel="stylesheet" href="/js/bower_components/bootstrap/dist/css/bootstrap-theme.min.css" /> -->
		<link rel="stylesheet" href="/css/app.css" />
		<script src="/js/bower_components/jquery/dist/jquery.min.js"></script>
		<script src="/js/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		<script src="/js/app.js"></script>
		<?php if (isset($scripts)) :?>
		<?php foreach ($scripts as $script):?>
		<script src="<?php echo $script; ?>"></script>
		<?php endforeach; ?>
		<?php endif;?>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<?php echo $content; ?>
	</body>
</html>
