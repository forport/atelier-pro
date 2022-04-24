<?php
session_start();


	include('config.php');

//recuperation de l'id 
if (isset($_GET['id'])) {
     $id_salle = $_GET['id'];
 }

	
 		//requete pour supprimer une salle
		$result = mysqli_query($mysqli,
			"DELETE FROM salle WHERE id_salle='$id_salle'");

		//redirection
		header("location: modification_salle.php");


	?>