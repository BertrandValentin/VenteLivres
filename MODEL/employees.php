<?php
class employees extends Model{
	var $table = "utilisateurs";	
	var $id ;
	var $PK=array("Utilisateur");
	var $Rech=array("LastName", "FirstName");
	var $data ; 
}
?>