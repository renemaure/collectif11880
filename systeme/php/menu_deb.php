<?php
/*
	fichier d'affichage du menu pour les sites conçu ou gérer par l'association collectif 11880.
	version 1.0.7 au 28 juillet 2021.
	fichier personalisé pour chaque site.
	fichier libre d'utilisation en sitant l'association collectif11880.org.
*/
function Genenu($activ, $liens, $rn)
	{
		$activli ="";
		$activa = "";
		for ($menu=1; $menu <=$liens["nbr_menu"]; $menu++)
    	{ 
    		if ($liens["activ_li"]=="true") {
			$activli = $activ[$menu];
			}
			else{
				$activa = $activ[$menu];
			}
        echo "<li class=\"".$liens["css_li_menu"]." ".$activli."\">".$rn;
        echo "<a class=\"".$liens["css_a_menu"]." ".$activa."\" href=\"".$liens["lien_pg".$menu]."\">".$liens["trt_menu".$menu]."</a>".$rn;
        echo "</li>".$rn;
    	}
	}
?>
