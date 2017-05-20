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
            <header><a href='index.php?idCat=1&nomCat=Humour&adjCat=drôle'><img id="header" src="img/headersmash.png"></a></header>
            <!--requête pour la NavBar-->
            <?php
            $reponse = $objBdd->query('SELECT idCat, nomCat, adjCat FROM categories ORDER BY idCat ASC');
            ?>

            <nav id="idNav">
                <ul>
                    <!--Récupération de la NavBar sur la bdd + affectation des liens
                                        avec l'id de la catégorie-->
                    <?php
                    foreach ($reponse as $resultat) {
                        ?>
                        <li><a href="index.php?idCat=<?php echo $resultat["idCat"]; ?>&nomCat=<?php echo $resultat["nomCat"]; ?>&adjCat=<?php echo $resultat["adjCat"] ?>" >
                                <?php echo $resultat["nomCat"]; ?></a>
                            <?php
                        }
                        ?></li>
                </ul>
            </nav>

            <?php
//            if (isset($_GET["nomCat"])) {
//                $nomCat = strval($_GET["nomCat"]);
//            }
            ?>
            <!--Récupère et affiche le nom de la catégorie-->
            <h1 id="idTitreCategorie"><?php echo $_GET["nomCat"]; ?></h1>

            <?php
//            if (isset($_GET["adjCat"])) {
//                $adjCat = strval($_GET["adjCat"]);
//            }
            ?>
            <!--Récupère et affiche l'adj de la catégorie-->
            <p id="idCatchphrase">Qui est le développeur le plus <?php echo $_GET["adjCat"]; ?> ?</p>
            <div id="divZoneVS">
                <div id="divGauche"><img id="imgFlecheGch" src="img/flechegauchesmash.png"></div>
                <div id="imgVS"><img src="img/vssmash.png"></div>
                <div id="divDroite"><img id="imgFlecheDrt" src="img/flechedroitesmash.png"></div>
            </div>
            <?php
            echo $contenu;
            ?>
        </div>
        <script src="js/jquery-3.2.0.js" type="text/javascript"></script>
        <script src="js/monScript.js" type="text/javascript"></script>
    </body>
</html>
