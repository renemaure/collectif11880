<?php
	/*
		fichier de gestion de la navigation des sites conçu ou gérer par l'association collectif 11880
	 	version 4.7.6 au 29 juillet 2021.
		fichier libre d'utilisation en sitant l'association collectif11880.org.
	*/
		/* déclaration variable pour le site*/
	$rn = "\r\n";
	$lp = ".php";
	$lh = ".html";
	$lxt = ".txt";
	$act = "active";
	
	/* if(isset($_COOKIE["tabbord"])){
		$repjs = $chem_princ."donnees/tab_bord.json";
	} */ 
	/* non fonctionnel fait un bug en local */

	$activ = array_fill(0,20,'');
	$json = file_get_contents($repjs);
	$liens = json_decode($json, true);
	$dirlien = $liens["dirlien"];

	if(isset($_GET['pg']) && isset($_GET['act']))
	{
		$affpg =  $liens["dirlien"].$liens[$_GET['pg']].$lp;
		$activ[$_GET['act']] = "active";
		$affasi =  $liens["dirlien"].$liens[$_GET['asi']].$lp;
	}
	else{
		$affpg =  $liens["dirlien"].$liens["index"].$lp;
		$affasi =  $liens["dirlien"].$liens["aside"].$lp;
		$activ[1] = "active";
	}

/* 	if ($liens["tabbord"]=="true") {
		if (isset($_POST['acces']) && md5($_POST['acces']) == $liens["pas_bord"])
		{
		setcookie("tabbord", "ok", time()+3600,"/"); 
		}
	} */
	/* a revoir son fonctionnement */

	 /*  fichier list-elements.json. contient tous les nons des éléments à afficher sur la site 	 */
	if($liens["list"]){
		$lstelemt = file_get_contents($chem_princ."donnees/list-elements.json");
		$affichtxt = json_decode($lstelemt, true);
	}
	/*recupere la page automatique si page auto*/
	if(isset($_GET['aupg'])) $autopg = $_GET['aupg'];

	/* générateur de menu: appel de la fonction dans <ul> avec  <?php Genenu($activ, $liens, $rn);  */
	if ($liens["auto_menu"]) include ($chem_princ."/php/menu_deb.php");
?>	