<?php
	$isadmin = Control::is_admin();
	echo View::rtv_table($utilisateurs,"ZONE_RECH_USERS", '#',"../CONTROL/utilisateurs_fic.php", $isadmin);
?>