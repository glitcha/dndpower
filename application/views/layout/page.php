<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<title>D&amp;D 5th Edition</title>
		<link rel="stylesheet" href="/js/bower_components/bootstrap/dist/css/bootstrap.min.css">
	    <link rel="stylesheet" href="/js/bower_components/bootstrap/dist/css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="/css/darkly.min.css">
		<link rel="stylesheet" href="/css/style.css">
	</head>

	<body id="home">
		<header>
			<div class="container">
				<div class="navbar navbar-static-top affix" role="navigation" data-spy="affix" data-offset-top="1" data-offset-bottom="0">
					<div class="container home">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="/cms/page/default">
								<span>D&amp;D 5th</span>
							</a>
						</div>
						<div class="navbar-collapse collapse">
							<ul class="nav navbar-nav home">
								<li><a href="/character/create">Create Character</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</header>

		<main class="section">
			<div class="container">
				<?php if (isset($content)) echo $content; ?>
			</div>
		</main>
	</body>
</html>
