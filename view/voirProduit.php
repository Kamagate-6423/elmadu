
<?php require('header.php') ?>

	<?php
		
		$image_id=verifierDonne($_GET['id_pro']);
		
		$reqSelect='SELECT id_pro, image_pro, nom_pro, inter_poids, prix, stock, info_pro FROM produits WHERE id_pro=?';
		$reqVariable=array($image_id);
		
		$reqVoirProduit = $bdd->requetes($reqSelect,$reqVariable);
	
	?>
	

 <div class="voirProduit">
	<?php while($donnee=$reqVoirProduit->fetch()){?>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="col-xs-12 col-sm-7 col-md-6 col-lg-6 voirImage" >
				<img src="../public/image/<?=$donnee['image_pro']?>" alt="" class="img-responsive">
			</div>
			<div class="col-xs-12 col-sm-5 col-md-6 col-lg-6 voirDescript"> 
				<h4><?=$donnee['nom_pro']?></h4>
				<span><?=$donnee['info_pro']?></span><br/>
				Des <?=$donnee['nom_pro']?> dont le poids est aux environs de <?=$donnee['inter_poids']?> coût <?=$donnee['prix']?>fcfa
			</div>
		</div>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 Retour">
			<a href="javascript:history.back()">
				<button class="btn btn-default">Retour aux produits</button>
			</a>
		</div>
		<?php if($donnee['stock']=='En Stock'){ ?>
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 Ajouter">
				<a href="../controller/requetePanier.php?id=<?=$donnee['id_pro']; ?> " class="btn btn-success ajoutPanier" style="height:100%; width:100%;">
				<span class="glyphicon glyphicon-plus" style="color:yellow"></span>
				Ajouter au panier
			</a>
		</div>
		<?php  	}else if($donnee['stock']=='Stock epuisé'){?>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
		<a href="#" class="btn btn-success ajoutPanierNon" style="background-color:rgb(200,0,0,0.7); height:100%; width:100%;">Stock épuisé</a>
		</div>
<?php	} 
		}
		$reqVoirProduit->closeCursor();
	?>
 </div>
  
  <?php include('footer.php'); ?>