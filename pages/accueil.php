<?php 
	echo "<div class=\"boite12\">$rn";
	include $dirlien.$liens["dirtxt"].$affichtxt["text_accueil"].$lp;	
	echo"</div>\r\n<div class=\"new_row\">$rn";
	for ($i=1; $i <=$affichtxt["nbr_cart"] ; $i++) { 
		echo "<div class=\"new_col\">$rn";
		echo "<div class=\"carte\">$rn";
		echo "<h5>$rn";
		include $dirlien.$liens["dirtxt"].$affichtxt["svg_1"].$lp;
		echo $affichtxt["trt_acc".$i]."</h5>$rn";
		/* nouveau imge gérée par le json modif 08/09/2024 */
		if ($affichtxt["img_card".$i] !="rien"){
			echo "<img src=\"systeme/images/".$affichtxt["img_card".$i].".png\">";
		}
		echo "<p class=\"jst ph10\">$rn";
		include $dirlien.$liens["dirtxt"].$affichtxt["text_cart".$i].$lp;
		echo"</p>$rn<p class=\"cnt pb10 coul-bord g\">$rn".$affichtxt["date_card".$i]."</p>$rn";

		echo"<footer>";
		echo"<a href=\"".$liens["indic".$affichtxt["lien_acc".$i]]["lien_pg"]."\">".$liens["txtbtn1"]."</a>".$rn;
		echo"</footer>$rn</div>\r\n</div>$rn";
	}
	echo "</div>$rn</div>$rn";
?> 