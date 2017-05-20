<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <!--Connexion à la bdd-->
        <?php require("bdd/bddconfig.php"); ?>
        <?php
        try {
            $objBdd = new PDO("mysql:host=$bddhost;dbname=$bddname;charset=utf8", $bdduser, $bddpass);
        } catch (PDOException $e) {
            print 'Erreur: ' . $e->getMessage() . "</br>";
        }
        ?>

        <meta charset="UTF-8">
        <title>Snir Smash</title>
    </head>
    <body>
        <div id="conteneur">
            <header><img id="header" src="img/headersmash.png"></header>
            <!--requête pour la NavBar-->
            <?php
            $reponse = $objBdd->query('SELECT idCat, nomCat FROM categories ORDER BY idCat ASC');
            ?>

            <nav id="idNav">
                <ul>
                    <?php
                    foreach ($reponse as $resultat) {
                        ?>
                        <li><?php echo $resultat["nomCat"];
                }
                    ?></li>
                </ul>
            </nav>
            <h1 id="idTitreCategorie">Humour</h1>
            <p id="idCatchphrase">Qui est le développeur le plus drôle ?</p>
            <div id="divZoneVS">
                <div id="divGauche"><img id="imgFlecheGch" src="img/flechegauchesmash.png"></div>
                <div id="imgVS"><img src="img/vssmash.png"></div>
                <div id="divDroite"><img id="imgFlecheDrt" src="img/flechedroitesmash.png"></div>
            </div>
            <?php
            echo $contenu;
            ?>
        </div>
    </body>
</html>
