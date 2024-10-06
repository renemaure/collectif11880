 <?php
   /*
    Fichier d'affichage personalisé du menu du moteur V5 du collectif 11880.
    personalisé pour reperechoppe89.com
    actuelement à la version  1.7. au 29/09/2024 
    
    La version 1.7.0 comprend:
    supression de l'include fichier menu tabbord et la balise <ul> incorporer dans la fonction gemenu()
    corection d'un bug manque le div dermant de l'image  et le h1 fermant
    corection d'un bug erreur de variable pour l'installation du module panier
    réecrit entièrement avec amélioration du code et supression des anciennes version de code obsolette
    ajout d'une condition pour le lancement du module tabbord en menu unique!
    
    */
    echo "<div class=\"img-logo-nav\">$rn";
    if ($liens["typ_logo"])echo "<img src=\"$chem_princ/$liens[dirimg]/$liens[img_nav]\" alt=\"$liens[txt_alt]\"/>$rn</div>$rn";
    else echo "<h1 class=\"txt-logo-h1\">$rn $liens[trt_home]$rn</h1>$rn</div>$rn</h1>$rn";
    if ($liens["sous_trt"]) echo "<div class=\"adresse-logo-nav\">$liens[txt_sous_trt]</div>$rn;";

    Genenu($activ, $liens, $rn, $demar, $tabbord);     

    /* installe le module panier */
      if ($liens["panier"]) include($demar["dos_modul"]."/".$insmod["panier"]."/".$liens["aff_panier"].$lp);
  
    if ($liens["lien_social"]) {
      echo "<article class=\"zonne-lien-social\">".$rn; 
      if ($liens["auto_fb"])  echo "<a href=\"".$liens["lien_fb"]."\" target=\"_blank\"><i class=\"bi bi-facebook\"></i></a>".$rn;
      if ($liens["auto_insta"]) echo "<a href=\"".$liens["lien_insta"]."\" target=\"_blank\"><i class=\"bi bi-instagram\"></i></a>".$rn; 
      if ($liens["auto_youtube"]) echo "<a href=\"".$liens["lien_youtube"]."\" target=\"_blank\"><i class=\"bi bi-youtube\"></i></a>".$rn; 
      echo "</article>".$rn; 
    }  
?>