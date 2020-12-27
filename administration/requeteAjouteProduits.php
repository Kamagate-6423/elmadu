
<?php
session_start();
include('bdd.php');	

	$nomImage = verifierDonne($_FILES['image']['name']);
	$imageChemin="../public/image/".basename($nomImage);
	$imageExtension=pathinfo($imageChemin,PATHINFO_EXTENSION);
	move_uploaded_file($_FILES['image']['tmp_name'], $imageChemin);
	
	$tmp =""; ///file_get_contents($_FILES['image']['tmp_name']);
	
	$categorie= verifierDonne($_POST['categorie']);
	$nomProduit= verifierDonne($_POST['nomProduit']);
	$chemin= verifierDonne($_POST['chemin']);
	$block= verifierDonne($_POST['block']);
	$PIntervalle= verifierDonne($_POST['PIntervalle']);
	$unite= verifierDonne($_POST['unite']);
	$poidsPrix = verifierDonne($_POST['poidsPrix']);
	$stock1= verifierDonne($_POST['stock']);
	$description = verifierDonne($_POST['description']);
	$motCle= verifierDonne($_POST['motCle']);
		
		
		$bdd=new BDD();
		$bdd->requetes('INSERT INTO produits(image_pro,categorie,nom_pro,block,inter_poids, unite,prix,stock,info_pro, mot_cle,binaire, chemin_desti, date_modif)
				VALUES(:image, :categorie, :image_nom, :block, :intervalle, :unite, :poidsPrix, :stock, :descrip, :motCle, :binaire, :chemin, NOW())',
				array(
			'image'=>$nomImage,
			'categorie'=>$categorie,
			'image_nom'=>$nomProduit,
			'block'=>$block,
			'intervalle'=>$PIntervalle,
			'unite'=>$unite,
			'poidsPrix'=>$poidsPrix,
			'stock'=>$stock1,
			'descrip'=>$description,
			'motCle'=>$motCle,
			'binaire'=>$tmp,
			'chemin'=>$chemin));
			
	$_SESSION['adminAlert']="Le produit ".$nomProduit." a été ajouté";

header("Location:adminHeader.php?admin=ajouteProduits");