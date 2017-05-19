<?php
class utilisateurs extends Model{
	var $table = "utilisateurs";	
	var $id;
	var $PK=array("utilisateur");
	var $Rech=array("code","nom","prenom","admin","actif");
	var $data ;
}
?>