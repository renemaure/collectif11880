<?php
/*
	fichier commun pour les fonctions php uitles pour le moteur du collectif, 
	conçu ou gérer par l'association collectif 11880 / (Ancien fichier d'affichage du menu)	
	
		actuellement à la version 2.0.0 au 03/12/2023.
	
	Nouvelle version 2.0.0:
	Ajout d'une condition avec variable json "liens_get" permettant la naviqation avec javascript
	identifie chaque lien par un id définit dans le fichier json du site.
	Ajout d'un module "menu_aside" avec une nouvelle fonction menu_aside(), permettant l'affichage d'un ou plusieurs menus dans la <main> de la page courante. 
	Module développé par Pascal et Jean-Marie pour le site www.orguesauxerre.net

	Fichier libre d'utilisation en citant l'association collectif11880.org.
*/

function Genenu($activ, $liens, $rn, $demar)
{
	$activli = true;
	for ($menu=1; $menu <=$liens["nbr_menu"]; $menu++)
    { 
   		if ($liens["indic".$menu]["valid"])
   		{ 
	  	 	echo "<li";	
			if ($activ==$menu)
			{
    			if ($liens["activ_li"])	echo " class=\"active\"><a";
				else echo "><a class=\"active";		
			
				if ($liens["css_a_menu"]!="")
				{
					echo" ".$liens["css_a_menu"]."\" ";
				}
				else
				{
					if ($liens["activ_li"]== false)
					{
						echo"\" ";
					}
				}
			}
    		else{
    			echo "><a";
    			if ($liens["css_a_menu"]!="")
    			{
    				echo " class=\"".$liens["css_a_menu"]."\"";
    			}
    		}
			/* ajout d'une condition si navigation javascript */
			if ($demar["liens_get"]== false) {
				echo "id=\"".$liens["indic".$menu]["id"]."\"";
			}
    	echo " href=\"".$liens["indic".$menu]["lien_pg"]."\">".$liens["indic".$menu]["trt_menu"]."</a>".$rn;
       	echo "</li>".$rn;
   		} 
	}
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