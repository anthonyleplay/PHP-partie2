<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo3</title>
</head>

<body>
    <h1>Exercice 3</h1>

    <p>Créer deux variables age et gender. La variable gender peut prendre comme valeur :</p>
    <ul>
        <li>Homme</li>
        <li>Femme</li>
    </ul>

    <p>En fonction de l'âge et du genre afficher la phrase correspondante :</p>
    <ul>
        <li>Vous êtes un homme et vous êtes majeur</li>
        <li>Vous êtes un homme et vous êtes mineur</li>
        <li>Vous êtes une femme et vous êtes majeure</li>
        <li>Vous êtes une femme et vous êtes mineur</li>
    </ul>

    <p>Gérer tous les cas. </p>


    <?php
$age = 33;
$gender = "Homme";

if ($age >= 18 && $gender == "Homme") {
    echo "Vous êtes un homme et vous êtes majeur<br>";
}else if ($age < 18 && $gender == "Homme") {
    echo "Vous êtes un homme et vous êtes mineur<br>";
}else if ($age >= 18 && $gender == "Femme") {
    echo "Vous êtes une femme et vous êtes majeure<br>";
}else if ($age < 18 && $gender == "Femme") {
    echo "Vous êtes une femme et vous êtes mineur<br>";
}else{
    echo "entré un age et un genre(Homme ou Femme)<br>";
}

switch ($gender) {
    case "Homme":
        if ($age >= 18) {
            echo "Vous êtes un homme et vous êtes majeur<br>";
        }else{
            echo "Vous êtes un homme et vous êtes mineur<br>";
        }
      break;
    case "Femme":
        if ($age >= 18) {
            echo "Vous êtes une femme et vous êtes majeure<br>";
        }else {
            echo "Vous êtes une femme et vous êtes mineur<br>";
        }
      break;
    }

?>

</body>

</html>