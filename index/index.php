	
	<?php require('../view/header.php') ?>
	
	<?php require('../controller/menuController.php') ?>
	

	<?php 
	// cette partie gère le menu et la section de la page d'accueil
	
		if(isset($_GET['menu1']) || isset($_GET['menu2']) || isset($_GET['menu3']) || 
			isset($_GET['menu4']) || isset($_GET['menu5']) || isset($_GET['menu6']) ||
			isset($_GET['menu66']) || isset($_GET['menu7']) || isset($_GET['menu8'])  || 
			isset($_GET['menu9'])  || 
			isset($_GET['menu10']) || isset($_GET['menu11']) || isset($_GET['menu12']) || 
			isset($_GET['menu13']) || isset($_GET['section']) || isset($_GET['recherche'])){
			menuController(); // cette fonnction est definir dans le controller
		}elseif(isset($_POST['modifierPasse']) || isset($_GET['modifierPasse'])){
			
			require('../view/modifierPasse.php');
			
		}else{
			require('../view/section.php');
		}
	?>
	
	<?php include('../view/footer.php') ?>
  
	