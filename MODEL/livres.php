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
		$sql.=" titre 			=".$this->connection->quote($pTB["Titre"]);
		$sql.=", auteur  		=".$this->connection->quote($pTB["Auteur"]);
		$sql.=", prix_unitaire	=".$this->connection->quote($pTB["Prix"]);
		$sql.=", actif 			=".$this->connection->quote($pTB["Actif"]);
		$sql.=" where ".$this->PK[0]." =  ".$this->connection->quote($pTB["#"]);

		return $this->connection->query($sql);
	}

	public function insert($pTB){

		$sql= " insert into ".$this->table;
		$sql.=" (titre, auteur, prix_unitaire, actif ) ";
		$sql.=" values ( ";
		$sql.=" 	".$this->connection->quote($pTB["Titre"]);
		$sql.=" 	,".$this->connection->quote($pTB["Auteur"]);
		$sql.=" 	,".$this->connection->quote($pTB["Prix"]);
		$sql.=" 	,".$this->connection->quote($pTB["Actif"]);
		$sql.=" ) ";

		$valRetour=$this->connection->query($sql);
		if($valRetour==true){
			$this->id[0]=$this->connection->lastInsertId();
		}else{
			$this->id[0]="";
		}

		return $valRetour;
	}

	public function setActif($id, $value) {
		$sql = "update ".$this->table." set actif = '".$value."' where ".$this->PK[0]." = '".$id."'";
		return $this->connection->query($sql);
	}
}
?>