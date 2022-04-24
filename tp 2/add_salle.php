<?php


	include_once("config.php");
	session_start();

	//recuperation des donnees rentrer dans le formulaire

	$nom_salle= $_POST['nom_salle'];
	$id_salle= $_POST['id_salle'];


	//insertion des donnees recuperer pour les rentrer dans la bdd

	$add = mysqli_query($mysqli, "INSERT INTO `salle` (`id_salle`, `nom_salle` ) 
								  VALUES (NULL, '$nom_salle');");

	header ("location: modification_salle.php");



	?>