<?php
class Livres extends Model{
	var $table = "livres";
	var $id;
	var $PK=array("LivreID");
	var $Rech=array("Titre", "auteur", "prix_unitaire", "actif");
	var $data;

/*'LivreID "#", titre "Titre", auteur "Auteur" , prix_unitaire "prix" , actif "actif"'*/
	public function update($pTB){
		$sql= " update ".$this->table;
		$sql.=" set ";
		$sql.=" LivreID			=".$this->connection->quote($pTB["LivreID"]);
		$sql.=", titre 			=".$this->connection->quote($pTB["titre"]);
		$sql.=", auteur  		=".$this->connection->quote($pTB["auteur"]);
		$sql.=", prix_unitaire	=".$this->connection->quote($pTB["prix_unitaire"]);
		$sql.=", actif 			=".$this->connection->quote($pTB["actif"]);
		$sql.=" where ".$this->PK[0]." =  ".$this->connection->quote($pTB["LivreID"]);

		return $this->connection->query($sql);
	}

	public function setActif($id, $value) {
		$sql = "update ".$this->table." set actif = '".$value."' where ".$this->PK[0]." = '".$id."'";
		return $this->connection->query($sql);
	}
}
?>