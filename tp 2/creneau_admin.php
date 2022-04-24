<?php
	session_start();
?>

<html>
<head>
	<title>creneau</title>
</head>
<body>
<!-- boutton de deconnexion-->
<a href="deconnexion.php">deconnexion</a>

<!-- boutton pour revenir en arriere -->
</br><a href="admin.php">Retour en arrière</a>

<!-- incorporation du css -->
		<link rel="stylesheet" type="text/css" href="css/creneau.css" />

<!-- creation du tableau-->		
	<table id="tableau" data-responsive="table">
	<thead>
		<!-- le nombre de colone -->
		<tr>
			<th>Date</th>
			<th>Heure</th>
			<th>Salle reserver</th>
			
		</tr>
	</thead>
	<tbody>
			<?php
				include_once('config.php');

				//recuperation de toute les lignes dans la bdd
				$result =mysqli_query($mysqli,
				"SELECT *
				FROM creneau
				inner join salle on creneau.id_sal=salle.id_salle 
				ORDER BY datte");


// met les valeurs recuperer dans une ligne
while($res = mysqli_fetch_array($result)) {
echo "<tr>";
echo "<td>".$res['datte']."</td>";
echo "<td>".$res['heure']."</td>";
echo "<td>".$res['nom_salle']."</td>";


}
?>
			
		
	</tbody>
</table>
</body>
</html>