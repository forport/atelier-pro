<?php


	include_once("config.php");
	session_start();

	// recuperation des données rentrer dans le formulaire
	$id= $_SESSION['id'];
	$demande= $_POST['demande'];

	// requete pour ajouter une demande 
	$add = mysqli_query($mysqli, "INSERT INTO `demande` (`id_demande`, `type_demande`, `commentaire`, `id_us`, `id_eta`, `id_prio`, `nom_employe`) 
								  VALUES (NULL, '$demande', NULL, '$id', '1', '1', NULL);");
	//redirection 	
	header ("location: annonces.php")
	
	

?>