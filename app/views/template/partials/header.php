<?php 
	$lang = (isset($_COOKIE["lang"]) ? $_COOKIE["lang"] : 'en');
	//header('Content-Type: text/html; charset=ISO-8859-1');
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Directory</title> 
    <link href="/directory/public/css/bootstrap.css" rel="stylesheet">
    <link href="/directory/public/css/jquery-ui.min.css" rel="stylesheet">
    <link href="/directory/public/css/style.css" rel="stylesheet" type="text/css">


	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>    
	<script src="/directory/public/js/bootstrap.min.js"></script> 
	<script src="/directory/public/js/jquery-ui.min.js"></script>
	<script src="/directory/public/js/company.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js"></script>
</head>
<body>
	<div class="container">	
	<div class="pull-left"><a  class="btn" href="/directory/"><?php lang::test('Home', $lang); ?></a></div>	
	<div class="lang pull-right">
		<button class="btn" onclick="setLanguage('en')">EN</button>
		<button class="btn" onclick="setLanguage('ee')">EE</button>
	</div>
	</div>


	<style>

</style>
