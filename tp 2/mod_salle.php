<?php
// including the database connection file
include_once("config.php");

?>
<?php
// si on clique sur le boutton update 
if (isset($_POST['update'])) {
    
// recuperetion des information    
$id_salle = $_POST['id'];
$nom_salle = $_POST['nom_salle'];



// requete pour modifier 
$result = mysqli_query($mysqli, "UPDATE salle SET nom_salle = '$nom_salle' WHERE id_salle ='$id_salle'");


}

?>
<html>
<head>  
    <title>Mod Salle</title>
</head>

<body>
    <!-- incorporation du css -->
    <link rel="stylesheet" type="text/css" href="css/mod_salle.css" />

    <?php
    //recuperation des donnees de la page precedante
    if (isset($_GET['id'])) {
     $id_salle = $_GET['id'];
     $nom_salle= $_GET['nom'];
      } 

     ?>
     <!-- boutton de retour en arriere -->
    <a href="modification_salle.php">Retour en arrière</a>
    <br/><br/>
    
    <form name="form1" method="post" action="mod_salle.php">
       

    <!-- zone de modification  du nom de la salle avec la recuperation de l'ancien nom -->
            <tr> 
                <td>nom de la salle :</td>
                <td><input type="text" name="nom_salle" value="<?php echo $nom_salle;?>"></td>
            </tr>
            <input type="hidden" name="id" value="<?php echo $id_salle;?>">

            <input type="submit" name="update" value="Update">
            
        
    </form>
</body>
</html>