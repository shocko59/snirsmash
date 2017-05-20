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
        <?php // require("bdd/bddconfig.php"); ?>
        <?php
//        try {
//            $objBdd = new PDO("mysql:host=$bddname;dbname=$bddname;charset=utf8", $bdduser, $bddpass);
//        } catch (PDOException $e) {
//            print 'Erreur: ' . $e->getMessage() . "</br>";
//        }
//        ?>
        
        <meta charset="UTF-8">
        <title>Snir Smash</title>
    </head>
    <body>
        <div id="conteneur">
            <header><img id="header" src="img/headersmash.png"></header>
            <nav id="idNav">
                <ul>
                    <li>Humour</li>
                    <li>Genant</li>
                    <li>Relou</li>
                    <li>Special</li>
                    <li>Classements</li>
                </ul>
            </nav>
            <h1 id="idTitreCategorie">Humour</h1>
            <p id="idCatchphrase">Qui est le développeur le plus drôle ?</p>
            <div id="divZoneVS">
            <div id="divGauche"></div>
            <div id="imgVS"><img src="img/vssmash.png"></div>
            <div id="divDroite"></div>
            </div>
            <?php
            echo $contenu;
            ?>
        </div>
    </body>
</html>
