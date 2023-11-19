<?php 
	echo "<div class=\"boite12\">".$rn;
	include $dirlien.$liens["dirtxt"].$affichtxt["text_accueil"].$lp;	
	echo"</div>\r\n<div class=\"row\">".$rn;
	for ($i=1; $i <=$affichtxt["nbr_cart"] ; $i++) { 
		if ($i==5) echo"</div>\r\n<div class=\"row\">".$rn;
		echo "<div class=\"col\">".$rn;
		echo "<div class=\"carte\">".$rn;
		echo "<h5>".$rn;
		include $dirlien.$liens["dirtxt"].$affichtxt["svg_1"].$lp;
		echo " ".$affichtxt["trt_acc".$i]."</h5>".$rn;
		include $dirlien.$liens["dirtxt"].$affichtxt["text_cart".$i].$lp;
		echo"<footer>";
		echo"<a href=\"".$liens["indic".$affichtxt["lien_acc".$i]]["lien_pg"]."\">".$liens["txtbtn1"]."</a>".$rn;
		// echo"<a href=\"".$liens["indic".$affichtxt["lien_acc"+$i]]["lien_pg"]."\">".$liens["txtbtn1"]."</a>".$rn;
		echo"</footer>".$rn."</div>\r\n</div>".$rn;
		

	}
	echo "</div>\r\n</div>".$rn;
?> 