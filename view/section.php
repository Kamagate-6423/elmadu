
	<div class="container-fluid">
		<section class="container-fluid">
		 <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div id="carousselDuSite" class="carousel slide" data-ride="carousel" style="height:auto">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
				<li data-target="#carousselDuSite" data-slide-to="0" class="active"></li>
				<li data-target="#carousselDuSite" data-slide-to="1"></li>
				<li data-target="#carousselDuSite" data-slide-to="2"></li>
			  </ol>

			  <!-- Wrapper for slides -->

			<div class="carousel-inner" role="listbox">
<?php
				$reqAc1=requete('carrousel');
				while($donneeAc1=$reqAc1->fetch()){
?>  
				<div class="item <?=$donneeAc1['stock']?>">
					<a href="../index/index.php?section=<?=$donneeAc1['chemin_desti']?>">
						<img src="../public/image/<?php echo$donneeAc1['image_pro'].'.jpg'?>" class="img-responsive hidden-xs hidden-sm" alt="...">
						<img src="../public/image/<?php echo$donneeAc1['image_pro'].'1.jpg'?>" class="img-responsive hidden-sm hidden-md hidden-lg" alt="...">
						<img src="../public/image/<?php echo$donneeAc1['image_pro'].'2.jpg'?>" class="img-responsive hidden-xs hidden-md hidden-lg" alt="...">
						<div class="carousel-caption">
						<?=$donneeAc1['info_pro']?>
						</div>
					</a>
				</div>
<?php				} ?>
			</div>
			  <!-- Controls -->
			  <a class="left carousel-control" href="#carousselDuSite" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#carousselDuSite" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			  </a>
			</div> <!--fin carousel-->
			</div>
			<div class="hidden-xs col-sm-6 col-md-6 col-lg-6 pouletPret hidden"><!--cette partie est annulee avec bootstrap-->
				<div>
					<a href="#">
						<div class="col-sm-8 col-md-8 col-lg-8"><h4>POULET AU FOUR</h4><p>Trouver des restaurants de preference, plus proche de chez vous </p> </div>
						<div class="col-sm-4 col-md-4col-lg-4"><img src="../public/image/cuire1.jpg" class="img-responsive"> </div>
					</a>
				</div>
				<div>
					<a href="#">
						<div class="col-sm-8 col-md-8 col-lg-8"> <h4>PRÊT A CUIRE</h4><p>Trouver des points de vente de preference, plus proche de chez vous </p> </div>
						<div class="col-sm-4 col-md-4col-lg-4"><img src="../public/image/pcuire.jpg" class="img-responsive"> </div>
					</a>
				</div>
				<div>
					<a href="">
						<div class="col-sm-8 col-md-8 col-lg-8"> <h4>OEUFS</h4><p>Trouver des points de vente d'oeufs, plus proche de chez vous </p> </div>
						<div class="col-sm-4 col-md-4col-lg-4"><img src="../public/image/oeuf2.jpg" class="img-responsive"> </div>
					</a>
				</div>
			</div>
			<!--Enfffffinn-->
		</section><br/><br/>
		<section class="section">
<?php	
		$tableCategorie=array('Pchair','Mchair','Ppondeuse','boeuf','bouc','mouton','poisson','oeuf','canard', 'pintade', 'Pafricain','cokele','condiment');
		for($i=0;$i<count($tableCategorie);$i++){
			$categorie=$tableCategorie[$i];
			$reqAc2=requete($categorie);
			while($donnee=$reqAc2->fetch()){
				
				if($donnee['chemin_desti']!=""){
?>				
					<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 PCongele">
						<div class="image">
							<a href="../view/voirProduit.php?id_pro=<?=$donnee['id_pro'];?>"><img src="../public/image/	<?php echo $donnee['image_pro']; ?>" alt="" class="img-responsive">
							</a>
						</div>
						<div class="prix" id="accueilPrix"><?=$donnee['nom_pro']." "?><?php echo $donnee['inter_poids']." ".$donnee['unite']; ?> à <?=$donnee['prix']?> fcfa<br/>
						<?php if($donnee['stock']=='En Stock'){ ?>
								<a href="../controller/requetePanier.php?id=<?=$donnee['id_pro']?>" class="btn btn-success ajoutPanier"><span class="glyphicon glyphicon-plus" style="color:yellow"></span><span  class="ajoutAuPanier">Ajouter au panier</span></a>
						<?php  	}else if($donnee['stock']=='Stock epuisé'){ ?>
								<a href="#" class="btn btn-primary ajoutPanierNon" style="background-color:rgb(200,0,0,0.7);">Stock épuisé</a>
						<?php   } ?>
							<br/><?php echo $donnee['stock']; ?> <br/>
							<a href="../index/index.php?section=<?=$donnee['chemin_desti']?>" class="btn btn-primary">Voir plus</a>
						</div>
						
					</div>
					
				<!-- <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 differentsProduits">
					<a href="../index/index.php?section=<?=$donneeAc2['chemin_desti']?>">
						<div class="produit"><img src="../public/image/<?=$donneeAc2['image_pro']?>" class="img-responsive" alt="Poulets prêt à cuire"></div>
						<div class="description caption"><p><?=$donneeAc2['info_pro']?> </p></div>
						<div class="plusDeDetails">Voir plus</div>
					</a>
				</div> -->
<?php		}
			}
		}
?>
		</section>
	</div>