<?php

function AjoutCommentaire($contenu,$auteur,$connex){

	$sql="INSERT INTO commentaire (contenu,auteur) VALUES ('".$contenu."', '".$auteur."')";
	$result=$connex->query($sql);
	return $result;
}

function ListerCommentaire($connex){
	$sql="SELECT contenu,auteur FROM commentaire";
	$result=$connex->query($sql);
	return $result;
}

?>
