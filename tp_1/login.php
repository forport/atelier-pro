<?php 

	session_start();

	include_once("config.php");


	// recuperation des donnees mit dans le formulaire
	$login= $_POST['login'];
	$mdp= $_POST['mdp'];


		// regarde si le formualaire n'est pas vide
		if($login !=="" && $mdp !==""){
			// requete pour voir si l'utilisateur est dans la bdd
			$qry="SELECT * FROM user WHERE login='$login' AND mdp='$mdp'";
			$result= mysqli_query($mysqli, $qry);

				if ($result){
					// regarde si la requete a donner un resultat
					if(mysqli_num_rows($result) > 0) {
						$member= mysqli_fetch_assoc($result);
						$_SESSION['login']= $member['login'];
						$_SESSION['role']= $member['role']; 
						$_SESSION['id']= $member['id_user'];
						
						//redirection en fonction du role
						if ($_SESSION['role'] == 3) {
						header ("location: demande.php");
					
						}
						else if ($_SESSION['role'] == 2) {
						header ("location: employe.php");
					
						}
						else if ($_SESSION['role'] == 1) {
						header ("location: responsable.php");
					
						}
				}
				
				// echec de connexion si l'utilisateur ou le mdp n'est pas dans la bdd
				else {
						echo "le login ou le mot de passe n'est pas correct";

						

					}


			

				
		}

	}
?>