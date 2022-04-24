<?php
session_start();


	include('config.php');

//recuperation de l'id
if (isset($_GET['id'])) {
     $id_demande = $_GET['id'];
 }

	
 		//requete pour supprimer une demande
		$result = mysqli_query($mysqli,
			"DELETE FROM demande WHERE id_demande='$id_demande'");

		//redirection
		header("location: responsable.php");


	?>