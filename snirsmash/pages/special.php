<!DOCTYPE html>
<html>
    <head>
        <link href="../css/style.css" rel="stylesheet" type="text/css"/>
        
        <!--Connexion à la bdd-->
        <?php require("../bdd/bddconfig.php"); ?>
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
            <header><a href='index.php'><img id="header" src="../img/headersmash.png"></a></header>

            <nav id="idNav">
                <ul>
                    <li><a href="../index.php">Accueil</a></li>
                    <li><a href="humour.php">Humour</a></li>
                    <li><a href="genant.php">Génant</a></li>
                    <li><a href="relou.php">Relou</a></li>
                    <li><a href="special.php">Spécial</a></li>
                    <li><a href="">Classements</a></li>
                </ul>
            </nav>

        <div id="conteneur">
            <p id="idCatchphrase">Qui est le développeur le plus drôle ?</p>
            
            <div id="divZoneVS">
                <div id="divGauche">
                    <img id="imgFlecheGch" src="../img/flechegauchesmash.png">s
                </div>
                <div id="imgVS">
                    <img src="../img/vssmash.png">
                </div>
                <div id="divDroite">
                    <img id="imgFlecheDrt" src="../img/flechedroitesmash.png">
                </div>
            </div>s
        </div>
        <script src="../js/jquery-3.2.0.js" type="text/javascript"></script>
        <script src="../js/monScript.js" type="text/javascript"></script>
    </body>
</html>
