 <?php
   /*
     Module d'affichage personalisé du menu du moteur du collectif 11880.
    actuelement à la version  1.5.6 au 02/05/2024 
    version 1.5.6:
    au 02/05/2024 corection d'un bug erreur de variable pour l'installation du module panier
    réecrit entièrement avec amélioration du code et supression des anciennes version de code obsolette
    ajout d'une condition pour le lancement du module tabbord en menu unique!
    
    */
           echo "<div id=\"logo-nav\">$rn";
          if ($liens["typ_logo"])echo "<img src=\"$chem_princ/$liens[dirimg]/$liens[img_nav]\" alt=\"$liens[txt_alt]\"/>$rn";
          else echo "<h1 id=\"logo\">$rn $liens[trt_home]$rn</h1>$rn";
         echo "</div>$rn";
         if ($liens["sous_trt"]) echo "<div id=\"titre-adresse\">$liens[txt_sous_trt]</div>$rn;";
         echo "<ul id=\"menu\">".$rn;
          /* lance la fonction gérération du menu */
         Genenu($activ, $liens, $rn, $demar);     
         echo "</ul>".$rn;
         /* installe le module tabbord */
         if(isset($_COOKIE["tabbord"])) include($demar["dos_modul"]."/".$demar["tabbord"]."/".$tabbord["menu_tb"].$lp);
         /* installe le module panier */
         if ($liens["panier"]) include($demar["dos_modul"]."/".$demar["panier"]."/".$liens["aff_panier"].$lp);
     
        if ($liens["lien_social"]) {
        echo "<article id=\"zon_conect\">".$rn; 
        if ($liens["auto_fb"]) {
            echo "<a href=\"".$liens["lien_fb"]."\" target=\"_blank\"><i class=\"bi bi-facebook\"></i></a>".$rn;
        }
        if ($liens["auto_insta"]) {
            echo "<a href=\"".$liens["lien_insta"]."\" target=\"_blank\"><i class=\"bi bi-instagram\"></i></a>".$rn; 
        }
         if ($liens["auto_youtube"]) {
            echo "<a href=\"".$liens["lien_youtube"]."\" target=\"_blank\"><i class=\"bi bi-youtube\"></i></a>".$rn; 
        }
    echo "</article>".$rn; 
  }  
?>