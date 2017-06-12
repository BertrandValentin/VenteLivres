<?php
class Utilisateurs extends Model{
	var $table = "utilisateurs";	
	var $id ;
	var $PK=array("Utilisateur");
	var $Rech=array("LastName", "FirstName");
	var $data ; 

	public function update($pTB){
		$sql= " update ".$this->table;
		$sql.=" set ";
		$sql.=" utilisateur =".$this->connection->quote($pTB["#"]);
		$sql.=", code 		=".$this->connection->quote($pTB["Code"]);
		$sql.=", nom  		=".$this->connection->quote($pTB["Nom"]);
		$sql.=", prenom 	=".$this->connection->quote($pTB["Prenom"]);
		$sql.=", admin 		=".$this->connection->quote($pTB["Admin"]);
		$sql.=", actif 		=".$this->connection->quote($pTB["Actif"]);
		$sql.=" where ".$this->PK[0]." =  ".$this->connection->quote($pTB["#"]); 
		return $this->connection->query($sql);
	}
}
?>