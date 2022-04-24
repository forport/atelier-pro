<?php
 session_start(); 
 ?>

<html>


	<head>
		<title>Connection</title>
	</head>

	<body>

		</form>
		<!-- incorporation du css -->
		<link rel="stylesheet" type="text/css" href="css/index.css" />
    
    <!-- formulaire de connxion -->
    <form action="login.php" method="POST">
        <p>Login : <input type="text" name="login" /></p>
        <p>Mot de passe : <input type="password" name="mdp" /></p>
        <p><input type="submit" value="OK"></p>
    </form>


	</body>

</html>