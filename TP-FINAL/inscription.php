<?php
include 'db.php'; 

error_reporting(0);
session_start();



if (isset($_POST['enregistrer'])){ // Si on appuie sur le bouton d'nevoie de données
  
  // On stock les vameurs envoyées dans des variables
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $email = $_POST['email'];
  $password =sha1($_POST['password']);//mot de passe crypté en sha1

  // Et on les envoie à la base de données
  $sql = "INSERT INTO utilisateurs (nom, prenom, email, mdp) VALUES ('$nom','$prenom','$email','$password')"; 
  $result = mysqli_query($conn, $sql);
  
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
     <link rel="stylesheet" href="assets/bootstrap.min.css">
     <link rel="stylesheet" href="assets/all.min.css">
	<title>Home</title>
</head>
<body background="">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">société general</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="inscription.php">inscription</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
	<form action="" method="post">
       <div class="container-fluid">
       	  <div class="p-4  mx-auto shadow rounded" style="width:100%; max-width:340px; margin-top: 50px;">
      
       	  	<img src="assets/images/t.png" class=" =  rounded-circle mx-auto d-block" style="width: 140px;">
       	  	<h3>creation de compte</h3>
       	  	 <input type="text" class="my-2 form-control" placeholder="Nom" name="nom">
       	  	 <input type="text" class="my-2 form-control" placeholder="Prénom" name="prenom">
				  <input type="email" class="my-2 form-control" placeholder="Email" name="email">
				  <input type="password" class="my-2 form-control" placeholder="Mot de passe" name="password">
				
       	   
       	  	 <button class=" btn btn-primary" type="submit" name="enregistrer">Enregistrer</button>
       	  </div>
		
       </div>
	   </form>
	   <script src="assets/bootstrap.bundle.min.js"></script>
    <script src="assets/bootstrap.min.js"></script>
</body>
</html> 