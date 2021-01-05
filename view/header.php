<?php
	
	include('../controller/requetePanier.php');
?>


<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>De la chaire fraîche</title>
	
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
    <link rel="stylesheet" href="../public/css/bootstrap.css">
	<link rel="stylesheet" href="../public/css/style.css">
	<link rel="stylesheet" href="../public/css/alertify.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
	<link rel="stylesheet" href="../public/css/default">
	
	


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="corps">
	<div class="corps">
		<div class="container-fluid sociaux" style="padding-left:0px; padding-right:0px">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 " style="padding-left:0px">
				<?php 
				//$_SESSION['connexion']="connextion";
			if(isset($_SESSION['connexion'])){ ?>
				<div class="col-sm-12 col-md-12 col-lg-12">
					<form method="post" action="../controller/detruireSession.php">
					<input type="number" name="idCli" value="<?=$_SESSION['client']['idClien']?>" class="hidden">
					<button type="submit" class="btn-success">Deconnecter</button>
					</form>
					<form method="post" action="../index/index.php">
					<input type="text" name="modifierPasse" value="modifierPasse" class="hidden">
					<button type="submit" class="btn-success">Profil</button>
					</form>
					<!--a class="btn btn-warning" style="height:30px" href="../controller/detruireSession.php" class="deconnecter">Deconnecter</a-->
				</div>
			<?php }else{  ?>
				<div class=" col-sm-4 col-md-6 col-lg-6">
					<a href="../view/client.php?inscrire=inscrire" class="btn btn-success" style="height:30px; font-weight:bold">Inscrire</a>
				</div>
				<div class="col-sm-4 col-md-4 col-lg-4">
					<a href="../view/client.php?connecter=connecter" class="btn btn-success" style="height:30px; font-weight:bold;">Connecter</a>
				</div>
			<?php } ?>
			</div>
			
<?php if(!empty($_SESSION['client']['nomCli'])){ ?>
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 " style="text-align:center"><?=$_SESSION['client']['nomCli'];?> 
			<?=$_SESSION['client']['prenomCli'];?></div>
<?php }else{ ?>
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" style="text-align:center"> Nom et Prénom du client </div>
<?php } ?>

			<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 " style="padding-right:0px;"> 
				<div class="col-sm-7 col-md-6 col-lg-6"><a href="../view/panier.php" class="btn btn-success" style="height:30px; font-weight:bold" ><span class="glyphicon  glyphicon-shopping-cart"></span> Panier</a>:<span id="compt"><span class="compt"><?=$panier->compt()?></span></span>
				</div>
				<div class="col-sm-5 col-md-6 col-lg-6">
					<span>Total: </span><span id="total" style="color:red;font-weight:bold"><?=$panier->total()?></span><span style="color:white"> fcfa </span></br>
<?php  				
		//pour afficher Voir votre commande ou Commandez
					$idCli="";
				if(isset($_SESSION['client']['idClien'])){
					$idCli=$_SESSION['client']['idClien'];
				}
					$reqInfo='SELECT id_cli
						FROM commandes WHERE id_cli = ?';

					$variableInfo=array($idCli);

					$req=$bdd->requetes($reqInfo,$variableInfo);
					$siComExiste=$req->fetch();

					if(!empty($_SESSION['client']['idClien'])&&isset($siComExiste['id_cli'])){
			?>
								<a href="../view/panier.php" class="btn btn-primary "><span class="glyphicon glyphicon-eye-open" ></span> ma commande</a>
			<?php  }else{ 
						if($panier->compt()==0){
			?>
							<a href="../view/panier.php" class="btn btn-success hidden">Commander</a>
			<?php
							}else{
			?>
							<a href="../view/panier.php" class="btn btn-success ">Commander</a>
			<?php
							}
					} ?>				
				</div>
			</div>
		</div>

		   <header class="container-fluid">
				<div class="hidden-xs col-sm-2 col-md-3 col-lg-2" >
					<img src="../public/image/logo.jpg" class="img-responsive"> 
				</div>
				<div class="col-xs-12 col-sm-5 col-md-5 col-lg-6" style="max-height:100px">
					<div class="col-xs-4 hidden-sm hidden-md hidden-lg" >
						<img src="../public/image/logo.jpg" class="img-responsive"> 
					</div>
					<div class="col-xs-8 titre">
					<h1 >KAFISSA</h1>
					<h2 class="hidden-xs hidden-sm">Les produits locaux</h2>
					</div>
				</div>
				<div class="col-xs-12 col-sm-5 col-md-4 col-lg-4">
					<div class="panel panel-default" style="height:100px">
						<div class="panel-heading">Contacts</div>
						<div class="panel-body">
							<a href="tel:0022508877639">0022508877639</a> / <a href="tel:0022564230411">0022564230411</a>
						</div>
					</div>
				</div>
			</header>
			
			<nav class="navbar navbar-default" id="nav">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				  <a class="navbar-brand" href="../index/index.php">Accueil</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav" >
					<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Volailles<span class="caret"></span></a>
					  <ul class="dropdown-menu">
						<li><a href="../index/index.php?menu1=pouletsMortsChairs" style="font-weight:bold">Poulet de chair</a></li>
						<li><a href="../index/index.php?menu1=pouletsMortsPondeuses" style=" font-weight:bold">Poulet pondeuse</a></li>
						<li><a href="../index/index.php?menu1=cokeles" style=" font-weight:bold">Poulet côkélé</a></li>
						<li><a href="../index/index.php?menu1=pafricains" style=" font-weight:bold">Poulet africain</a></li>
						<li><a href="../index/index.php?menu1=pintades" style=" font-weight:bold">Pintadre</a></li>
						<li><a href="../index/index.php?menu1=canards" style=" font-weight:bold">Canard</a></li>
					  </ul>
					</li>
					<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Bétails <span class="caret"></span></a>
					  <ul class="dropdown-menu">
						<li><a href="../index/index.php?menu2=pouletsVivantsChairs" style=" font-weight:bold">Viande de Bœuf</a></li>
						<li><a href="../index/index.php?menu2=pouletsVivantsPondeuses" style=" font-weight:bold">Viande de Mouton</a></li>
						<li><a href="../index/index.php?menu2=pouletsVivantsCokeles" style=" font-weight:bold">Viande de Bouc</a></li>
					  </ul>
					</li>
					<li class="dropdown">
					  <a href="../index/index.php?menu3=oeufsPondeuses" class="dropdown-toggle" role="button">Poissons</a>
					</li>
					<li>
					  <a href="../index/index.php?menu4=poussinsChairs" class="dropdown-toggle"role="button">Oeufs
					  </a>
					</li>
					<li class="dropdown">
					  <a href="../index/index.php?menu6=fruits" class="dropdown-toggle"role="button">Fruit et boisson</a>
					</li>
					<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Vivriers<span class="caret"></span></a>
					  <ul class="dropdown-menu">
						<li><a href="#" style=" font-weight:bold">Riz local</a></li>
						<li><a href="../index/index.php?menu7=tubercules" style=" font-weight:bold">Tubercule</a></li>
						<li><a href="../index/index.php?menu5=condiments" style=" font-weight:bold">Condiment</a></li>
					  </ul>
					</li>
					<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Boutique <span class="caret"></span></a>
					  <ul class="dropdown-menu">
						<li><a href="../index/index.php?menu8=riz" style=" font-weight:bold">Du riz</a></li>
						<li><a href="../index/index.php?menu9=huiles" style=" font-weight:bold">Huile</a></li>
						<li><a href="../index/index.php?menu10=assaisonnements" style=" font-weight:bold">Assaisonnement</a></li>
						<li><a href="../index/index.php?menu11=petitDejs" style=" font-weight:bold">Pétit déj'</a></li>
						<li><a href="../index/index.php?menu12=boissons" style=" font-weight:bold">Boisson</a></li>
					  </ul>
					</li>
					<li>
					  <a href="../index/index.php?menu13=apropos" class="dropdown-toggle"role="button"> A propos
					  </a>
					</li>
				  </ul>
				  <form method="get" action="../index/index.php" class="navbar-form navbar-right">
					<div class="form-group">
					  <input type="text" name="recherche" class="form-control" placeholder="Search">
					</div>
					<button type="submit" class="btn btn-default">OK</button>
				  </form>
				</div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
<?php // pour inserer l'info-line

	$reqInfo='SELECT info FROM information WHERE categorie=:cate';
		$varInfo=array(
				'cate'=>"infoLine"
		);
		$infoLine = $bdd->requetes($reqInfo,$varInfo);
		$donneInfoLine=$infoLine->fetch();
?>
			<div style="margin-top:-15px"><?=$donneInfoLine['info']?></div>

  