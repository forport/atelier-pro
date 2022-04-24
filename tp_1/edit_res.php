<?php
// including the database connection file
include_once("config.php");

?>
<?php
// si on clique sur le boutton update 
if (isset($_POST['update'])) {
    
// recuperetion des information    
$id_demande = $_POST['id'];
$nom_employe = $_POST['nom'];
$id_prio = $_POST['prio'];


// requete pour modifier 
$result = mysqli_query($mysqli, "UPDATE demande SET nom_employe = '$nom_employe', id_prio = '$id_prio' WHERE id_demande ='$id_demande'");


}

?>
<html>
<head>  
    <title>Edit responsable</title>
</head>
<!-- incorporation du css -->
<link rel="stylesheet" type="text/css" href="css/edit_res.css" />


<body>
    <?php
    //recuperation des donnees de la page precedante
    if (isset($_GET['id'])) {
     $id_demande = $_GET['id'];
      } 

     ?>
     <!-- boutton de retour en arriere -->
    <a href="responsable.php">Retour en arrière</a>
    <br/><br/>
    
    <form name="form1" method="post" action="edit_res.php">
        <table border="0">
    
    
</select>
<!-- zone de modification de la priorite avec recuperation des donnees de la bdd -->
<h3> Modifier la priorité : </h3>
<select name="prio" >
<?php
$resultat = mysqli_query($mysqli, "SELECT id_prio, libelle_prio FROM priorite");



while($ress = mysqli_fetch_array($resultat)) {
echo "<option value=".$ress['id_prio'].">".$ress['libelle_prio']."</option>";

}
?>

</select>
<!-- zone de modification de l'employe affecter avec recuperation des donnees de la bdd -->
<h3> Affecter une personne : </h3>
    <select name="nom" >
<?php
$resultat = mysqli_query($mysqli, "SELECT id_user, role,login  FROM user WHERE role = 2");



while($ress = mysqli_fetch_array($resultat)) {
echo "<option value=".$ress['id_user'].">".$ress['login']."</option>";

}
?>
            <input type="hidden" name="id" value="<?php echo $id_demande;?>">

            <input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>