<?php 
class Control{
	public static function auth($pUtil, $pCode){
			$utilisateurs=Model::load("utilisateurs");
			$utilisateurs->id[0]=$pUtil;
			$utilisateurs->read();
			if (count($utilisateurs->data)==1 && $utilisateurs->data[0]->code==$pCode && $utilisateurs->data[0]->actif==2){
				return true;
			} else{
				return false;
			}
	}

	public static function user_connected(){
			if (isset($_SESSION['UTILISATEUR']) && $_SESSION['UTILISATEUR'] != ''){
				return true;
			} else{
				return false;
			}
	}

	public static function get_current_user() {
		$utilisateurs=Model::load("utilisateurs");
		$utilisateurs->id[0]=$_SESSION['UTILISATEUR'];
		$utilisateurs->read();
		if( isset($utilisateurs->data[0]) ) {
			return $utilisateurs->data[0];
		}
		else {
			return null;
		}
	}
}
?>