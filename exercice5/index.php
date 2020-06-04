<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo5</title>
</head>

<body>
    <h1>Exercice 5</h1>


    <div>
        <div>Traduire ce code avec des <b>if </b>et des <b>else </b>:&nbsp;
            <br><br>
            &nbsp;&nbsp;&nbsp; &lt;?php<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; echo ($gender != 'Homme') ?
            'C\'est une développeuse !!!' : 'C\'est un développeur !!!';<br>&nbsp;&nbsp;&nbsp; ?&gt;
        </div>
    </div>

<p>===============================================</p>

    <?php

$gender = "Homme";

if ($gender != "Homme"){
    echo "C'est une développeuse !!!";
}else {
    echo "C'est un développeur !!!";
}

?>

</body>

</html>