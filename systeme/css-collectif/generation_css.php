<?php /* Date de création: 09/11/2013 */

$fd = fopen("position-vertical.css", "w");	 /* ouvre le fichier  list_plyalist.txt */

for($total=-0; $total<=1000; $total= $total+1) 
{
$texte = ".v".$total ."{position:relative; top:".$total."px;}\r\n";
 
fputs($fd,$texte);	
}

fclose($fd);
 ?>

