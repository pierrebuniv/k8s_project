<html>
	<head>
		
		<meta http-equiv="Content-Type" content="text/HTML; charset=iso-8859-1" />
	</head>

	<body>
	
	
<?php
		require_once("connexion.php");
		$conn1=connexionBDD();
		require_once("fonctionBDD.php");

		
		$contenu=$_GET['commentaire'] ;
		$auteur=$_GET['pseudo'] ;
		$res=AjoutCommentaire($contenu,$auteur,$conn1);
		print("<a href='index.php'>retour à l'accueil</a>");
?>
	</body>
</html>
