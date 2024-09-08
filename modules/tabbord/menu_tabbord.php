<?php
    $tb_indic = $tabbord["entrer_tb"];
    if(isset($_COOKIE["tabbord"])) $tb_indic = $tabbord["acc_tb"];
    echo"<article> 
            <ul id=\"liens_tabbord\">
                <li>";
                    echo"<a href=\"".$tabbord["indic".$tb_indic]["lien_pg"]."\">".$tabbord["indic".$tb_indic]["trt_menu"]."</a>
                </li>
            </ul>
        </article>";
?>