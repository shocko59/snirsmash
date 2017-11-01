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
                    <li><a href="">Classements</a></li>
                </ul>
            </nav>

        <div id="conteneur">
            <p id="idCatchphrase">Qui est le développeur le plus drôle ?</p>
            
            <div id="divZoneVS" data-cat="1">
                <?php
                $requetePersonne = $objBdd->query("SELECT * FROM personne ORDER BY RAND() LIMIT 2");
                $tableauPers = Array();
                $tableauId = Array();
                
                foreach($requetePersonne as $resultat) {
                    array_push($tableauPers, $resultat["nomPers"]);
                    array_push($tableauId, $resultat["idPers"]);
                }
                
                $requetePersonne->closeCursor();
                
                ?>
                <div id="divGauche" data-id="<?php echo $tableauId[0]; ?>">
                    <?php echo $tableauPers[0]; ?>
                    <img id="imgFlecheGch" src="../img/flechegauchesmash.png">
                </div>
                <div id="imgVS">
                    <img src="../img/vssmash.png">
                </div>
                <div id="divDroite" data-id="<?php echo $tableauId[1]; ?>">
                     <?php echo $tableauPers[1]; ?>
                    <img id="imgFlecheDrt" src="../img/flechedroitesmash.png">
                </div>
            </div>
        </div>
        <script src="../js/jquery-3.2.0.js" type="text/javascript"></script>
        <script src="../js/monScript.js" type="text/javascript"></script>
    </body>
</html>
