<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
	<?php echo Asset::css('bootstrap.css'); ?>
	<?php echo Asset::css('style.css'); ?>
	<script src='http://code.jquery.com/jquery-1.8.2.min.js'></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css" />
<script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>
<?php echo Asset::js('jquery-ui-timepicker-addon.js'); ?>
	<?php echo Asset::js('uniteast.js'); ?>
</head>
<body>
	<div class="container">
		<div class="navbar">
			<div class="navbar-inner">
				<a class="brand" href="/">Unit East</a>
				<ul class="nav pull-right">
					<li><a href="#">Whats On</a></li>
					<li><a href="/book">Book the Space</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="container">
	  <div class="row">
			<div class="span12">
				
				<?php echo $content;?>

			</div>
	  </div>
	</div>
</body>
</html>