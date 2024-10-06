<?php
/* 
  lancement  automatique  de code en fin de page des Modules pour les sites du collectif 11880
  Date de création: 30/10/2023  
  dernière version 1.1.0 au 12/05/2024

  la version 1.1.0 comprend
    la mise en commantaire du code pour le module blog à réecrire il est obsolete
*/
function foot_mod($liens, $tabbord, $demar){
  if(!isset($_COOKIE["tabbord"])){
    if ($liens["tabbord"] && $tabbord["lien_foot"]) include($demar["dos_modul"]."/".$demar["tabbord"]."/".$tabbord["footer_tb"].$lp);
  }
}

/* if ($liens["mod_blog"]) {
    if ($pg_court == $mod_blog["fich_blog"]) {
       
        echo "<script>Defilement()</script>";
    }
    
} */
?>