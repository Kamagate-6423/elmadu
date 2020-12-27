<?php
	class BDD{
		private $serveur='hostingmysql335.amen.fr';
		private $baseDeDonnee='kafissa';
		private $utilisateur='kelm6423';
		private $motDePasse='Kelm1996.Maman';
		private $connexion;
		
		public function __construct($serveur=NULL, $baseDeDonnee=NULL, $utilisateur=NULL, $motDePasse=NULL){
			
			if($serveur!=NULL){
				$this->serveur=$verseur;
				$this->table=$baseDeDonnee;
				$this->utilisateur=$utilisateur;
				$this->motDePasse=$motDePasse;
			}
			try{
			$this->connexion=new PDO('mysql:host='.$this->serveur.';dbname='.$this->baseDeDonnee.'; charset=utf8',$this->utilisateur,$this->motDePasse);
			}catch(Exception $e){
				echo "ERREUR de connexion à la base de donnée : ".$e->getMessage();
			}
		}
		
		public function requetes($sql=NULL, $variable=array()){
			$req=$this->connexion->prepare($sql);
			$req->execute($variable);
			
			return $req;
		}
	}
	
	// pour verifier et securiser les donnees venantes de l'utilisateur
	function verifierDonne($donne){
		$donne=trim($donne);
		$donne=stripslashes($donne);
		$donne=strip_tags($donne);
		$donne=htmlspecialchars($donne);
		
		return $donne;
	}
?>