<?php
    /* 
    fichier d'installation des modules dans le moteur du collectif V5
    conçu ou gérer par l'association collectif 11880, Date de création le 30/10/2023
    Actuellement à la version 1.3.4 au 06/10/2024 

    Cette version fonctionne uniquement sur la version V5 du moteur !

    La version 1.3.4 comprend :
        La gestion complète des modules tabbord, blog et panier. Le module Tooltip mit en pause car pas du tout à jour.
        L’ancien module Eléments a été entièrement réécrit pour la V5 
        Ajout d'une condition si l'un des modules est à true, pour inclure les fichiers instal_modules.php et instal_module.json
        Déplacer le lancement de la session du module panier dans son fichier d'installation
        Ajout à la ligne 31, le dossier du module blog avec la variable $insmod["blog"]
        Changement de variable en ligne 47 lié au passage de la donnée dans le fichier install_module.json
        Modification de la variable et de la donnée qui lance le fichier json du module blog en ligne 27
        déplacement de la variable donnée [nom_elmemnt] indexée maintenant avec $insmod

    */
    if ($liens["tabbord"] || $liens["mod_blog"] || $liens["panier"]){
        $donmod = file_get_contents($demar["dos_modul"]."/".$demar["json_modul"].$jsn);
        $insmod = json_decode($donmod, true);
    }
    if ($liens["tabbord"]) {
        include ($demar["dos_modul"]."/".$insmod["tabbord"]."/".$insmod["instal_tabbord"].$lp); 
    } 
    if ($liens["mod_blog"]) {
        $json = file_get_contents( $demar["dos_modul"]."/".$insmod["blog"]."/".$insmod["instal_blog"].$jsn);
        $mod_blog = json_decode($json, true);
    }
    if ($liens["mod_tooltip"]) {
        /* $json = file_get_contents($demar["dos_modul"]."tooltip/".$liens["js_tooltip"].".json");
        $mod_tooltip = json_decode($json, true); */
    }
    if ($liens["panier"]){
        include ($demar["dos_modul"]."/".$insmod["panier"]."/".$insmod["instal_panier"].$lp);
    }  
	if($liens["list"]){
		$lstelemt = file_get_contents($chem_princ."/".$demar["dirdonne"]."/".$insmod["nom_elmemnt"].$jsn);
		$affichtxt = json_decode($lstelemt, true);
	}
    if ($liens["tabbord"] || $liens["mod_blog"] || $liens["panier"]){
        include($demar["dos_modul"]."/".$insmod["fnc_module"].$lp );
    }
?>