<?php
class Livres extends Model{
	var $table = "livres";	
	var $id ;
	var $PK=array("LivreID");
	var $Rech=array("titre","auteur","prix_unitaire","actif");
	var $data ; 
}
?>