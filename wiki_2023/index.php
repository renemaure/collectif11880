<?php 
	include ("system/php/get-util.php");	
	include ("system/php/enregistre_img.php");										
?>
<!DOCTYPE html>
<html lang="fr">
<!-- Wiki de l'association collectif 11880 version 1.5 créée le 19/03/2023-->
<head>
 	<meta http-equiv="Content-Type" content="text/html charset=utf-8">
  	<title><?php echo $liens["trt_nav"] ?></title>
  	<meta name="description" content="">
  	<meta name="keywords" content="">
  	<meta name="author" content="collectif 11880">
  	<meta name="generator" content="collectif 11880">
   	<link rel="StyleSheet" type="text/css" href="system/css/master.css">  
   	<SCRIPT LANGUAGE="JavaScript" SRC="system/js/jquery-3.6.0.min.js"></SCRIPT>
 	<SCRIPT LANGUAGE="JavaScript" SRC="system/js/wiki.js"></SCRIPT> 
  	<SCRIPT LANGUAGE="JavaScript" SRC="system/js/jquery-ui.min.js"></SCRIPT>  
</head>
<body>
	<header>	
		<h1><?php echo $liens["trt_nav"] ?></h1> 
		<h3><?php echo $liens["txt_vrn"].$liens["version"]." au ".$liens["date"]?></h3> 
	</header>
	<main>	
		<?php 	include($affpg); ?>
	</main>
</body>
</html>