	<?php
	session_start();
?>

<html>
<head>
	<title>annonces</title>
</head>
<body>

<!-- boutton de deconnexion-->
<a href="deconnexion.php">deconnexion</a>

<!-- boutton pour revenir en arriere -->
</br><a href="demande.php">Retour en arrière</a>

<!-- incorporation du css -->
	<link rel="stylesheet" type="text/css" href="css/annonces.css" />

	<!-- creation du tableau-->	
	<table id="tableau" data-responsive="table">
	<thead>
		<tr>
			<!-- le nombre de colone -->
			<th>Problème</th>
			<th>Commentaire</th>
			<th>Etat</th>
			<th>Priorité</th>
			<th>Personne affecter</th>
			
		</tr>
	</thead>
	<tbody>
			<?php

					//recuperation de toute les lignes dans la bdd
                    include('config.php');
                    $result =mysqli_query($mysqli,
                        "SELECT *
                        FROM demande
                        INNER JOIN user
                        ON demande.nom_employe = user.id_user
                        INNER JOIN etat
                        ON demande.id_eta = etat.id_etat
                        INNER JOIN priorite
                        ON demande.id_prio= priorite.id_prio;");
                    
      
// met les valeurs recuperer dans une ligne
    while($res = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$res['type_demande']."</td>";
        echo "<td>".$res['commentaire']."</td>";
        echo "<td>".$res['libelle_etat']."</td>";
        echo "<td>".$res['libelle_prio']."</td>";    
        echo "<td>".$res['login']."</td>";
    }
			?>
		
	</tbody>
</table>
</body>
</html>