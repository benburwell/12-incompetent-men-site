<?php date_default_timezone_set("America/New_York"); ?>
<?php $p = $_SERVER['REQUEST_URI']; ?>
<!DOCTYPE html>
<html>
	<head>
		<title>12 Incompetent Men (And Women!)<?php echo (isset($page_title))? ": $page_title":""; ?></title>
		<link href="http://fonts.googleapis.com/css?family=Molengo" rel="stylesheet" type="text/css" />
		<link href="http://fonts.googleapis.com/css?family=Crimson+Text:regularitalic" rel="stylesheet" type="text/css" />
		<link href="http://fonts.googleapis.com/css?family=Limelight" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="/inc/css/12im.css" media="screen" />
		<?php /* <link rel="stylesheet" type="text/css" href="/inc/css/12im-mobile.css" media="only screen and (max-device width:480px)" /> */ ?>
		<link rel="shortcut icon" href="/media/icons/favicon.ico" type="image/png" />
		<link rel="apple-touch-icon" href="/media/icons/Icon2x.png" />
	</head>
	<body>
		<div class="container">
			<header>
				<h1>12 Incompetent Men (And Women!)</h1>
				<h2><a href="http://www.edfringe.com/">Edinburgh Fringe Festival</a> &loz; August 2011</h2>
				<nav id="site_nav">
					<a href="index.php" <?php echo ($p=='/'||$p=='/index.php')?'class="current"':''; ?>>The Show</a>
					<a href="jurors.php" <?php echo ($p=='/jurors.php')?'class="current"':''; ?>>The Jurors</a>
				</nav>
			</header>
			<div class="body<?php echo ($p=='/'||$p=='/index.php')?' home':''; ?>">
