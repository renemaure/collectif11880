<?php
    /* 
        fichier d'installation des modules dans le moteur du collectif V5
        conçu ou gérer par l'association collectif 11880 
        Date de création le 30/10/2023
        Actuellement à la version 1.2.2 au 12/05/2024 

        ! fonctionne uniquement sur la version 5 du moteur !

        la version 1.2.2 comprend:
            l'ajout d'un fichier json contenant les données d'installation des moduls anciennemant dans le fichier json de démarage!
            L'ajout du module TabBord qui est fonctionnel
            L'installation du module Blog mit en pause car pas du tout à jour 
            L'ajout du module Tooltip mit en pause car pas du tout à jour 
            L'ajout du module panier pas encore vérifier
            L'ajout du module principal Elements qui n'est pas encore un module, Entierement réecrit pour la V5
    */
    $donmod = file_get_contents($demar["dos_modul"]."/".$demar["json_modul"].$jsn);
	$insmod = json_decode($donmod, true);
    if ($liens["tabbord"]) include ($demar["dos_modul"]."/".$insmod["tabbord"]."/".$insmod["instal_tabbord"].$lp); 
    if ($liens["mod_blog"]) {
       /*  $json = file_get_contents( $demar["dos_modul"]."blog/".$liens["js_blog"].".json");
        $mod_blog = json_decode($json, true); */
    }
    if ($liens["mod_tooltip"]) {
        /* $json = file_get_contents($demar["dos_modul"]."tooltip/".$liens["js_tooltip"].".json");
        $mod_tooltip = json_decode($json, true); */
    }
    if ($liens["panier"]){
        session_start(); 
        include ($demar["dos_modul"]."/".$insmod["panier"]."/".$insmod["instal_panier"].$lp);
    }  
	if($liens["list"]){
		$lstelemt = file_get_contents($chem_princ."/".$demar["dirdonne"]."/".$demar["nom_elmemnt"].$jsn);
		$affichtxt = json_decode($lstelemt, true);
	}

    
	
?>