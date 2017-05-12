<?php
	/*Init de la session */
	session_start();
	session_regenerate_id();

	/*Require des utilitaires MVC */
	require_once('../MODEL/model.php');
	require_once('../VIEW/view.php');
	require_once('../CONTROL/control.php');

	/*Vérifie si l'utilisateur est bien connecté ==> redirection vers le Login*/
	/*
	if (strpos($_SERVER['REQUEST_URI'], '/CONTROL/login')==false && Control::user_connected()==false ){
	    header("Location: login.php");
	}
	*/
?>