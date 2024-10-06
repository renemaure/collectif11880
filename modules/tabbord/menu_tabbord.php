<?php
    $tb_indic = $tabbord["entrer_tb"];
    if(isset($_COOKIE["tabbord"])) $tb_indic = $tabbord["acc_tb"];
    
    if(isset($_COOKIE["tabbord"]) || !$tabbord["lien_foot"]){
        echo "<li";
        if ($activ == $tb_indic)
		{
            if ($liens["activ_li"])	echo " class=\"active\"><a";
            else echo "><a class=\"active";		
		}
    	else echo "><a";
        
        echo" href=\"".$tabbord["indic".$tb_indic]["lien_pg"]."\">".$tabbord["indic".$tb_indic]["trt_menu"]."</a></li>";
    }
?>