<h3> Connexion </h3>

<form action="account/traitement_connexion.php" method="post">

  <label for="id"> Identifiant : </label> <br>
  <input type="text" class="form-input" id="id" name="id" required placeholder="Hubert Bonnisseur">

  <br>

  <label for="mdp"> Mot de passe : </label> <br>
  <input type="password" class="form-password" id="mdp" name="mdp" required placeholder="************">

  <br>

  <input type="checkbox" id="rappelle" name="rappelle">
  <label for="rappelle">Se rappeller de moi</label>

  <br>

  <input type="submit" class="form-submit" value="Se connecter">


</form>
