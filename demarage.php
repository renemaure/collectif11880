<?php
    /* 
        date de création 26/11/2023
        fichier demare.php regroupe toutes les variables et condition pour lancer un site géré par le collectif!
        permet la modification pour tous les sites du collectif

        modif du 01/05/2024 à la version 1.0.7
        déplacement de la session panier dans un module à part

    */
    $json = file_get_contents("donnees_site.json");
    $demar = json_decode($json, true);
    $chem_princ =$demar["chem"];
   
    if ($demar["bdd_site"]) {
        include_once ($chem_princ."/".$demar["dirphp"]."/".$demar["nom_bdd"]);
        $result_site = $laison->query('SELECT * FROM mise_jour_site');
        $misjoursite = $result_site->fetch(PDO::FETCH_ASSOC);
    }
    include($chem_princ."/".$demar["direngine"]."/".$demar["engine"]);



    

//   $jsonsite = $demar["f_json"]; 
//   $chem_deb = "systeme/php/";
//   include($chem_deb."/index_deb.php");
?>  