
<?php
	$isadmin = Control::is_admin();
	echo View::rtv_table($books, "ZONE_RECH_BOOKS", "#", "../CONTROL/books_fic.php", $isadmin);
?>
