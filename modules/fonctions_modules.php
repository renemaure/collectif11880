<?php
 /* 
  gestion automatique  de code css et javacript pour les Modules actifs du site 
  Date de création: 21/02/2012 par l'association collectif 11880 
  actuelement à la version 4.6.2 au 06/10/2024
  
  la version 4.6.2 comprend:
    ajouter dans la fonction "BasPage()" l'activation pour l'option gestion_prd 
    la supression des optios du module blog pour n'utiliser que la donnée "mod_blog" de $liens
    l'écriture d'une nouvelle fonction "BasPage()" pour l'affichage des liens js des diférents modules, 
    pour le moment les fichiers du module tabbord.
    La modification de la fonction instal_css() permettant le lancement des modules dans le <head>
    pour le moment, les fichiers css dans le module tabbord.
    La ré-ecriture  complete du code devenu obsolete sous forme de fonctions pour tous les modules
  */
  function instal_css($liens,$insmod,$demar){
    if ($liens["tabbord"]){
         echo "<link href=\"$demar[dos_modul]/$insmod[tabbord]/css/$insmod[secu_css].css\" rel=\"stylesheet\">\r\n\t";
         echo "<link href=\"$demar[dos_modul]/$insmod[tabbord]/css/$insmod[tabord_css].css\" rel=\"stylesheet\">\r\n";
    }
  }
  function foot_mod($liens, $insmod, $tabbord){
    $lp=".php";
     if(!isset($_COOKIE["tabbord"])){
      if ($liens["tabbord"] && $tabbord["lien_foot"]) include($insmod["dirmod"]."/".$insmod["tabbord"]."/".$tabbord["footer_tb"].$lp);
    }
  }
  function java_Mod($liens,$insmod){
    $lp = ".php"; $js = ".js"; $rn = "\r\n";
    if ($liens["mod_blog"]) include($insmod["dirmod"]."/".$insmod["blog"]."/".$insmod["inst_blog_php"].$lp);
  }
  function BasPage($demar,$liens, $insmod, $tabbord){
    if ($liens["tabbord"]) {
      echo"<script src=\"".$demar["chem"]."/".$demar["dos_js"]."/".$demar["fonction_js"].".js\"></script>\r\n";
      echo"<script src=\"".$insmod["dirmod"]."/".$insmod["tabbord"]."/".$demar["dos_js"]."/".$tabbord["tabrod_js"].".js\"></script>\r\n";
      if ($tabbord["mod_json_acc"]) {
        echo"<script>demarer()</script>\r\n";
      }
      if ($tabbord["gestion_prd"]) {
        $lp = ".php"; $rn = "\r\n";
        include($insmod["dirmod"]."/".$insmod["tabbord"]."/".$tabbord["fich_gest_prd"].$lp);
      }
    
    }
  }
?>