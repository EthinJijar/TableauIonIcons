<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title></title>
    <link href="style.css" rel="stylesheet" />
    <style>
        @font-face {
            /* J'ouvre la police de caractères IonIcons */
            font-family: "Ionicons";
            src: url("C:\Users\egira\Downloads\ionicons.ttf") format("truetype");
        }

        i {
            font-family: "Ionicons";
            font-style: normal;
        }
    </style>
</head>

<body>
    <?php
    try {
        // On se connecte à MySQL
        $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '', array(PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC) );
    } catch (Exception $e) {
        // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : ' . $e->getMessage());
    }
    // J'ouvre la base de données test

    // Si tout va bien, on peut continuer


    ?>

    <style>
        table {
            border-collapse: collapse;
            /* Les bordures du tableau seront collées (plus joli) */
        }

        td {
            border: 1px solid black;
        }
    </style>

    <?php

    // On récupère tout le contenu de la table ionicons
    $reponses = $bdd->query('SELECT * FROM ionicons');

    echo '<table border="1">';

    while ($row = $reponses->fetch()) {
        echo '<tr>';
        foreach ($row as $field) {
            echo '<td>' . $field . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';

   /* while ($donnees = $reponses->fetch()) {
        echo $donnees['name'] . '<br />'; // j'affiche toutes les entrées name 
        echo "<i>&#x" . $donnees['class'] . ';</i><br />'; // j'affiche toutes les entrées class 
        echo $donnees['class'] . '<br />';
    } 

    $reponse->closeCursor(); // Termine le traitement de la requête
*/
    ?>

</body>

</html>