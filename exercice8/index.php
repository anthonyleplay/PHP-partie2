<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo8</title>
</head>

<body>
    <h1>Exercice 8</h1>

    <div id="intro" class="box py-3 generalbox boxaligncenter">
        <div class="no-overflow">Traduire ce code avec des if et des else : &nbsp;<br><br>&nbsp;&nbsp;&nbsp;
            &lt;?php<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; echo ($isOk) ? 'c'est ok !!' : 'c'est pas bon
            !!!';<br>&nbsp;&nbsp;&nbsp; ?&gt;</div>
    </div>

    <p>===============================================</p>

    <?php
    
$isOk = false;

if ($isOk){
    echo "c'est ok !!";
}else {
    echo "c'est pas bon !!!";
}

?>

</body>

</html>