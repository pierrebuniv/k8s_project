<?php
	function connexionBDD(){
		include("paramCon.php");
		$dsn='mysql:host='.$lehost.';dbname='.$dbname;


		// connexion à la bdd (connexion non persistante) avec le connecteur nommé $conn1
		try { // essai de connexion
			$connex = new PDO($dsn, $user, $pass); // tentative de connexion
			
    
			} catch (PDOException $e) { // si erreur
				print "Erreur de connexion à la base de données ! : " . $e->getMessage(); // pour exception
                                print $dsn;
                                print $lehost;
                                print $leport;
                                print $dbname;
                                print $dsn;
				die(""); // Arrêt du script - sortie.
			}
			
			return $connex;
		
	}
	
	function deconnexionBDD($connex){
		
		$connex = null;
	}



?>
