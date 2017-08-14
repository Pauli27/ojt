<!doctype html>
<html>
<head>
	<title>Test</title>
	<link rel="stylesheet" href="public/css/default.css" />
	<script type="text/javascript" src="public/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="public/js/custom.js"></script>
</head>
<body>

<?php Session::init(); ?>
	
<div id="header">
	Header
	<br />
	<a href="<?php  ?>index">Index</a>
	<a href="<?php  ?>help">Help</a>
	<?php if (Session::get('loggedIn') == true):?>
		<a href="<?php  ?>dashboard/logout">Logout</a>	
	<?php else: ?>
		<a href="<?php  ?>login">Login</a>
	<?php endif; ?>
</div>
	
<div id="content">
	
	