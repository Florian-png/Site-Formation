<?php

if(!empty($_POST['id']) && !empty($_POST['mdp'])) {

  $identifiant = htmlspecialchars($_POST['id']);
  $motDePasse = htmlspecialchars($_POST['mdp']);

} else {
  header('Location:../index.php?error=vide');
  die();
}




?>
