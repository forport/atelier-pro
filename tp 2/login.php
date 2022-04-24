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
						//assignation des valeurs dans des variables
						$member= mysqli_fetch_assoc($result);
						$_SESSION ['login']= $member['login']; 
						$_SESSION['id']= $member['id_user'];
						$_SESSION['role']= $member['role'];

						//redirection en fonction du role
						if ($_SESSION['role'] == '2'){
						header("location: admin.php");
						}

						elseif($_SESSION['role'] == '1' ){
							header ("location: reservation.php");
						}	

				}
				// echec de connexion si l'utilisateur ou le mdp n'est pas dans la bdd
					else {
						echo "le login ou le mot de passe n'est pas correct";

						

					}

					


	}
}
?>