<?php
	require_once('../CONTROL/core.php');
	require_once('../VIEW/header.php');
	require_once('../VIEW/left.php');

	$stats = Control::get_basket_stats();
	$basket = array();
	if($stats->count > 0) {
		$basket = $_SESSION['basket'];
	}
	require_once('../VIEW/basket.php');
	require_once('../VIEW/right.php');

	require_once('../VIEW/footer.php');
?>