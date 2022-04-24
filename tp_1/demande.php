<html>

<?php 

	session_start();

	include_once("config.php"); 
?>


	<head><title>interface</title></head>

	<body>
		<!-- incorporation du css -->
		<link rel="stylesheet" type="text/css" href="css/formulaire.css" />

		<!--formumaire pour renseigner les paramamètres de la demande-->
		<form action="add_demande.php" method="POST">

			<!-- bouton de déconnexion -->
			<a href="deconnexion.php">deconnexion</a>


			<p><h3>Veuillez remplir le formulaire de demmande :</h3></p>
			<div>
				<!--zone ou l'on rentre les information-->
				<textarea name="demande" rows="5" cols="50" maxlength="500" spellcheck required placeholder="Quel est le problème ?"></textarea>
			</div>
			<div>
				</br>
				<!--boutton d'envoie-->
	        		<input type="submit" value="Envoyer"></input>
	        </div>
	        <!--boutton pour changer de page-->
	         <a href ="annonces.php">Voir les demandes </a>

	    </form>
	  </br>
	 

	</body>
</html>