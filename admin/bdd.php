<?php
try {

  $bdd = new PDO("mysql:host=localhost;dbname=formation", 'root', 'root');

} catch (PDOException $e) {

  echo "Erreur de connexion :" . $e->getMessage();

}


 ?>
