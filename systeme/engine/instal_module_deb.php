<?php
    /* 
        fichier d'installation des différents modules dans le moteur du collectif
        création au 30/10/2023
        actuellement à la version 1.1.5 au 01/05/2024 

         ! fonctionne uniquement sur la version 5 du moteur !

        la version 1.1.5 comprend:
            ajout du module TabBord
            installation du module Blog
            ajout du module Tooltip
            ajout du module panier
            ajout du module principal Elements
            rajout des modules principaux, Eléments et Auto-menu
            supression de la condition pour lancer la fonction menu remis dans index_deb
    */
    /* module TabBord / déplacement du moteur ver ce fichier 01/05/2024*/
    if ($liens["tabbord"]) include ($demar["dos_modul"]."/".$demar["tabbord"]."/".$demar["instal_tabbord"].$lp); 
    /* module Blog, permttant d'aficher du texte et des images avec une animation */
    if ($liens["mod_blog"]) {
        $json = file_get_contents( $demar["dos_modul"]."blog/".$liens["js_blog"].".json");
        $mod_blog = json_decode($json, true);
    }
    /* module Tooltip pour afficher des infos-bulles dans un texte*/
    if ($liens["mod_tooltip"]) {
        $json = file_get_contents($demar["dos_modul"]."tooltip/".$liens["js_tooltip"].".json");
        $mod_tooltip = json_decode($json, true);
    }
    if ($liens["panier"]){
        session_start(); // corection au 26/11/2023 du bug panier possible 
        include ($demar["dos_modul"]."/".$demar["panier"]."/".$demar["instal_panier"].$lp);
    }  
     /*  module Eléments avec le fichier list-elements.json, qui contient des données optionelles à afficher sur le site. 
        entierement réecrit pour la version 5 */
	if($liens["list"]){
		$lstelemt = file_get_contents($chem_princ."/".$demar["dirdonne"]."/".$demar["nom_elmemnt"].$jsn);
		$affichtxt = json_decode($lstelemt, true);
	}

    
	
?>