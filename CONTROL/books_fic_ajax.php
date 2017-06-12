
<?php 
	require_once('../CONTROL/core.php');
	$books=Model::load("livres");
	$books->id[0]=$_POST['RECH_FIC'];
	$books->read('LivreID "#", titre "Titre", auteur "Auteur" , prix_unitaire "prix" , actif "actif" ');
	echo view::rtv_fiche($books);
 ?>
	