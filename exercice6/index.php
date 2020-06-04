<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo6</title>
</head>

<body>
    <h1>Exercice 6</h1>

    <div>
        <div>Traduire ce code avec des if et des else : &nbsp;<br><br>&nbsp;&nbsp;&nbsp;
            &lt;?php<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; echo ($age &gt;= 18) ? 'Tu es majeur' : 'Tu n\'es pas
            majeur';<br>&nbsp;&nbsp;&nbsp; ?&gt;
        </div>
    </div>

    <p>===============================================</p>

    <?php

$age = 33;

if ($age >= 18){
    echo "Tu es majeur";
}else {
    echo "Tu n'es pas majeur";
}

?>

</body>

</html>