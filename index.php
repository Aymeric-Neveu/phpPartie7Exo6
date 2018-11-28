<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Exercice 6</title>
</head>
<body>
  <?php
    if (empty($_GET['prenom']) || empty($_GET['nom'])){
    ?>
  <form method="GET" action="index.php">
    <select name="gender">
      <option value="Homme">Homme</option>
      <option value="Femme">Femme</option>
    </select>
    <div>
      <label for="lastname">Nom :</label>
      <input type="text" name="nom" />
    </div>
    <div>
      <label for="firstname">Prénom :</label>
      <input type="text" name="prenom" />
    </div>
    <div class="button">
      <button type="submit">Envoyer</button>
    </div>
  </form>
  <?php
    }
    else{
        echo 'Bonjour '. ' '.$_GET['prenom']. ' ' .$_GET['nom'].' '. 'tu es un(e)' . ' ' . $_GET['gender'];
    }
    ?>
</body>
