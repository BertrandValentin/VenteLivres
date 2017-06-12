<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Vente de livres</title>
	<link rel="stylesheet" href="../VIEW/css/page.css">
	<!-- <script src="/javascripts/application.js" type="text/javascript" charset="utf-8" async defer></script>
	<script src="./js/init.js" type="text/javascript" charset="utf-8" async defer></script> -->
</head>
<body>
	<header>
		<h1>
			Vente de livres
		</h1>
		
		<?php
		if (Control::user_connected()){
			require_once('../VIEW/menu.php');
		}
		?>
	</header>
