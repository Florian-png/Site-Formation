<?php


# Vérification du contenu des variables transmisses
if(!empty($_POST['id']) && !empty($_POST['mdp'])) {

  $motDePasse = htmlspecialchars($_POST['mdp']);
  $identifiant = htmlspecialchars($_POST['id']);


} else {

  header('Location:../index.php?echec=true');
  die();

}


# Open BDD et ajout du nouvel utilisateur

require("../admin/bdd.php");


# On vérifie d'abord que l'identifiant est pas déjà pris

$verif = $bdd->prepare("SELECT identifiant FROM account WHERE identifiant = ?");
$verif->execute(array($identifiant));

# On stock les données dans data
$data = $verif->fetch();

#On check a la row
$row = $verif->rowCount();



# Vérification si le pseudo existe :
# Si row == 1, ça veut dire qu'il y a déjà une ligne avec le pseudo
if($row == 1){

  $verif->closeCursor();
  header('Location:../index.php?echec=true');

} else {

  # Si c'est bon, on envoi dans la DB en Hasant le mdp
  $passHas = password_hash($motDePasse, PASSWORD_DEFAULT);

  $ajout = $bdd->prepare('INSERT INTO account (identifiant,motDePasse) VALUES (?,?)');
  $ajout->execute(array($identifiant, $passHas));
  $ajout->closeCursor();

  # On retourne à l'accueil
  header("Location:../index.php?reussite=true");

}



?>
