<?php
 /* 
  gestion automatique  du code javacript pour les Modules actifs sur le site  Date de création: 21/02/2012  
  actuelement à la version 3.0.5 au 1/11/2023
  version 3 comprend:
        transformation du code pour tous les modules
        ajout des variables json pour le sous module defil blog
        ajout d'une variable pour le chmin générique du blog
       
    corections au 1/11/2023
        mise en forme des code en visuel sur le html
        corection d'un bug manquait le .js sur le fichier blog
  */
    /* condition pour lancer l'intallation du module blog   */
    echo $rn;
    $ling_jouvr_js = "\t<script type=\"text/javascript\">";
if ($liens["mod_blog"]) {
    $doss_ssdos= $demar["dos_modul"]."blog/";
    echo $ling_jouvr_js.$rn;
    if ($mod_blog["slide_blog"]){ 
        echo "\t\tvar urla = \"".$doss_ssdos.$mod_blog["url_serv"]."\";".$rn; /* chemin et nom du fichier appeler par l'ajax*/
        echo "\t\tvar inter = ".$mod_blog["tmp_blog"].";".$rn; /* temps en milisecnde entre chaque appel*/
        echo "\t\tvar elemid = \"".$mod_blog["id_blog"]."\";".$rn; /* nom de l'id du div ou s'affiche le blog */
        if($fich_blog == $mod_blog["fich_blog"])  echo "blog();".$rn;/* lancement de la fonction uniquement sur la page */
    }
    /* variable json pas encore crées */
    if ($mod_blog["defil_blog"]){ 
       echo"\t\tvar debuttop =".$mod_blog["debut_top"].";".$rn; //position de début du top de ID
       echo"\t\tvar tempo = ".$mod_blog["tempo"].";".$rn; //temps de la boucle settimeout
       echo"\t\tvar fintop = ".$mod_blog["fin_top"].";".$rn; // position mini du top de ID
       echo "\t\tvar pasdefil =".$mod_blog["pas_defil"].";".$rn;  //pas de decopmte dela valeur de top du ID
    }
    echo "\t</SCRIPT>".$rn;
    echo "\t<script src=\"".$doss_ssdos.$mod_blog["fich_js"].$js."\"></script>";
}
/* déclaration des variable pour le module Tooltip */
if ($liens["mod_tooltip"]) {
    echo $ling_jouvr_js.$rn;
    echo"\t\tconst chm_json_tooltip = \"".$demar["dos_modul"]."tooltip/".$mod_tooltip["lexique_tooltip"].".json\";".$rn;
    echo"\t\tconst iconcroix_tooltip = \"".$demar["dos_modul"]."tooltip/icon/book.svg\";".$rn;
    echo"\t\tconst class_tooltip = \"tooltip\";".$rn;
    echo "\t</SCRIPT>".$rn;
    echo "\t<script src=\"".$demar["dos_modul"]."/tooltip/".$mod_tooltip["fich_js"].$js."\"></script>";
}
echo$rn;
?>