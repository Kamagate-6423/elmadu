

<?php

	/***********************Les poulets morts et leurs morceaux***********************************/
	
	
	
	
		function requete($categorie)
		{
			$bdd= new BDD();
			$reqSql='SELECT id_pro, image_pro, categorie, nom_pro, chemin_desti, inter_poids, unite, prix, stock, info_pro, alt FROM produits WHERE categorie=? ORDER BY id_pro';
			$reqVariable=array($categorie);
			$req = $bdd->requetes($reqSql,$reqVariable);
			
			return $req;
		}

	class PouletsMorts{ /// class Volailles
		
		public function pouletsChairsC(){
			$req=requete('Pchair');
?>
			<div>
				<fieldset><legend><h2 style="font-size:100%">Poulet de chair entier</h2></legend>
				<?php	 
				while($donnee=$req->fetch()){
?>
					<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 PCongele">
						<div class="image">
							<a href="../view/voirProduit.php?id_pro=<?=$donnee['id_pro'];?>"><img src="../public/image/	<?php echo $donnee['image_pro']; ?>" alt="<?=$donnee['alt']?>" class="img-responsive">
							</a>
						</div>
						<div class="prix"><?=$donnee['nom_pro']." "?><?php echo $donnee['inter_poids']." ".$donnee['unite']; ?> l'entier <?=$donnee['prix']?> fcfa<br/>
						<?php if($donnee['stock']=='En Stock'){ ?>
								<a href="../controller/requetePanier.php?id=<?=$donnee['id_pro']?>" class="btn btn-success ajoutPanier"><span class="glyphicon glyphicon-plus" style="color:yellow"></span><span  class="ajoutAuPanier">Ajouter au panier</span></a>
						<?php  	}else if($donnee['stock']=='Stock epuisé'){ ?>
								<a href="#" class="btn btn-success ajoutPanierNon" style="background-color:rgb(200,0,0,0.7);">Stock épuisé</a>
						<?php   } ?>
							<br/><?php echo $donnee['stock']; ?> 
						</div>
					</div>
<?php
	}
				$req->closeCursor();
?>				</fieldset>
			</div>
			
<?php
		}
		
		public function pouletsChairsM(){
				$req=requete('Mchair');
?>		
			<div>
				<fieldset><legend><h2 style="font-size:100%">Différents parties du poulet</h2></legend>
				<?php	 
			while($donnee=$req->fetch()){
?>
				<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 PCongele">
						<div class="image">
							<a href="../view/voirProduit.php?id_pro=<?=$donnee['id_pro'];?>"><img src="../public/image/	<?php echo $donnee['image_pro']; ?>" alt="<?=$donnee['alt']?>" class="img-responsive">
							</a>
						</div>
						<div class="prix"><?=$donnee['nom_pro']." "?><?php echo $donnee['inter_poids']." ".$donnee['unite']; ?> à <?=$donnee['prix']?> fcfa<br/>
						<?php if($donnee['stock']=='En Stock'){ ?>
								<a href="../controller/requetePanier.php?id=<?=$donnee['id_pro']?>" class="btn btn-success ajoutPanier"><span class="glyphicon glyphicon-plus" style="color:yellow"></span><span  class="ajoutAuPanier">Ajouter au panier</span></a>
						<?php  	}else if($donnee['stock']=='Stock epuisé'){ ?>
								<a href="#" class="btn btn-success ajoutPanierNon" style="background-color:rgb(200,0,0,0.7);">Stock épuisé</a>
						<?php   } ?>
							<br/><?php echo $donnee['stock']; ?> 
						</div>
				</div>
<?php
	}
			$req->closeCursor();
?>
				</fieldset>
			</div>	
			

<?php			
		}
		public function pouletsPondeuses(){
			$req=requete('Ppondeuse');

?>
			<div>
				<fieldset><legend><h2 style="font-size:100%">Poulet pondeuse</h2></legend>
		
				<?php	 
			while($donnee=$req->fetch()){
?>
					<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 PCongele">
						<div class="image">
							<a href="../view/voirProduit.php?id_pro=<?=$donnee['id_pro'];?>"><img src="../public/image/	<?php echo $donnee['image_pro']; ?>" alt="<?=$donnee['alt']?>" class="img-responsive">
							</a>
						</div>
						<div class="prix"><?=$donnee['nom_pro']." "?><?php echo $donnee['inter_poids']." ".$donnee['unite']; ?> à <?=$donnee['prix']?> fcfa<br/>
						<?php if($donnee['stock']=='En Stock'){ ?>
								<a href="../controller/requetePanier.php?id=<?=$donnee['id_pro']?>" class="btn btn-success ajoutPanier"><span class="glyphicon glyphicon-plus" style="color:yellow"></span><span  class="ajoutAuPanier">Ajouter au panier</span></a>
						<?php  	}else if($donnee['stock']=='Stock epuisé'){ ?>
								<a href="#" class="btn btn-success ajoutPanierNon" style="background-color:rgb(200,0,0,0.7);">Stock épuisé</a>
						<?php   } ?>
							<br/><?php echo $donnee['stock']; ?> 
						</div>
					</div>
<?php
	}
			$req->closeCursor();
?>
				</fieldset>
			</div>		
<?php
		}
		
		public function cokeles(){
			$req=requete('cokele');
?>
			<div>
				<fieldset><legend><h2 style="font-size:100%">Côkélé</h2></legend>
				<?php	 
				while($donnee=$req->fetch()){
?>
					<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 PCongele">
						<div class="image">
							<a href="../view/voirProduit.php?id_pro=<?=$donnee['id_pro'];?>"><img src="../public/image/	<?php echo $donnee['image_pro']; ?>" alt="<?=$donnee['alt']?>" class="img-responsive">
							</a>
						</div>
						<div class="prix"><?=$donnee['nom_pro']." "?><?php echo $donnee['inter_poids']." ".$donnee['unite']; ?> à <?=$donnee['prix']?> fcfa<br/>
						<?php if($donnee['stock']=='En Stock'){ ?>
								<a href="../controller/requetePanier.php?id=<?=$donnee['id_pro']?>" class="btn btn-success ajoutPanier"><span class="glyphicon glyphicon-plus" style="color:yellow"></span><span  class="ajoutAuPanier">Ajouter au panier</span></a>
						<?php  	}else if($donnee['stock']=='Stock epuisé'){ ?>
								<a href="#" class="btn btn-success ajoutPanierNon" style="background-color:rgb(200,0,0,0.7);">Stock épuisé</a>
						<?php   } ?>
							<br/><?php echo $donnee['stock']; ?> 
						</div>
					</div>
<?php
	}
				$req->closeCursor();
?>				</fieldset>
			</div>
			
<?php
		}
	
	public function pafricains(){
			$req=requete('Pafricain');
?>
			<div>
				<fieldset><legend><h2 style="font-size:100%">Poulet Africain</h2></legend>
				<?php	 
				while($donnee=$req->fetch()){
?>
					<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 PCongele">
						<div class="image">
							<a href="../view/voirProduit.php?id_pro=<?=$donnee['id_pro'];?>"><img src="../public/image/	<?php echo $donnee['image_pro']; ?>" alt="<?=$donnee['alt']?>" class="img-responsive">
							</a>
						</div>
						<div class="prix"><?=$donnee['nom_pro']." "?><?php echo $donnee['inter_poids']." ".$donnee['unite']; ?> à <?=$donnee['prix']?> fcfa<br/>
						<?php if($donnee['stock']=='En Stock'){ ?>
								<a href="../controller/requetePanier.php?id=<?=$donnee['id_pro']?>" class="btn btn-success ajoutPanier"><span class="glyphicon glyphicon-plus" style="color:yellow"></span><span  class="ajoutAuPanier">Ajouter au panier</span></a>
						<?php  	}else if($donnee['stock']=='Stock epuisé'){ ?>
								<a href="#" class="btn btn-success ajoutPanierNon" style="background-color:rgb(200,0,0,0.7);">Stock épuisé</a>
						<?php   } ?>
							<br/><?php echo $donnee['stock']; ?> 
						</div>
					</div>
<?php
	}
				$req->closeCursor();
?>				</fieldset>
			</div>
			
<?php
		}
	
	public function pintades(){
			$req=requete('pintade');
?>
			<div>
				<fieldset><legend><h2 style="font-size:100%">Pintade</h2></legend>
				<?php	 
				while($donnee=$req->fetch()){
?>
					<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 PCongele">
						<div class="image">
							<a href="../view/voirProduit.php?id_pro=<?=$donnee['id_pro'];?>"><img src="../public/image/	<?php echo $donnee['image_pro']; ?>" alt="<?=$donnee['alt']?>" class="img-responsive">
							</a>
						</div>
						<div class="prix"><?=$donnee['nom_pro']." "?><?php echo $donnee['inter_poids']." ".$donnee['unite']; ?> à <?=$donnee['prix']?> fcfa<br/>
						<?php if($donnee['stock']=='En Stock'){ ?>
								<a href="../controller/requetePanier.php?id=<?=$donnee['id_pro']?>" class="btn btn-success ajoutPanier"><span class="glyphicon glyphicon-plus" style="color:yellow"></span><span  class="ajoutAuPanier">Ajouter au panier</span></a>
						<?php  	}else if($donnee['stock']=='Stock epuisé'){ ?>
								<a href="#" class="btn btn-success ajoutPanierNon" style="background-color:rgb(200,0,0,0.7);">Stock épuisé</a>
						<?php   } ?>
							<br/><?php echo $donnee['stock']; ?> 
						</div>
					</div>
<?php
	}
				$req->closeCursor();
?>				</fieldset>
			</div>
			
<?php
		}
	
	public function canards(){
			$req=requete('canard');
?>
			<div>
				<fieldset><legend><h2 style="font-size:100%">Canard</h2></legend>
				<?php	 
				while($donnee=$req->fetch()){
?>
					<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 PCongele">
						<div class="image">
							<a href="../view/voirProduit.php?id_pro=<?=$donnee['id_pro'];?>"><img src="../public/image/	<?php echo $donnee['image_pro']; ?>" alt="<?=$donnee['alt']?>" class="img-responsive">
							</a>
						</div>
						<div class="prix"><?=$donnee['nom_pro']." "?><?php echo $donnee['inter_poids']." ".$donnee['unite']; ?> à <?=$donnee['prix']?> fcfa<br/>
						<?php if($donnee['stock']=='En Stock'){ ?>
								<a href="../controller/requetePanier.php?id=<?=$donnee['id_pro']?>" class="btn btn-success ajoutPanier"><span class="glyphicon glyphicon-plus" style="color:yellow"></span><span  class="ajoutAuPanier">Ajouter au panier</span></a>
						<?php  	}else if($donnee['stock']=='Stock epuisé'){ ?>
								<a href="#" class="btn btn-success ajoutPanierNon" style="background-color:rgb(200,0,0,0.7);">Stock épuisé</a>
						<?php   } ?>
							<br/><?php echo $donnee['stock']; ?> 
						</div>
					</div>
<?php
	}
				$req->closeCursor();
?>				</fieldset>
			</div>
			
<?php
		}
	
	}
?>

<?php /******************Les bétails**********************/ ?>

<?php
	class PouletsVivants{
		public function boeuf(){
		$req=requete('boeuf');

?>
			<div>
				<fieldset>	<legend><h2 style="font-size:100%">Viande de Bœuf</h2></legend>
		
				<?php	 
			while($donnee=$req->fetch()){
?>
				<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 PCongele">
						<div class="image">
							<a href="../view/voirProduit.php?id_pro=<?=$donnee['id_pro'];?>"><img src="../public/image/	<?php echo $donnee['image_pro']; ?>" alt="<?=$donnee['alt']?>" class="img-responsive">
							</a>
						</div>
						<div class="prix"><?=$donnee['nom_pro']." "?><?php echo $donnee['inter_poids']." ".$donnee['unite']; ?> à <?=$donnee['prix']?> fcfa<br/>
						<?php if($donnee['stock']=='En Stock'){ ?>
								<a href="../controller/requetePanier.php?id=<?=$donnee['id_pro']?>" class="btn btn-success ajoutPanier"><span class="glyphicon glyphicon-plus" style="color:yellow"></span><span  class="ajoutAuPanier">Ajouter au panier</span></a>
						<?php  	}else if($donnee['stock']=='Stock epuisé'){ ?>
								<a href="#" class="btn btn-success ajoutPanierNon" style="background-color:rgb(200,0,0,0.7);">Stock épuisé</a>
						<?php   } ?>
							<br/><?php echo $donnee['stock']; ?> 
						</div>
				</div>
<?php
	}
			$req->closeCursor();
?>
				</fieldset>
			</div>
<?php
		}
		
		public function mouton(){
		$req=requete('mouton');

?>
			<div>
				<fieldset>	<legend><h2 style="font-size:100%">Viande de Mouton</h2></legend>
		
				<?php	 
			while($donnee=$req->fetch()){
?>
					<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 PCongele">
						<div class="image">
							<a href="../view/voirProduit.php?id_pro=<?=$donnee['id_pro'];?>"><img src="../public/image/	<?php echo $donnee['image_pro']; ?>" alt="<?=$donnee['alt']?>" class="img-responsive">
							</a>
						</div>
						<div class="prix"><?=$donnee['nom_pro']." "?><?php echo $donnee['inter_poids']." ".$donnee['unite']; ?> à <?=$donnee['prix']?> fcfa<br/>
						<?php if($donnee['stock']=='En Stock'){ ?>
								<a href="../controller/requetePanier.php?id=<?=$donnee['id_pro']?>" class="btn btn-success ajoutPanier"><span class="glyphicon glyphicon-plus" style="color:yellow"></span><span  class="ajoutAuPanier">Ajouter au panier</span></a>
						<?php  	}else if($donnee['stock']=='Stock epuisé'){ ?>
								<a href="#" class="btn btn-success ajoutPanierNon" style="background-color:rgb(200,0,0,0.7);">Stock épuisé</a>
						<?php   } ?>
							<br/><?php echo $donnee['stock']; ?> 
						</div>
					</div>
<?php
	}
			$req->closeCursor();
?>
				</fieldset>
			</div>
<?php
		}
		public function bouc(){
		$req=requete('bouc');

?>
			<div>
				<fieldset>	<legend><h2 style="font-size:100%">Viande de Cabris</h2></legend>
		
				<?php	 
			while($donnee=$req->fetch()){
?>
					<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 PCongele">
						<div class="image">
							<a href="../view/voirProduit.php?id_pro=<?=$donnee['id_pro'];?>"><img src="../public/image/	<?php echo $donnee['image_pro']; ?>" alt="<?=$donnee['alt']?>" class="img-responsive">
							</a>
						</div>
						<div class="prix"><?=$donnee['nom_pro']." "?><?php echo $donnee['inter_poids']." ".$donnee['unite']; ?> à <?=$donnee['prix']?> fcfa<br/>
						<?php if($donnee['stock']=='En Stock'){ ?>
								<a href="../controller/requetePanier.php?id=<?=$donnee['id_pro']?>" class="btn btn-success ajoutPanier"><span class="glyphicon glyphicon-plus" style="color:yellow"></span><span  class="ajoutAuPanier">Ajouter au panier</span></a>
						<?php  	}else if($donnee['stock']=='Stock epuisé'){ ?>
								<a href="#" class="btn btn-success ajoutPanierNon" style="background-color:rgb(200,0,0,0.7);">Stock épuisé</a>
						<?php   } ?>
							<br/><?php echo $donnee['stock']; ?> 
						</div>
					</div>
<?php
	}
			$req->closeCursor();
?>
				</fieldset>
			</div>
			
<?php
		}
		
	}

?>

<?php /***********************Les Poissons*********************************/ ?>

<?php
	class Poisson{
		public function poissons(){

		$req=requete('poisson');
?>		
		<div class="oeufs">
			<fieldset>	<legend><h2 style="font-size:100%">Poisson</h2></legend>
<?php	 
			while($donnee=$req->fetch()){
?>
					<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 PCongele">
						<div class="image">
							<a href="../view/voirProduit.php?id_pro=<?=$donnee['id_pro'];?>"><img src="../public/image/	<?php echo $donnee['image_pro']; ?>" alt="<?=$donnee['alt']?>" class="img-responsive">
							</a>
						</div>
						<div class="prix"><?=$donnee['nom_pro']." "?><?php echo $donnee['inter_poids']." ".$donnee['unite']; ?> à <?=$donnee['prix']?> fcfa<br/>
						<?php if($donnee['stock']=='En Stock'){ ?>
								<a href="../controller/requetePanier.php?id=<?=$donnee['id_pro']?>" class="btn btn-success ajoutPanier"><span class="glyphicon glyphicon-plus" style="color:yellow"></span><span  class="ajoutAuPanier">Ajouter au panier</span></a>
						<?php  	}else if($donnee['stock']=='Stock epuisé'){ ?>
								<a href="#" class="btn btn-success ajoutPanierNon" style="background-color:rgb(200,0,0,0.7);">Stock épuisé</a>
						<?php   } ?>
							<br/><?php echo $donnee['stock']; ?> 
						</div>
					</div>
<?php
	}
			$req->closeCursor();
?>
			</fieldset>
		</div>
<?php
		}
		
		public function poissonGues(){
	
			$req=requete('poissonGues');

		
?>		<div class="oeufs">
			<fieldset>	<legend><h2 style="font-size:100%">Poisson de Guessabo</h2></legend>
		
<?php	 
			while($donnee=$req->fetch()){
?>
					<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 PCongele">
						<div class="image">
							<a href="../view/voirProduit.php?id_pro=<?=$donnee['id_pro'];?>"><img src="../public/image/	<?php echo $donnee['image_pro']; ?>" alt="<?=$donnee['alt']?>" class="img-responsive">
							</a>
						</div>
						<div class="prix"><?=$donnee['nom_pro']." "?><?php echo $donnee['inter_poids']." ".$donnee['unite']; ?> à <?=$donnee['prix']?> fcfa<br/>
						<?php if($donnee['stock']=='En Stock'){ ?>
								<a href="../controller/requetePanier.php?id=<?=$donnee['id_pro']?>" class="btn btn-success ajoutPanier"><span class="glyphicon glyphicon-plus" style="color:yellow"></span><span  class="ajoutAuPanier">Ajouter au panier</span></a>
						<?php  	}else if($donnee['stock']=='Stock epuisé'){ ?>
								<a href="#" class="btn btn-success ajoutPanierNon" style="background-color:rgb(200,0,0,0.7);">Stock épuisé</a>
						<?php   } ?>
							<br/><?php echo $donnee['stock']; ?> 
						</div>
					</div>
<?php
	}
			$req->closeCursor();
?>
			</fieldset>
		</div>
<?php
		}
		
	}
	
?>

<?php /******************Les oeufs********************/ ?>
<?php
	class Oeuf{
		public function oeufs(){
			$req=requete('oeuf');

	?>		<div class="poussins">
				<fieldset>	<legend><h2 style="font-size:100%"> Oeuf</h2></legend>
					<?php	 
			while($donnee=$req->fetch()){
?>
					<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 PCongele">
						<div class="image">
							<a href="../view/voirProduit.php?id_pro=<?=$donnee['id_pro'];?>"><img src="../public/image/	<?php echo $donnee['image_pro']; ?>" alt="<?=$donnee['alt']?>" class="img-responsive">
							</a>
						</div>
						<div class="prix"><?=$donnee['nom_pro']." "?><?php echo $donnee['inter_poids']." ".$donnee['unite']; ?> à <?=$donnee['prix']?> fcfa le carton<br/>
						<?php if($donnee['stock']=='En Stock'){ ?>
								<a href="../controller/requetePanier.php?id=<?=$donnee['id_pro']?>" class="btn btn-success ajoutPanier"><span class="glyphicon glyphicon-plus" style="color:yellow"></span><span  class="ajoutAuPanier">Ajouter au panier</span></a>
						<?php  	}else if($donnee['stock']=='Stock epuisé'){ ?>
								<a href="#" class="btn btn-success ajoutPanierNon" style="background-color:rgb(200,0,0,0.7);">Stock épuisé</a>
						<?php   } ?>
							<br/><?php echo $donnee['stock']; ?> 
						</div>
					</div>
<?php
	}
			$req->closeCursor();
?>
				</fieldset>
			</div>
<?php
		}
		
	}
?>


<?php    //*************** les cultures vivrières                          ?>
<?php
	class Vivrieres{
		public function ftubercules(){
			$req=requete('tubercule');

	?>		<div class="tubercules">
				<fieldset>	<legend><h2 style="font-size:100%"> Tubercule</h2></legend>
					<?php	 
			while($donnee=$req->fetch()){
?>
					<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 PCongele">
						<div class="image">
							<a href="../view/voirProduit.php?id_pro=<?=$donnee['id_pro'];?>"><img src="../public/image/	<?php echo $donnee['image_pro']; ?>" alt="<?=$donnee['alt']?>" class="img-responsive">
							</a>
						</div>
						<div class="prix"><?=$donnee['nom_pro']." "?><?php echo $donnee['inter_poids']." ".$donnee['unite']; ?> à <?=$donnee['prix']?> fcfa<br/>
						<?php if($donnee['stock']=='En Stock'){ ?>
								<a href="../controller/requetePanier.php?id=<?=$donnee['id_pro']?>" class="btn btn-success ajoutPanier"><span class="glyphicon glyphicon-plus" style="color:yellow"></span><span  class="ajoutAuPanier">Ajouter au panier</span></a>
						<?php  	}else if($donnee['stock']=='Stock epuisé'){ ?>
								<a href="#" class="btn btn-success ajoutPanierNon" style="background-color:rgb(200,0,0,0.7);">Stock épuisé</a>
						<?php   } ?>
							<br/><?php echo $donnee['stock']; ?> 
						</div>
					</div>
<?php
	}
			$req->closeCursor();
?>
				</fieldset>
			</div>
<?php
		}
		
		
		public function fcereales(){
			$req=requete('cereale');

	?>		<div class="tubercules">
				<fieldset>	<legend><h2 style="font-size:100%">Céréale</h2></legend>
					<?php	 
			while($donnee=$req->fetch()){
?>
					<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 PCongele">
						<div class="image">
							<a href="../view/voirProduit.php?id_pro=<?=$donnee['id_pro'];?>"><img src="../public/image/	<?php echo $donnee['image_pro']; ?>" alt="<?=$donnee['alt']?>" class="img-responsive">
							</a>
						</div>
						<div class="prix"><?=$donnee['nom_pro']." "?><?php echo $donnee['inter_poids']." ".$donnee['unite']; ?> à <?=$donnee['prix']?> fcfa<br/>
						<?php if($donnee['stock']=='En Stock'){ ?>
								<a href="../controller/requetePanier.php?id=<?=$donnee['id_pro']?>" class="btn btn-success ajoutPanier"><span class="glyphicon glyphicon-plus" style="color:yellow"></span><span  class="ajoutAuPanier">Ajouter au panier</span></a>
						<?php  	}else if($donnee['stock']=='Stock epuisé'){ ?>
								<a href="#" class="btn btn-success ajoutPanierNon" style="background-color:rgb(200,0,0,0.7);">Stock épuisé</a>
						<?php   } ?>
							<br/><?php echo $donnee['stock']; ?> 
						</div>
					</div>
<?php
	}
			$req->closeCursor();
?>
				</fieldset>
			</div>
<?php
		}		
		
		public function fcondiments(){
			$req=requete('condiment');

	?>		<div class="condiments">
				<fieldset>	<legend><h2 style="font-size:100%">Les Condiments</h2></legend>
					<?php	 
			while($donnee=$req->fetch()){
?>
					<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 PCongele">
						<div class="image">
							<a href="../view/voirProduit.php?id_pro=<?=$donnee['id_pro'];?>"><img src="../public/image/	<?php echo $donnee['image_pro']; ?>" alt="<?=$donnee['alt']?>" class="img-responsive">
							</a>
						</div>
						<div class="prix"><?=$donnee['nom_pro']." "?><?php echo $donnee['inter_poids']." ".$donnee['unite']; ?> à <?=$donnee['prix']?> fcfa<br/>
						<?php if($donnee['stock']=='En Stock'){ ?>
								<a href="../controller/requetePanier.php?id=<?=$donnee['id_pro']?>" class="btn btn-success ajoutPanier"><span class="glyphicon glyphicon-plus" style="color:yellow"></span><span  class="ajoutAuPanier">Ajouter au panier</span></a>
						<?php  	}else if($donnee['stock']=='Stock epuisé'){ ?>
								<a href="#" class="btn btn-success ajoutPanierNon" style="background-color:rgb(200,0,0,0.7);">Stock épuisé</a>
						<?php   } ?>
							<br/><?php echo $donnee['stock']; ?> 
						</div>
					</div>
<?php
	}
			$req->closeCursor();
?>
				</fieldset>
			</div>
<?php
		}
		
		
		public function ffruits(){
			$req=requete('fruit');

	?>		<div class="fruits">
				<fieldset>	<legend><h2 style="font-size:100%">Fruit</h2></legend>
					<?php	 
			while($donnee=$req->fetch()){
?>
					<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 PCongele">
						<div class="image">
							<a href="../view/voirProduit.php?id_pro=<?=$donnee['id_pro'];?>"><img src="../public/image/	<?php echo $donnee['image_pro']; ?>" alt="<?=$donnee['alt']?>" class="img-responsive">
							</a>
						</div>
						<div class="prix"><?=$donnee['nom_pro']." "?><?php echo $donnee['inter_poids']." ".$donnee['unite']; ?> à <?=$donnee['prix']?> fcfa<br/>
						<?php if($donnee['stock']=='En Stock'){ ?>
								<a href="../controller/requetePanier.php?id=<?=$donnee['id_pro']?>" class="btn btn-success ajoutPanier"><span class="glyphicon glyphicon-plus" style="color:yellow"></span><span  class="ajoutAuPanier">Ajouter au panier</span></a>
						<?php  	}else if($donnee['stock']=='Stock epuisé'){ ?>
								<a href="#" class="btn btn-success ajoutPanierNon" style="background-color:rgb(200,0,0,0.7);">Stock épuisé</a>
						<?php   } ?>
							<br/><?php echo $donnee['stock']; ?> 
						</div>
					</div>
<?php
	}
			$req->closeCursor();
?>
				</fieldset>
			</div>
<?php
		}
		
		
		public function fnectars(){
			$req=requete('nectar');

	?>		<div class="fruits">
				<fieldset>	<legend><h2 style="font-size:100%">Nectar</h2></legend>
					<?php	 
			while($donnee=$req->fetch()){
?>
					<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 PCongele">
						<div class="image">
							<a href="../view/voirProduit.php?id_pro=<?=$donnee['id_pro'];?>"><img src="../public/image/	<?php echo $donnee['image_pro']; ?>" alt="<?=$donnee['alt']?>" class="img-responsive">
							</a>
						</div>
						<div class="prix"><?=$donnee['nom_pro']." "?><?php echo $donnee['inter_poids']." ".$donnee['unite']; ?> à <?=$donnee['prix']?> fcfa<br/>
						<?php if($donnee['stock']=='En Stock'){ ?>
								<a href="../controller/requetePanier.php?id=<?=$donnee['id_pro']?>" class="btn btn-success ajoutPanier"><span class="glyphicon glyphicon-plus" style="color:yellow"></span><span  class="ajoutAuPanier">Ajouter au panier</span></a>
						<?php  	}else if($donnee['stock']=='Stock epuisé'){ ?>
								<a href="#" class="btn btn-success ajoutPanierNon" style="background-color:rgb(200,0,0,0.7);">Stock épuisé</a>
						<?php   } ?>
							<br/><?php echo $donnee['stock']; ?> 
						</div>
					</div>
<?php
	}
			$req->closeCursor();
?>
				</fieldset>
			</div>
<?php
		}

		public function feaux(){
			$req=requete('eau');

	?>		<div class="fruits">
				<fieldset>	<legend><h2 style="font-size:100%">Eau minérale</h2></legend>
					<?php	 
			while($donnee=$req->fetch()){
?>
					<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 PCongele">
						<div class="image">
							<a href="../view/voirProduit.php?id_pro=<?=$donnee['id_pro'];?>"><img src="../public/image/	<?php echo $donnee['image_pro']; ?>" alt="<?=$donnee['alt']?>" class="img-responsive">
							</a>
						</div>
						<div class="prix"><?=$donnee['nom_pro']." "?><?php echo $donnee['inter_poids']." ".$donnee['unite']; ?> à <?=$donnee['prix']?> fcfa<br/>
						<?php if($donnee['stock']=='En Stock'){ ?>
								<a href="../controller/requetePanier.php?id=<?=$donnee['id_pro']?>" class="btn btn-success ajoutPanier"><span class="glyphicon glyphicon-plus" style="color:yellow"></span><span  class="ajoutAuPanier">Ajouter au panier</span></a>
						<?php  	}else if($donnee['stock']=='Stock epuisé'){ ?>
								<a href="#" class="btn btn-success ajoutPanierNon" style="background-color:rgb(200,0,0,0.7);">Stock épuisé</a>
						<?php   } ?>
							<br/><?php echo $donnee['stock']; ?> 
						</div>
					</div>
<?php
	}
			$req->closeCursor();
?>
				</fieldset>
			</div>
<?php
		}

		
	}
?>


<?php		/////////////// Boutiques
	class Boutiques{
		public function friz(){
			$req=requete('riz');

	?>		<div class="riz">
				<fieldset>	<legend><h2 style="font-size:100%"> Vos Riz préférés</h2></legend>
					<?php	 
			while($donnee=$req->fetch()){
?>
					<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 PCongele">
						<div class="image">
							<a href="../view/voirProduit.php?id_pro=<?=$donnee['id_pro'];?>"><img src="../public/image/	<?php echo $donnee['image_pro']; ?>" alt="<?=$donnee['alt']?>" class="img-responsive">
							</a>
						</div>
						<div class="prix"><?=$donnee['nom_pro']." "?><?php echo $donnee['inter_poids']." ".$donnee['unite']; ?> à <?=$donnee['prix']?> fcfa<br/>
						<?php if($donnee['stock']=='En Stock'){ ?>
								<a href="../controller/requetePanier.php?id=<?=$donnee['id_pro']?>" class="btn btn-success ajoutPanier"><span class="glyphicon glyphicon-plus" style="color:yellow"></span><span  class="ajoutAuPanier">Ajouter au panier</span></a>
						<?php  	}else if($donnee['stock']=='Stock epuisé'){ ?>
								<a href="#" class="btn btn-success ajoutPanierNon" style="background-color:rgb(200,0,0,0.7);">Stock épuisé</a>
						<?php   } ?>
							<br/><?php echo $donnee['stock']; ?> 
						</div>
					</div>
<?php
	}
			$req->closeCursor();
?>
				</fieldset>
			</div>
<?php
		}
		
		
		public function fhuiles(){
			$req=requete('huile');

	?>		<div class="huiles">
				<fieldset>	<legend><h2 style="font-size:100%">Vos Huiles</h2></legend>
					<?php	 
			while($donnee=$req->fetch()){
?>
					<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 PCongele">
						<div class="image">
							<a href="../view/voirProduit.php?id_pro=<?=$donnee['id_pro'];?>"><img src="../public/image/	<?php echo $donnee['image_pro']; ?>" alt="<?=$donnee['alt']?>" class="img-responsive">
							</a>
						</div>
						<div class="prix"><?=$donnee['nom_pro']." "?><?php echo $donnee['inter_poids']." ".$donnee['unite']; ?> à <?=$donnee['prix']?> fcfa<br/>
						<?php if($donnee['stock']=='En Stock'){ ?>
								<a href="../controller/requetePanier.php?id=<?=$donnee['id_pro']?>" class="btn btn-success ajoutPanier"><span class="glyphicon glyphicon-plus" style="color:yellow"></span><span  class="ajoutAuPanier">Ajouter au panier</span></a>
						<?php  	}else if($donnee['stock']=='Stock epuisé'){ ?>
								<a href="#" class="btn btn-success ajoutPanierNon" style="background-color:rgb(200,0,0,0.7);">Stock épuisé</a>
						<?php   } ?>
							<br/><?php echo $donnee['stock']; ?> 
						</div>
					</div>
<?php
	}
			$req->closeCursor();
?>
				</fieldset>
			</div>
<?php
		}
	
	
	
	public function fassaisonnements(){
			$req=requete('assaisonnement');

	?>		<div class="assaisonnements">
				<fieldset>	<legend><h2 style="font-size:100%">Assaisonnement</h2></legend>
					<?php	 
			while($donnee=$req->fetch()){
?>
					<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 PCongele">
						<div class="image">
							<a href="../view/voirProduit.php?id_pro=<?=$donnee['id_pro'];?>"><img src="../public/image/	<?php echo $donnee['image_pro']; ?>" alt="<?=$donnee['alt']?>" class="img-responsive">
							</a>
						</div>
						<div class="prix"><?=$donnee['nom_pro']." "?><?php echo $donnee['inter_poids']." ".$donnee['unite']; ?> à <?=$donnee['prix']?> fcfa<br/>
						<?php if($donnee['stock']=='En Stock'){ ?>
								<a href="../controller/requetePanier.php?id=<?=$donnee['id_pro']?>" class="btn btn-success ajoutPanier"><span class="glyphicon glyphicon-plus" style="color:yellow"></span><span  class="ajoutAuPanier">Ajouter au panier</span></a>
						<?php  	}else if($donnee['stock']=='Stock epuisé'){ ?>
								<a href="#" class="btn btn-success ajoutPanierNon" style="background-color:rgb(200,0,0,0.7);">Stock épuisé</a>
						<?php   } ?>
							<br/><?php echo $donnee['stock']; ?> 
						</div>
					</div>
<?php
	}
			$req->closeCursor();
?>
				</fieldset>
			</div>
<?php
		}
	
	public function fpetitDejs(){
			$req=requete('petitDej');

	?>		<div class="petitDej">
				<fieldset>	<legend> <h2 style="font-size:100%">Pétit Déjeuné</h2></legend>
					<?php	 
			while($donnee=$req->fetch()){
?>
					<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 PCongele">
						<div class="image">
							<a href="../view/voirProduit.php?id_pro=<?=$donnee['id_pro'];?>"><img src="../public/image/	<?php echo $donnee['image_pro']; ?>" alt="<?=$donnee['alt']?>" class="img-responsive">
							</a>
						</div>
						<div class="prix"><?=$donnee['nom_pro']." "?><?php echo $donnee['inter_poids']." ".$donnee['unite']; ?> à <?=$donnee['prix']?> fcfa<br/>
						<?php if($donnee['stock']=='En Stock'){ ?>
								<a href="../controller/requetePanier.php?id=<?=$donnee['id_pro']?>" class="btn btn-success ajoutPanier"><span class="glyphicon glyphicon-plus" style="color:yellow"></span><span  class="ajoutAuPanier">Ajouter au panier</span></a>
						<?php  	}else if($donnee['stock']=='Stock epuisé'){ ?>
								<a href="#" class="btn btn-success ajoutPanierNon" style="background-color:rgb(200,0,0,0.7);">Stock épuisé</a>
						<?php   } ?>
							<br/><?php echo $donnee['stock']; ?> 
						</div>
					</div>
<?php
	}
			$req->closeCursor();
?>
				</fieldset>
			</div>
<?php
		}
	
		public function fboissons(){
			$req=requete('boisson');

	?>		<div class="boissons">
				<fieldset>	<legend><h2 style="font-size:100%">Vos Boissons</h2></legend>
					<?php	 
			while($donnee=$req->fetch()){
?>
					<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 PCongele">
						<div class="image">
							<a href="../view/voirProduit.php?id_pro=<?=$donnee['id_pro'];?>"><img src="../public/image/	<?php echo $donnee['image_pro']; ?>" alt="<?=$donnee['alt']?>" class="img-responsive">
							</a>
						</div>
						<div class="prix"><?=$donnee['nom_pro']." "?><?php echo $donnee['inter_poids']." ".$donnee['unite']; ?> à <?=$donnee['prix']?> fcfa<br/>
						<?php if($donnee['stock']=='En Stock'){ ?>
								<a href="../controller/requetePanier.php?id=<?=$donnee['id_pro']?>" class="btn btn-success ajoutPanier"><span class="glyphicon glyphicon-plus" style="color:yellow"></span><span  class="ajoutAuPanier">Ajouter au panier</span></a>
						<?php  	}else if($donnee['stock']=='Stock epuisé'){ ?>
								<a href="#" class="btn btn-success ajoutPanierNon" style="background-color:rgb(200,0,0,0.7);">Stock épuisé</a>
						<?php   } ?>
							<br/><?php echo $donnee['stock']; ?> 
						</div>
					</div>
<?php
	}
			$req->closeCursor();
?>
				</fieldset>
			</div>
<?php
		}
	
		
	}
?>

