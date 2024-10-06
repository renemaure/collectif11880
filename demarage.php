<?php
    /*  date de création 26/11/2023
        fichier demare.php regroupe toutes les variables et condition pour lancer un site géré par le collectif!
        permet la modification pour tous les sites du collectif
        actuellement à la version 1.0.8, au 29/09/2024

        modif de la version 1.0.8
        ajouter les extentions ".php" 
        déplacement de la session panier dans un fichier à part
    */
    $json = file_get_contents("donnees_site.json");
    $demar = json_decode($json, true);
    $chem_princ = $demar["chem"];
   
    if ($demar["bdd_site"]) {
        include_once ($chem_princ."/".$demar["dirphp"]."/".$demar["nom_bdd"].".php");
        $result_site = $laison->query('SELECT * FROM mise_jour_site');
        $misjoursite = $result_site->fetch(PDO::FETCH_ASSOC);
    }
    include($chem_princ."/".$demar["direngine"]."/".$demar["engine"].".php");
?>  