<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php require("Head.php"); ?>
	</head>	
	<body>
		<div id="Wrap">
			<div id="Top">
				<p><?php echo $Title; ?></p>
			</div>
			<div id="Middle">
				<h1>Example.com</h1>
			</div>
			<div id="Navigation">
			<?php require("Navigation.php"); ?>
			</div>
			<div id="Content">
				<?php echo $Content; ?>
			</div>
			<div id="Footer">
				<p>
				Example.com / &copy; 2013 /
				</p>
			</div>
		</div>
	</body>
</html>