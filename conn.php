	<?php

	require_once("connexion.php");	//insert le code connexion.php 
	$conn1=connexionBDD();	//La variable $conn1 prend la valeur d'un objet de type PDO connecté à la BDD
	
	require_once("fonctionBDD.php");	//insert le code fonctionBDD.php 
?>

<?php
	/*
	Récupération des données envoyées
	*/
	
	$local_pseudo= $_GET['pseudo'] ;
	$local_pass= $_GET['pass1'] ;
	$local_type = $_GET['utilisateur'];

	
	
	if($local_type == 'client'){
		
		
		/****
		Si l'utilisateur à coché la case client
		****/
		
		$res=ConnClient($local_pseudo,$conn1);	//appel de la fonction ConnClient
		$resultat = $res->fetch();	//met l'objet PDOStatement sous forme de tableau
		$isPasswordCorrect = password_verify($local_pass, $resultat['passclient']);	//test si le mot de passe rentré correspond au mot de passe haché

		if ($isPasswordCorrect) {
			session_start();	//démarrage du système de session
			$_SESSION['pseudoclient'] = $resultat['pseudoclient'];	//la variable $_SESSION['pseudoclient'] prend la valeur du pseudoclient
			$_SESSION['idclient'] = $resultat['idclient'];
			header('Location: /home/pierre/projet/v1/');	//redirige le client sur la page d'accueil
		}
		else {
			echo 'Mauvais identifiant ou mot de passe !';
		}
	}
	
	
	
	else {
		
		
		/***
		Si l'utilisateur à coché la case employé
		****/
		
		$res = ConnEmploye($local_pseudo,$conn1);	//appel de la fonction ConnEmploye
		$resultat = $res->fetch();	//met l'objet PDOStatement sous forme de tableau
		$isPasswordCorrect1 = password_verify($local_pass, $resultat['passemploye']);	//test si le mot de passe rentré correspond au mot de passe haché
		
			if($isPasswordCorrect1){
			
			
				if($resultat['admin'])	//test si l'employé est un admin
				{
				session_start();	//démarrage du système de session
				$_SESSION['loginemploye'] = $resultat['loginemploye'];	//la variable $_SESSION['loginemploye'] prend la valeur du login de l'employé
				$_SESSION['admin'] = 1;	//la variable $_SESSION['admin'] prend la valeur 1
				header('Location: /RT/1Projet7/'); //redirige l'admin sur la page d'accueil
				}
				else{
					session_start();//démarrage du système de session
					$_SESSION['loginemploye'] = $resultat['loginemploye'];	//la variable $_SESSION['loginemploye'] prend la valeur du login de l'employé
					header('Location: /RT/1Projet7/');	//redirige l'employé sur la page d'accueil
				}
			
			}
				
			
		
		else {
			echo 'Mauvais identifiant ou mot de passe employé !';	//affiche un message d'erreur si aucune des conditions est remplie
		}
	}
	


				
				
				
				
?>
