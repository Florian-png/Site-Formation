<!DOCTYPE html>
<html lang="fr">

<head>

  <title> Site formation </title>

  <!-- meta -->
  <meta charset="UTF-8">
  <meta name="keywords" content="Formation, BTS, BTS SIO">
  <meta name="description" content="Site de cours et de formation pour les étudiants en BTS SIO">
  <meta name="author" content="SLAM BG">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <!-- Link -->
  <link rel="stylesheet" href="style/main.css">

  <!-- Boostrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- Icons -->


</head>

<body>

  <div class="text-center">

  <h1> Le site Formation est actuellement en maintenance </h1>

  <h3> Merci de bien vouloir revenir plus tard, si vous êtes admin, vous pouvez vous connecter en bas </h3>

  <div class="row">
  <?php

  # On appelle l'inscription
  echo '<div class="col-6">';

  require('account/inscription.php');

  # On récupère la valeur de get récupérer pendant le retour de l'inscription (reuusite ou non)
  if(isset($_GET['reussite']) && ($_GET['reussite'] == true)){
    echo "Inscription réalisé avec succès";
  }
  # Ici false
  if(isset($_GET['echec']) && ($_GET['echec'] == true)){
    echo "Erreur, l'identifiant existe déjà";
  }

  echo '</div>';

  echo '<div class="col-6">';

  require('account/connexion.php');

  echo '</div>';
  ?>

  </div>



  </div>





  <!-- Script link -->
  <script src="scripts/main.js" ></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>

</html>
