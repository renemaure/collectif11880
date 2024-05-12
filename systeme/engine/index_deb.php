<?php
	/*
		Fichier de gestion pour la navigation des sites conçu ou gérer par l'association collectif 11880 créée le 18/02/2012  Ce fichier est libre d'utilisation en citant l'association: www.collectif11880.org, mais doit rester comfidentiel!.
		
		Actuellement à la version 5.5.0 au 01/05/2024.

		la version 5.5.5 comprend:
			ajout d'une supe variable à écrire!!!!!
			
			modification du fichier tabbord_deb.php à la version 2.2.0 au 01/05/2024
			et déplacer dans le fichier 'instal_module_deb' car c'est maintenant un module à par entière
			le regroupement de tous les fichiers faisant fonctionner le moteur dans un dossier nomé "ingine"; l'ajout d'un fichier "demarage" à la racine du site. 
			L'intégration du mode front-end et back-end avec la gestion des liens du menu par le javascript.
			La gestion des liens en get devient une option definie dans le fichier donnees_site.json.
			la gestion des modules principaux et optionel sont gérés par le fichier instal_module_deb.php.
			Ajout de l'extention .js pour les modules.
			Supression de toutes données en dur, elles sont définies dans le fichier json donnees_site.json
			La variable $pg_court contenant le nom de la page courante pour faire fonctionner les modules.
			l'appel pour chargement des fonctions utiles sur le site a été entièrement réecrit.
			Ajout d'une variable en get optionelle, pour lancer les fonctions javascipt: 'opti' et accessible sur le site en php avec la variable: '$varoption'

		corection et bug:	
			Remis la variable $v_tbrd qui renseige sur l'activation ou non du module tabbord.
			01/05/2024:
					en fait cette variable $v_tbrd ne sert à pas grand chose à vérifié!!
			Corection d'un bug existant depuis la version 2: la variable $pg_court renseignait le chemin et la page encours au lieu que de la page!
			Remis une condition de la version 4.20.2 pour lancer l'installation du module blog à réecrire pour la version 5 et accecible pour tous les modules.
			au 21/01/2024:
				erreur d'indexation pour la variable $varoption

		Si vous vouyez un bug ou une amélioration contactez le collectif sur infos@collectif11880.com, on sitera votre nom, merci!
	*/
	$rn = "\r\n";
	$lp = ".php";
	$lh = ".html";
	$lxt = ".txt";
	$jsn = ".json";
	$js = ".js"; 
	$v_tbrd = false; //inutile??
	$aside = false; 
	$pgmain ="";
	$vartab = "liens";
	/* $jsonsite = $demar["f_json"]; */
	$logopan = ""; //permet la gestion du module panier pas à la bonne place
	$json = file_get_contents($chem_princ."/".$demar["dirdonne"]."/".$demar["f_json"].$jsn);
	$liens = json_decode($json, true);
	/* nouvel emplacement du fichier de déclaration des modules */
	include ($chem_princ."/".$demar["direngine"]."/".$demar["fich_inst_mod"]);
	$dirlien = $liens["dirlien"]."/";
	$affpg =  $dirlien.$liens["index"].$lp; 
	$pg_court = $dirlien.$liens["index"]; 
	$activ = $liens["defactiv"]; 
	if ($liens["aside"]){
		$affasi =  $dirlien.$liens["fich_aside"].$lp; 
		$aside = true; 
	} 
	/* condition optionnelle pour l'utilisation des requetes en get */
	if($demar["liens_get"]){
		if(isset($_GET['pg'])) {
			$pgmain = $_GET['pg'];
			if(isset($_GET['mdl'])){
				$vartab = "tabbord";
				
			} 

			$affpg =  $dirlien.$$vartab["indic".$pgmain]["lrm"].$lp;
			$pg_court =  $$vartab["indic".$pgmain]["lrm"];
			if(isset($_GET['act'])) $activ = $_GET['act'];
			else  $activ = $_GET['pg']; 
			/* condition géstion des liens de type inside*/
			if (isset($_GET['sm'])) {
				$sous_menu = $_GET['sm'];
				$affpg = $dirlien.$liens["indic".$pgmain]["sous_menu"]["lrm_".$sous_menu].$lp;
				$pg_court = $liens["indic".$pgmain]["sous_menu"]["lrm_".$sous_menu];
			}
			if (isset($_GET['asi'])){
				if(isset($_GET['mdl'])) $vartab = "tabbord";
				$affasi =  $dirlien.$$vartab["indic".$_GET['pg']]["arm"].$lp;
				$aside = true; 
			} 
			/*condition pour que variable 'aupg' reference le nom d'une table en BDD le 23/09/2023*/
			if(isset($_GET['aupg'])) $autopg = $_GET['aupg'];
			if(isset($_GET['opti'])) $varoption = $_GET['opti'];
		}
	}
	include ($chem_princ."/".$demar["direngine"]."/".$demar["instl_automn"].$lp);

	/* condition index un fichier json du nom de la page courante pour l'automatisation des données de la BDD, en version test pour tabord_2024  non utiliser*/
	if (isset($liens["indic".$pgmain]["ref_png"])) {
		$nom_fich_pg_json = $liens["indic".$pgmain]["ref_png"];
		$pg_json = file_get_contents($chem_princ."/".$demar["dirdonne"]."/".$nom_fich_pg_json.$jsn);
		$don_page = json_decode($pg_json, true);
	}
?>	