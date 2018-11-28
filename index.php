<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice 6</title>
  </head>
  <body>
    <?php
    if (empty($_POST['prenom']) || empty($_POST['nom']) || empty($_POST['gender'])){
    }
    ?>
    <form action="index.php" method="post">
    <select name="gender">
      <option value="Mr">Mr</option>
      <option value="Mme">Mme</option>
    </select>
    <p>prénom<input type="text" name="prenom" value=""></p>
    <p>nom<input type="text" name="nom" value=""></p>
    <button type="submit" name="button">Valider</button>
    </form>
    <?php
    echo $_POST['gender'] . ' ' . $_POST['prenom'] . ' ' . $_POST['nom'];
    ?>
  </body>
</html>
