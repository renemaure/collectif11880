<?php
/* 
  lancement  automatique  de code javacript pour les Module pour les sites du collectif 11880
  Date de création: 30/10/2023  
  actuelement à la version 1.0.0 au 30/10/2023
*/

if ($liens["mod_blog"]) {
    if ($pg_court == $mod_blog["fich_blog"]) {
       
        echo "<script>Defilement()</script>";
    }
    
}
?>