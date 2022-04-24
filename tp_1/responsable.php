<?php 
	session_start();
?>

<html>
<head>
	<title>responsable</title>
</head>
<body>

<!-- boutton de deconnexion-->
<a href="deconnexion.php">deconnexion</a>

<!-- incorporation du css -->
<link rel="stylesheet" type="text/css" href="css/responsable.css" />

	<!-- creation du tableau-->	
<table id="tableau" data-responsive="table">
	
	<thead>
		<tr>
			<!-- le nombre de colone -->
			<th> Demande </th>
			<th> Priorité </th>
			<th> Etat </th>
			<th> Commentaire </th>
			<th> Employe affecter </th>
			<th> Modification</th>
			
		</tr>
	</thead>
	
			<?php
				include('config.php');

				//recuperation de toute les lignes dans la bdd
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
echo "<td>".$res['libelle_prio']."</td>";
echo "<td>".$res['libelle_etat']."</td>";
echo "<td>".$res['commentaire']."</td>";
echo "<td>".$res['login']."</td>";
echo "<td><a href=\"edit_res.php?id=$res[id_demande]\">Edit</a>";
echo "<td><a href=\"suppression.php?id=$res[id_demande]\">supprimer</a>";


}
?>
</table>
</body>
</html>
