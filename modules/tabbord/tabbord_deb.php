<?php
	/*
	fichier tabbord_deb.php  module TabBord gére l'acces serurisé au tableau de bord d'un site avec mot de passe code en MD5 
	pour l'association collectif 11880
	ne peut fonctionner sans son moteur "index_deb.php"
	
	actuellement à la version version 2.2.2 au 06/10/2024
	modification à la version 2.2.2
		- ajout d'une condition pour charger un json pour l'option modif accueil en version test sur collectif.org
		- supression du retour location vers la page en dur, ajout d'une donnée json acc_tb
		- Réecriture complete du code pour le passage en module à part entière et en mode direct!
		- Le menu du tab-Bord s'affiche directement dans le header du site.
		- ajouter une variable get['quit'], par Fateh pour le retour à la page principale en sortant du tabord
		- modification par Fateh, de la durée du cookie elle provient soit de la BDD et elle est modifiable par l'utilisateur, soit du fichier json
	*/
	$json_tb = file_get_contents($demar["dos_modul"]."/".$insmod["tabbord"]."/".$insmod["tbbord_json"].$jsn);
	$tabbord = json_decode($json_tb, true);

	 /* nouvelle appel pour option fichier json accueil en version test pour le collectif 2/10/2024 */
	 if (isset($tabbord["mod_json_acc"]) && $tabbord["mod_json_acc"]) {
        $json = file_get_contents("$demar[chem]/$demar[dirdonne]/$tabbord[fich_don_acc]$jsn");
        $don_accueil = json_decode($json, true);
    }

	if ($demar["bdd_site"]) $tempo_cle = ($misjoursite["duree_cookie"]); 
	else  $tempo_cle = $tabbord["tmpo_cookie"];
	if (isset($_POST['acces']) && md5($_POST['acces']) == $tabbord["pas_bord"]){
		setcookie("tabbord", "ok", time()+ ($tempo_cle*3600),"/"); 
		header("Location: ".$tabbord["indic".$tabbord["acc_tb"]]["lien_pg"]); 
	}
	if(isset($_COOKIE["tabbord"])){
		if(isset($_GET['quit']) && $_GET['quit'] == 1){ 
			setcookie("tabbord", "", time()-3600,"/");
			header("Location: index.php?pg=1");
		}
	}
?>