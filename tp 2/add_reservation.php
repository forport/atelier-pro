<?php


	include_once("config.php");
	session_start();

//recuperation des donnees rentrer dans le formulaire
	$id= $_SESSION['id'];
	$datte= $_POST['datte'];
	$heure= $_POST['heure'];
	$id_salle= $_POST['id_salle'];
	
//requete pour savoir si une salle est deja utiliser
	$result =mysqli_query($mysqli,
				"SELECT datte,heure,id_sal
				FROM creneau
				where datte='$datte'
				and heure='$heure'
				and id_sal='$id_salle';");


// regarde le resultat de la requete
		if(mysqli_num_rows($result) > 0)  {
 		echo "cette salle est deja prise a cette date";
 		header("location: reservation.php");
 	}


	
//insertion des donnees recuperer pour les rentrer dans la bdd
 	else{
 		$add = mysqli_query($mysqli, "INSERT INTO `creneau` (`id_creneau`, `datte`, `heure`, `id_sal`, `id_us` ) 
								  VALUES (NULL, '$datte', '$heure', '$id_salle', $id);");

		header("location: creneau.php");

 	}









?>