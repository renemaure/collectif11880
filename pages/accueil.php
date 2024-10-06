<?php 
	


	echo "<div class=\"boite12\">$rn";
	include $dirlien.$liens["dirtxt"].$don_accueil["text_accueil"].$lp;	
	echo"</div>\r\n<div class=\"new_row\">$rn";
	
	/* debut construction dee carte */
	for ($i=1; $i <= $don_accueil["nbr_cart"] ; $i++) { 
		echo "<div class=\"new_col\">$rn";
		echo "<div class=\"carte\">$rn";
		echo "<h5>$rn $don_accueil[svg_1]".$don_accueil["trt_acc".$i]."</h5>$rn";

		if ($don_accueil["img_card".$i] !=""){
			echo "<img src=\"systeme/images/".$don_accueil["img_card".$i].".png\">";
		}
		echo "<p class=\"jst ph10\">$rn".$don_accueil["text_cart".$i]."</p>$rn";
		if ($don_accueil["date_card".$i]!="") {
			echo"<p class=\"cnt pb10 coul-bord g\">$rn".$don_accueil["debut_dat"].$don_accueil["date_card".$i].$don_accueil["fin_dat"].$don_accueil["heure".$i].".</p>$rn";
		}
		

		echo"<footer class =\"\">";
		echo"<a href=\"".$liens["indic".$don_accueil["lien_acc".$i]]["lien_pg"]."\">".$don_accueil["txtbtn1"]."</a>".$rn;
		echo"</footer>$rn</div>\r\n</div>$rn";
	}
	echo "</div>$rn</div>$rn";
?> 