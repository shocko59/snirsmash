<?php
    $idCat = $_POST["idCat"];
    $idPers = $_POST["idPers"];
    
    require("../bdd/bddconfig.php");
        
    try {
        $objBdd = new PDO("mysql:host=$bddhost;dbname=$bddname;charset=utf8", $bdduser, $bddpass);
    } catch (PDOException $e) {
        print 'Erreur: ' . $e->getMessage() . "</br>";
    }
    
    $requeteAjout = $objBdd->prepare("INSERT INTO score(idScore, idPers, idCat) VALUES (NULL, :idPers, :idCat");
    
    echo $requeteAjout;
    
    $requeteAjout->execute(array(":idPers" => $idPers, ":idCat" => $idCat));
    
    
    $requeteAjout->closeCursor();

