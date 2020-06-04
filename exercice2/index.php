<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo2</title>
</head>

<body>
    <h1>Exercice 2</h1>

    <p>Créer une variable <b>isEasy</b> de type booléan et l'initialiser avec une valeur. <br>
        Afficher <i>C'est facile !!</i> si c'est vrai. Dans le cas contraire afficher <i>C'est difficile !!!</i>. </p>

    <p>Bonus : L'écrire de deux manières différentes.</p>


    <?php
$isEasy = false;

if ($isEasy == true){
    echo "<i>C'est facile !!</i><br>";
}else{
    echo "<i>C'est difficile !!!</i><br>";
}

switch ($isEasy) {
    case true:
      echo "<i>C'est facile !!</i><br>";
      break;
    case false:
      echo "<i>C'est difficile !!!</i><br>";
      break;
    }
?>

</body>

</html>