

		<?php 
		require('../model/model.php');
		
		function menuController(){ // cette est appelée dans l'index
		?>
		<div class="container-fluid pouletMortChair">
		<?php
				$pouletsMorts= new PouletsMorts();
		if(isset($_GET['menu1'])){ 
			$menu1=verifierDonne($_GET['menu1']);
			if(isset($menu1)){
				if($menu1=='pouletsMortsChairs'){
					$pouletsMorts->pouletsChairsC();
					$pouletsMorts->pouletsChairsM();
				}else if($menu1=='Mchairs'){
					$pouletsMorts->pouletsChairsM();
					$pouletsMorts->pouletsChairsC();
				}else if($menu1=='pouletsMortsPondeuses'){
					$pouletsMorts->pouletsPondeuses();
				}else if($menu1=='cokeles'){
					$pouletsMorts->cokeles();
				}else if($menu1=='pafricains'){
					$pouletsMorts->pafricains();
				}else if($menu1=='pintades'){
					$pouletsMorts->pintades();
				}else if($menu1=='canards'){
					$pouletsMorts->canards();
				}else{
					require('../index/index.php');
				}
			}
		}
			
				$pouletsVivants= new PouletsVivants();
		if(isset($_GET['menu2'])){ 
			$menu2=verifierDonne($_GET['menu2']);
			if(isset($menu2)){
				if($menu2=='pouletsVivantsChairs'){
					$pouletsVivants->boeuf();
				}else if($menu2=='pouletsVivantsPondeuses'){
					$pouletsVivants->mouton();
				}else if($menu2=='pouletsVivantsCokeles'){
					$pouletsVivants->bouc();
					//$pouletsVivants->pouletsVivantsAfricains();
				}else{
					require('../index/index.php');
				}
			}
		}
		
				$oeufs= new Oeufs();
		if(isset($_GET['menu3'])){ 
			$menu3=verifierDonne($_GET['menu3']);
			if(isset($menu3)){
				if($menu3=='oeufsPondeuses'){
					$oeufs->poissons();
					//$oeufs->oeufsAfricains();
				}else{
					require('../index/index.php');
				}	
			}
		}
		
				$poussins=new Poussins();
		if(isset($_GET['menu4'])){ 
			$menu4=verifierDonne($_GET['menu4']);
			if(isset($menu4)){
				if($menu4=='poussinsChairs'){
					$poussins->oeufs();
				}else{
					require('../index/index.php');
				}
			}
		}
		
		$vivrieres=new Vivrieres();
		if(isset($_GET['menu5'])){ 
			$menu5=verifierDonne($_GET['menu5']);
			if(isset($menu5)){
				if($menu5=='condiments'){
					$vivrieres->fcondiments();
				}else{
					require('../index/index.php');
				}
			}
		}else if(isset($_GET['menu6'])){ 
			$menu6=verifierDonne($_GET['menu6']);
			if(isset($menu6)){
				if($menu6=='fruits'){
					$vivrieres->ffruits();
				}else{
					require('../index/index.php');
				}
			}
		}else if(isset($_GET['menu7'])){ 
			$menu7=verifierDonne($_GET['menu7']);
			if(isset($menu7)){
				if($menu7=='tubercules'){
					$vivrieres->ftubercules();
				}else{
					require('../index/index.php');
				}
			}
		}
		
		
				$boutiques=new Boutiques();
		if(isset($_GET['menu8'])){ 
			$menu8=verifierDonne($_GET['menu8']);
			if(isset($menu8)){
				if($menu8=='riz'){
					$boutiques->friz();
				}else{
					require('../index/index.php');
				}
			}
		}else if(isset($_GET['menu9'])){ 
			$menu9=verifierDonne($_GET['menu9']);
			if(isset($menu9)){
				if($menu9=='huiles'){
					$boutiques->fhuiles();
				}else{
					require('../index/index.php');
				}
			}
		}else if(isset($_GET['menu10'])){ 
			$menu10=verifierDonne($_GET['menu10']);
			if(isset($menu10)){
				if($menu10=='assaisonnements'){
					$boutiques->fassaisonnements();
				}else{
					require('../index/index.php');
				}
			}
		}else if(isset($_GET['menu11'])){ 
			$menu11=verifierDonne($_GET['menu11']);
			if(isset($menu11)){
				if($menu11=='petitDejs'){
					$boutiques->fpetitDejs();
				}else{
					require('../index/index.php');
				}
			}
		}else if(isset($_GET['menu12'])){ 
			$menu12=verifierDonne($_GET['menu12']);
			if(isset($menu12)){
				if($menu12=='boissons'){
					$boutiques->fboissons();
				}else{
					require('../index/index.php');
				}
			}
		}
		

		
		if(isset($_GET['menu13'])){ 
			$menu13=verifierDonne($_GET['menu13']);
			if(isset($menu13)){
				if($menu13=='apropos'){
					require('../view/apropos.php');
				}else{
					require('../index/index.php');
				}
			}
		}
		
		if(isset($_GET['section'])){ 
			$section=verifierDonne($_GET['section']);
			if(isset($section)){
				if($section=='oeufs'){
					$poussins->oeufs();
				}else if($section=='pouletCom'){
					$pouletsMorts->pouletsChairsC();
					$pouletsMorts->pouletsChairsM();
				}else if($section=='pouletMor'){
					$pouletsMorts->pouletsChairsM();
					$pouletsMorts->pouletsChairsC();
				}else if($section=='cokeles'){
					$pouletsMorts->cokeles();
				}else if($section=='pafricains'){
					$pouletsMorts->pafricains();
				}else if($section=='pintades'){
					$pouletsMorts->pintades();
				}else if($section=='canards'){
					$pouletsMorts->canards();
				}else if($section=='poissons'){
					$oeufs->poissons();
				}else if($section=='pondeuses'){
					$pouletsMorts->pouletsPondeuses();
				}else if($section=='boeufs'){
					$pouletsVivants->boeuf();
				}else if($section=='moutons'){
					$pouletsVivants->mouton();
				}else if($section=='boucs'){
					$pouletsVivants->bouc();
				}else if($section=='condiments'){
					$vivrieres->fcondiments();
				}else{
					require('../index/index.php');
				}
			}
		}
		
		if(isset($_GET['recherche'])){
			include("../view/recherche.php");
		}
	?>
	</div>
	<?php	
		}
		
	?>
