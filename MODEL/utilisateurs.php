<?php
class Utilisateurs extends Model{
	var $table = "utilisateurs";	
	var $id;
	var $PK=array("utilisateur");
	var $Rech=array("code","nom","prenom","admin","actif");
	var $data ;

	public function update($pTB){
		$sql= " update ".$this->table;
		$sql.=" set ";
		$sql.="code 		=".$this->connection->quote($pTB["Code"]);
		$sql.=", nom  		=".$this->connection->quote($pTB["Nom"]);
		$sql.=", prenom 	=".$this->connection->quote($pTB["Prenom"]);
		$sql.=", admin 		=".$this->connection->quote($pTB["Admin"]);
		$sql.=", actif 		=".$this->connection->quote($pTB["Actif"]);
		$sql.=" where ".$this->PK[0]." =  ".$this->connection->quote($pTB["#"]);
		
		return $this->connection->query($sql);
	}

	public function setActif($id, $value) {
		$sql = "update ".$this->table." set actif = '".$value."' where ".$this->PK[0]." = '".$id."'";
		return $this->connection->query($sql);
	}

	public function insert($pTB){
		$sql= " insert into ".$this->table;
		$sql.=" (utilisateur, code, nom, prenom, admin, actif ) ";
		$sql.=" values ( ";
		$sql.=" 	".strtolower($this->connection->quote($pTB["Nom"]));
		$sql.=" 	,".$this->connection->quote($pTB["Code"]);
		$sql.=" 	,".$this->connection->quote($pTB["Nom"]);
		$sql.=" 	,".$this->connection->quote($pTB["Prenom"]);
		$sql.=" 	,".$this->connection->quote($pTB["Admin"]);
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
}
?>