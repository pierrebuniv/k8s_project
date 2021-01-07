<html>
	<head>
	<meta charset = "utf-8" />
	<link rel = "stylesheet" href = "style.css" />
	<title>Compagnie taxi</title>
	</head>
	
	
	<body>
	
	<header>
	
		
		<h1>Compagnie de taxi en ligne</h1>
		
		

	</header>
	
	<section>
	
		<aside>
		
		<h3>Date : </h3>
		<?php $date = date("d-m-Y"); //création d'une variable contenant la date en format string jour-mois-année
		print($date); //affiche la variable date
		?>
		<h3>Horloge</h3>
		
		
		
		<!----
		
		Script permettant d'afficher l'heure en temps réel
		
		-->
		
		<div id="afficherheure"></div> <!-- Cette div affiche l'heure -->
			<script type="text/javascript">
				setInterval(function(){		//setInterval permet d'appeler une fonction de maniere repete avec un délai ici 1 seconde
				document.getElementById('afficherheure').innerHTML = new Date().toLocaleTimeString();	//création objet + appelle la methode
				}, 1000);
			</script>
		</aside>
		
		<div id = "page2">
		
			<article id="titre">
				
				<p id="title">Bienvenue à tous!
					<p>
			
			</article>



			<?php

			require_once("connexion.php");
			$conn1=connexionBDD();
			require_once("fonctionBDD.php");
		
			$res=ListerCommentaire($conn1);
			$result=$res->fetchAll();
			foreach ($result as $cle => $valeur) {					
								print('<div id ="Article">');
								print('<p><b>Auteur : </b>'.$valeur[1].'</p>');
								print('<div id="commentaire">');
								print($valeur[0]);
								print('</div>');
								print('</div>');
			}
			?>





			<h2>Poster un commenataire</h2>
			<form method="GET" action="commentaire.php">
			<label>Pseudo</label>
			<input type="text" name="pseudo"/>
			</br>
			<label>Commentaire<label>
			<input type="text" name="commentaire"/>
			</br>
			<input type="submit" value="envoyer" />
		
			</form>
		</div>
		
	</section>
	
	
	</body>
	

</html>
