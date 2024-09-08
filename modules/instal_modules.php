<?php
 /* 
  gestion automatique  de code css et javacript pour les Modules actifs du site 
  Date de création: 21/02/2012 par l'association collectif 11880 
  actuelement à la version 4.0.0 au 12/05/2024
  La version 4.0.0 comprend:
        La réecriture  complete du code devenu obsolete
        la création de deux fonctions pour le lancemet dans le <head>
        transformation du code pour tous les modules
        supression de:
        L'ajout des variables json pour le sous module defil blog
        L'ajout d'une variable pour le chmin générique du blog
       
    corections au 1/11/2023
        mise en forme des code en visuel sur le html
        corection d'un bug manquait le .js sur le fichier blog
  */
  function instal_css($liens,$insmod){
    if ($liens["tabbord"]){
         echo "<link href=\"$insmod[dirmod]/$insmod[tabbord]/css/$insmod[secu_css].css\" rel=\"stylesheet\">\r\n";
    }
       
  }


 
?>