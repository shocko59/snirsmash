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
            <header><a href='index.php'><img id="header" src="img/headersmash.png"></a></header>

            <nav id="idNav">
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="pages/humour.php">Humour</a></li>
                    <li><a href="pages/genant.php">Génant</a></li>
                    <li><a href="pages/relou.php">Relou</a></li>
                    <li><a href="">Classements</a></li>
                </ul>
            </nav>

        <div id="conteneur">
            <p id="idCatchphrase">Qui est le développeur le plus ... ?</p>
            
            <div id="divZoneVS">
                <div id="divGauche">
                    <img id="imgFlecheGch" src="img/flechegauchesmash.png">
                </div>
                <div id="imgVS">
                    <img src="img/vssmash.png">
                </div>
                <div id="divDroite">
                    <img id="imgFlecheDrt" src="img/flechedroitesmash.png">
                </div>
            </div>
        </div>
        <script src="js/jquery-3.2.0.js" type="text/javascript"></script>
        <script src="js/monScript.js" type="text/javascript"></script>
    </body>
</html>
