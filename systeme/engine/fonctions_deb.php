<?php
/*
	fichier commun pour les fonctions php uitles pour le moteur du collectif, 
	conçu ou gérer par l'association collectif 11880 / (Ancien fichier d'affichage du menu)	
	
	actuellement à la version 2.1.0 au 29/09/2024.
	
	La version 2.1.0 comprant:
	réecriture des conditons en suprimant la donnée "css_li_menu" devenue obsolete
	Ajout d'une condition "liens_get" permettant la naviqation avec javascript
	identifie chaque lien par un id définit dans le fichier json du site.
	Ajout d'un module "menu_aside" avec une nouvelle fonction menu_aside(), 
	permettant l'affichage d'un ou plusieurs menus dans la <main> de la page courante. 
	Module développé par Pascal et Jean-Marie pour le site www.orguesauxerre.net

	Fichier libre d'utilisation en citant l'association collectif11880.org.
*/

function Genenu($activ, $liens, $rn, $demar,$tabbord)
{
	$activli = true;
	echo "<ul class=\"menu\">".$rn;
	for ($menu=1; $menu <=$liens["nbr_menu"]; $menu++)
    { 
   		if ($liens["indic".$menu]["valid"])
   		{ 
	  	 	echo "<li";	
			if ($activ==$menu)
			{
    			if ($liens["activ_li"])	echo " class=\"active\"><a";
				else echo "><a class=\"active";		
			}
    		else echo "><a";

    		/* ajout d'une condition si navigation javascript */
			if ($demar["liens_get"]== false) echo "id=\"".$liens["indic".$menu]["id"]."\"";
	
    	echo " href=\"index.php".$liens["indic".$menu]["lien_pg"]."\">".$liens["indic".$menu]["trt_menu"]."</a></li>".$rn;
   		} 
	}
	if($liens["tabbord"]) {
		$tb_indic = $tabbord["entrer_tb"];
		if(isset($_COOKIE["tabbord"])) $tb_indic = $tabbord["acc_tb"];
		
		if(isset($_COOKIE["tabbord"]) || !$tabbord["lien_foot"]){
			echo "<li";
			if ($activ == $tb_indic)
			{
				if ($liens["activ_li"])	echo " class=\"active\"><a";
				else echo "><a class=\"active";		
			}
			else echo "><a";
			
			echo" href=\"index.php".$tabbord["indic".$tb_indic]["lien_pg"]."\">".$tabbord["indic".$tb_indic]["trt_menu"]."</a></li>";
		}
	}
	echo "$rn</ul>$rn";
}

function menu_aside($liens,$indc_ssmenu){
	$tab="\t\t\t\t";
	$rn="\r\n";
	for ($menasd=$liens["indssmenu_".$indc_ssmenu]; $menasd <=$liens["indssmenu_".$indc_ssmenu]+ $liens["nbr_ssmenu_".$indc_ssmenu] ; $menasd++) { 
		echo"\t<li class=\"indic".$menasd;
		if ($liens["indic".$menasd]["fn_tit_menu"]) {
		echo " trt_accueil\">".$liens["indic".$menasd]["trt_menu"];
		}
		else {
			echo"\">".$rn;
			echo $tab."<a href=\"".$liens["indic".$menasd]["lien_pg"]."\">".$liens["indic".$menasd]["trt_menu"]."</a>".$rn;
			if ($liens["indic".$menasd]["nbr_lien_ssm"]!=0) {
				echo $tab."<ul class=\"sous_menu_cath\">".$rn;
				for ($ssm=1; $ssm <=$liens["indic".$menasd]["nbr_lien_ssm"] ; $ssm++) { 
					echo $tab."\t<li><a href=\"".$liens["indic".$menasd]["sous_menu"]["href_".$ssm]."\">".$liens["indic".$menasd]["sous_menu"]["txt_lien_".$ssm]."</a>";
					echo "</li>".$rn;
				}
				echo $tab."</ul>".$rn;
			}
		}
		echo "\t\t\t</li>".$rn;
	}
}
?>	