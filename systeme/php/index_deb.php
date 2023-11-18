<?php
	/*
		Fichier de gestion pour la navigation des sites conçu ou gérer par l'association collectif 11880 

	 	Date de création: 18/02/2012  / version 4.20.3 au 23/09/2023.

	 	Ce fichier est libre d'utilisation en sitant l'association: www.collectif11880.org.

	 	DERNIERE MODIFS 

	 	derniere version 4.20.3 du 18/11/2023: 
		dernière version avant passage à la version 5
		cause d'un bug dans le moteur
			!! erreur de récuperation de l'indice pour le aside !!
			on recupere avec le get pg alors que ca devarit etre avec asi !! ATTENTION !! la corection de ce bug peut provoquer des choses etranges car pour moi il a était compensé par des corectifs  comme dans le fichier json du site

			La varaible $fich_blog  contennant le nom de la page active pour l'option blog auto *!
			Elle ne doit pas etre modifiée  constante! 
			
			Rajout d'un fichier json à la racine du site pour activer des modules particuliers comme un tableau de bord ou 
			l'utilisation de différantes langues. 
		
			Modif sur la variable $active: elle est egale à l'indice du lien dans le menu supression du tableau.
	 	
			Rajout d'une condition si un Get'act' est pesent pour consever l'active sur une page à affichage automatique. remis en option dans les variables get

	 		La variable $tempo_cle pour la durée du cookie (elle est déplacée dans le fichier tabbord_deb.php

	 	Si vous vouyez un bug ou une amélioration contactez le collectif, on sitera votre nom, merci!
	*/
	
	/* extensions utilisées pour le site */
	$rn = "\r\n";
	$lp = ".php";
	$lh = ".html";
	$lxt = ".txt";
	
	
	$aside = false;
	$v_tbrd = true;
	if ($demar["tabbord"]) 	include ("tabbord_deb.php"); 

	$json = file_get_contents($chem_princ."/donnees/".$jsonsite.".json");
	$liens = json_decode($json, true);

	$dirlien = $liens["dirlien"]."/";// permet d'indexer le repertoire
	$fich_blog = $liens["index"]; // variable lance le blog sur une page unique 
	//verifier son fonctionnement au 23/09/2023

	/* variables par défaut pour afficher la page en index */
	$affpg =  $dirlien.$liens["index"].$lp; 
	$activ = "1";
	if ($liens["aside"]){
		$affasi =  $dirlien.$liens["fich_aside"].$lp; 
		$aside = true;
	}
	/* requetes en get */
	if(isset($_GET['pg'])) {
		$pgmain = $_GET['pg'];// rajout d'une variable 23/09/2023
		$affpg =  $dirlien.$liens["indic".$pgmain]["lrm"].$lp;
		if(isset($_GET['act'])) $activ = $_GET['act'];
		else  $activ = $_GET['pg']; 
		if (isset($_GET['asi'])) {
			
			/* $affasi =  $dirlien.$liens["indic".$_GET['pg']]["arm"].$lp; */

			/* BUG 18/11/2023!!! erreur de récuperation de l'indice pour le aside on recupere avec le get pg alors que ca devarit etre avec asi !! ATTENTION !! la corection de ce bug peut provoquer des choses etranges car pour moi il a était compensé par des corectifs alleir comme dans le fichier json du site*/
			$affasi =  $dirlien.$liens["indic".$_GET['asi']]["arm"].$lp; 
			$aside = true;
		}
		/*si la variable 'aupg' existe elle reference en BDD une table produit le 23/09/2023*/
		if(isset($_GET['aupg'])){
			$autopg = $_GET['aupg'];
		}
	}
        /*  en option fichier list-elements.json. contient tous les nons des éléments à afficher sur la site 	 */
	if($liens["list"]){
		$lstelemt = file_get_contents($chem_princ."/donnees/list-elements.json");
		$affichtxt = json_decode($lstelemt, true);
	}
	/* générateur de menu: appel de la fonction dans <ul> avec  <?php Genenu($activ, $liens, $rn);  */
	if ($liens["auto_menu"]) include ($chem_princ."/php/menu_deb.php");
?>	