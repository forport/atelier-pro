<?php
session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<!-- boutton de deconnexion -->
<a href="deconnexion.php">deconnexion</a>

<!-- incorporation du css -->
<link rel="stylesheet" type="text/css" href="css/reservation.css" />


<!-- formualaire de reservation-->
<form action="add_reservation.php" method="POST">
<label for="start">Date voulue:</label>

<!-- selectionner la date de la reservation -->
<input type="date" id="start" name="datte"
       value="<?php echo date('Y-m-d'); ?>"
       min="2018-01-01" max="2050-12-31">


<!-- selectionner l'heure de la reservation -->
<label for="start">Heure voulue:</label>

<select name="heure" id="heure">
    <option value="">--choisir une heure--</option>
    <option value="8">8h-9h</option>
    <option value="9">9h-10h</option>
    <option value="10">10h-11h</option>
    <option value="11">11h-12h</option>
    <option value="12">12h-13h</option>
    <option value="13">13h-14h</option>
    <option value="14">14h-15h</option>
    <option value="15">15h-16h</option>
    <option value="16">16h-17h</option>
    <option value="17">17h-18h</option>
    <option value="18">18h-19h</option>
    <option value="19">19h-20h</option>
</select>


<!-- selectionner la salle de la reservation-->
<label for="start">salle voulue:</label>

<select name="id_salle" id="id_salle">

   <option value="">--choisir une salle--</option>
    <option value="1">salle de réunion 1</option>
    <option value="2">salle de réunion 2</option>
    <option value="3">salle de réunion 3</option>
    <option value="4">salle de réunion 4</option>
    <option value="5">salle de réunion 5</option>
    <option value="6">salle de réunion 6</option>
    <option value="7">salle de réunion 7</option>
    <option value="8">salle de réunion 8</option>
    <option value="9"> amphithéâtre</option>
    <option value="10">multimédia</option>
   
</select>

<!--<h3> Salle voulue : </h3>
<select name="id_salle" >
<?php
//$resultat = mysqli_query($mysqli, "SELECT id_salle, nom_salle FROM salle");



//while($ress = mysqli_fetch_array($resultat)) {
//echo "<option value=".$ress['id_salle'].">".$ress['nom_salle']."</option>";

//}
?>-->




<!--boutton d'envoie des informations-->
	<p><input type="submit" value="réserver"></p>
    





</form>




</body>
</html>