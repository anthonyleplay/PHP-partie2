<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo7</title>
</head>

<body>
    <h1>Exercice 7</h1>

    <div>
        <div>Traduire ce code avec des if et des else : &nbsp;<br><br>&nbsp;&nbsp;&nbsp;
            &lt;?php<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; echo ($isOk == false) ? 'c\'est pas bon !!!' : 'c\'est ok
            !!';<br>&nbsp;&nbsp;&nbsp; ?&gt;</div>
    </div>

    <p>===============================================</p>

    <?php

$isOk = false;

if ($isOk == false){
    echo "c'est pas bon !!!";
}else {
    echo "c'est ok !!";
}

?>

</body>

</html>