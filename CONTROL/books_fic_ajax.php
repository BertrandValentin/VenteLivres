<?php
	require_once('../CONTROL/core.php');
	$books=Model::load("livres");

	/* admin */
	if ( isset($_SESSION['USEROBJECT']) && isset($_SESSION['USEROBJECT']->admin) && $_SESSION['USEROBJECT']->admin == '2') {
		$livres=Model::load("livres");
		if(isset($_POST['FormFiche'])){
			if($livres->update($_POST)){
				echo "Modification effectu&eacute;e";
			}
			$_POST['RECH_FIC']=$_POST['LivreID'];
		}
		$livres->id[0]=$_POST['RECH_FIC'];
		$livres->read('');
		echo VIEW::rtv_Fiche_Admin($livres,"../CONTROL/books_fic.php","#");
	}
	/* normal user */
	else {
		$books->id[0]=$_POST['RECH_FIC'];
		$books->read('LivreID "#", titre "Titre", auteur "Auteur" , prix_unitaire "Prix" , actif "Actif"');
		echo view::rtv_fiche($books);
	}
 ?>