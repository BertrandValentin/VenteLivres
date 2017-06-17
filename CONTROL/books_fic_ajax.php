<?php
	require_once('../CONTROL/core.php');
	$livres=Model::load("livres");

	/* je recupere le livre avec la propriete Actif, je teste et si c'est bon, je la unset et la place dans le panier */
	if(isset($_POST['BASKET_ADD'])) {
		if(!isset($_SESSION['basket']))
			$_SESSION['basket'] = array();
		$livres->id[0]=$_POST['BASKET_ADD'];
		$livres->read('LivreID "#", titre "Titre", auteur "Auteur" , prix_unitaire "Prix" , actif "Actif"');
		if(isset($livres->data[0], $livres->data[0]->Actif)) {
			if($livres->data[0]->Actif == '2') {
				unset($livres->data[0]->Actif);
				array_push($_SESSION['basket'], $livres->data[0]);
			}
		}
		require_once("../VIEW/right.php");
	}
	
	/* admin */
	if(Control::is_admin()) {
		if(isset($_POST['FormFiche'])&&isset($_POST['MODE'])){

			if($_POST['MODE']=="MODIF"){
				if($livres->update($_POST)){
					echo "Modification effectu&eacute;e";
				}
				$_POST['RECH_FIC']=$_POST['#'];
			}
			else  {
				if($livres->insert($_POST)){
					echo "Ajout effectu&eacute;";
				}
				require_once('../CONTROL/books.php');
			}
		}
		if(isset($_POST['FormFicheAjout'])){
			$_POST['RECH_FIC']='';
			$livres->data[0]['Titre'	]='o';
			$livres->data[0]['Auteur'	]='o';
			$livres->data[0]['Prix'		]='0';
			$livres->data[0]['Actif'	]='2';
			echo VIEW::rtv_fiche_Admin($livres,"../CONTROL/books_fic.php","#","AJOUT");
		}
		else {
			if(isset($_POST['RECH_FIC'])) {
				$livres->id[0]=$_POST['RECH_FIC'];
/*'LivreID "#", titre "Titre", auteur "Auteur" , prix_unitaire "prix" , actif "actif"'*/
				$livres->read('LivreID "#", titre "Titre", auteur "Auteur" , prix_unitaire "Prix" , actif "Actif"');
				echo VIEW::rtv_Fiche_Admin($livres,"../CONTROL/books_fic.php","#");
			}
		}
	}
	/* normal user */
	else {
		$livres->id[0]=$_POST['RECH_FIC'];
		$livres->read('titre "Titre", auteur "Auteur" , prix_unitaire "Prix" , actif "Actif"');
		echo view::rtv_fiche($livres);
	}
 ?>