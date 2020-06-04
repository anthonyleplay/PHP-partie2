<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo4</title>
</head>

<body>
    <h1>Exercice 4</h1>

    <div>L'échelle de Richter est un outil de mesure qui permet de définir la magnitude de moment d'un
        tremblement de terre. Cette échelle va de 1 à 9.
        <br></div>
    <div>Créer une variable <b>magnitude</b>. Selon la valeur de <b>magnitude</b>, afficher la phrase
        correspondante. <br></div>
    <div><br>
        <table border="1">
            <thead>
                <tr>
                    <th scope="col">Magnitude</th>
                    <th scope="col">Phrase</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="text-align: center;">1</td>
                    <td>Micro-séisme impossible à ressentir.</td>
                </tr>
                <tr>
                    <td style="text-align: center;">2</td>
                    <td>Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.</td>
                </tr>
                <tr>
                    <td style="text-align: center;">3</td>
                    <td>Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.</td>
                </tr>
                <tr>
                    <td style="text-align: center;">4</td>
                    <td>Séisme capable de faire bouger des objets mais ne causant généralement pas de
                        dégats.</td>
                </tr>
                <tr>
                    <td style="text-align: center;">5</td>
                    <td>Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des
                        bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments
                        modernes.</td>
                </tr>
                <tr>
                    <td style="text-align: center;">6</td>
                    <td>Fort séisme capable d'engendrer des destructions majeures sur une large distance
                        (180 km) autour de l'épicentre.</td>
                </tr>
                <tr>
                    <td style="text-align: center;">7</td>
                    <td>Séisme capable de destructions majeures à modérées sur une très large zone en
                        fonction de la distance.</td>
                </tr>
                <tr>
                    <td style="text-align: center;">8</td>
                    <td>Séisme capable de destructions majeures sur une très large zone de plusieurs
                        centaines de kilomètres.</td>
                </tr>
                <tr>
                    <td style="text-align: center;">9</td>
                    <td>Séisme capable de tout détruire sur une très vaste zone.</td>
                </tr>
            </tbody>
        </table>
        <br>
    </div>Gérer tous les cas. &nbsp;<br>Utilser autre chose que des if else.

    <p>===============================================</p>

    <?php
$magnitude = 2;

switch ($magnitude) {
    case 1:
        echo "Micro-séisme impossible à ressentir.";
        break;
    case 2:
        echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
        break;
    case 3:
        echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de
        dégats.";
        break;
    case 4:
        echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de
        dégats.";
        break;
    case 5:
        echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des
        bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments
        modernes.";
        break;
    case 6:
        echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance
        (180 km) autour de l'épicentre.";
        break;
    case 7:
        echo "Séisme capable de destructions majeures à modérées sur une très large zone en
        fonction de la distance.";
        break;
    case 8:
        echo "Séisme capable de destructions majeures sur une très large zone de plusieurs
        centaines de kilomètres.";
        break;
    case 9:
        echo "Séisme capable de tout détruire sur une très vaste zone.";
        break;
    
?>

</body>

</html>