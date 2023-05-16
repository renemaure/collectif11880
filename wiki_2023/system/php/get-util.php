<?php 
/* Date de création: 18/02/2012 version 1.1.8

	fichier permet de generer les extensions

	rajout d'une nouvelle valeur de '$code' '3' pour l'extention '.txt'

	modification au 22/02/2023
		rajout d'une condition sur la variable "$menu_2"
		mofification du nom de la variable en "$menu_2" plus comprehensible

	modif du 26/02/2012 deusieme varaible '$central' même fonctionnement que $lancer

*/ 	

	$chem_princ ="system/";
 	$repjs = $chem_princ."json/wiki.json";

	$json = file_get_contents($repjs);
	$liens = json_decode($json, true);
	$menu_2 = false;
	
	if ($liens["menu_2"]){ $menu_2 = $liens["menu_2"]; }

	$code = 0; 
	$book= 0;  
	$valid = 0;	
	$lang="fr";
	$envoi = "Location: index.php";	
	$affpg = "fichiers/entree_serveur.php";
	$donne = "accueil";

	if(isset($_COOKIE["wiki"])){
		$affpg = "fichiers/wiki.php";
	}
 
	if (isset($_POST['acces'])) // Si la variable existe
	{	
		if (md5($_POST['acces']) == $liens["acces_cd01"] or md5($_POST['acces']) == $liens["acces_cd02"]  or md5($_POST['acces']) == $liens["acces_cd03"] or md5($_POST['acces']) == $liens["acces_cd04"])
		{
			setcookie("wiki", "ok", time()+3600,"/"); 
			$affpg = "fichiers/wiki.php";
		}
			
	} 			
		if (isset($_GET['donn'])) $donne = $_GET['donn'];  
		if (isset($_GET['men'])) $menu_2 = $_GET['men']; 
?>