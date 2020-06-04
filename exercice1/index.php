<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo1</title>
</head>

<body>
    <h1>Exercice 1</h1>

    <p>Créer une variable <b>age</b> et l'initialiser avec une valeur.  <br>
Si l'âge est supérieur ou égale à 18, afficher <i>Vous êtes majeur</i>. Dans le cas contraire, afficher <i>Vous êtes mineur</i>.</p>


<?php
$age = 15;
if ($age >= 18) {
    echo "<i>Vous êtes majeur</i>";
  } else {
    echo "<i>Vous êtes mineur</i>";
  }

?>

</body>

</html>