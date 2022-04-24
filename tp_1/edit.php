<?php
// including the database connection file
include_once("config.php");

?>
<?php
// si on clique sur le boutton update 
if (isset($_POST['update'])) {
    
// recuperetion des information     
$id_demande = $_POST['id'];
$commentaire = $_POST['commentaire'];
$id_eta = $_POST['etat'];


// requete pour modifier 
$result = mysqli_query($mysqli, "UPDATE demande SET commentaire = '$commentaire', id_eta = '$id_eta' WHERE id_demande ='$id_demande'");


}

?>
<html>
<head>  
    <title>Edit employe</title>
</head>

<body>
    <!-- incorporation du css -->
    <link rel="stylesheet" type="text/css" href="css/edit.css" />

    <?php
    //recuperation des donnees de la page precedante
    if (isset($_GET['id'])) {
     $id_demande = $_GET['id'];
     $commentaire= $_GET['commentaire'];
      } 

     ?>
    <!-- boutton de retour en arriere -->
    <a href="employe.php">Retour en arrière</a>
    <br/><br/>
    
    <form name="form1" method="post" action="edit.php">
        <table border="0">


<!-- zone de modification de l'etat avec recuperation des donnees de la bdd -->
<h3> Modifier l'état : </h3>
<select name="etat" >
<?php
$resultat = mysqli_query($mysqli, "SELECT id_etat, libelle_etat FROM etat");



while($ress = mysqli_fetch_array($resultat)) {
echo "<option value=".$ress['id_etat'].">".$ress['libelle_etat']."</option>";

}
?>

</select>

</select>


                </td>
            </tr>
            <tr> 
                <!-- zone de modification du commentaire avec sa recuperation dans la bdd -->
                <td>comentaire</td>
                <td><input type="text" name="commentaire" value=""></td>
            </tr>
            <input type="hidden" name="id" value="<?php echo $id_demande;?>">

            <input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>