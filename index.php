<?php
  $chem_princ ="systeme/";
  $chem_deb = "systeme/php/";
  $repjs = $chem_princ."donnees/collectif.json";
  include($chem_princ."php/index_deb.php");
?>

 
<!doctype html>
<html lang="fr">
	<head>
		<meta http-equiv="Content-Type" content="text/html charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="Site internet de l’association Collectif 11880 Club CMIT, qui a comme ambition de faire entrer le numérique dans l’art et gère une collection d’ordinosaures en les mettant à disposition de ses membres.">
		<meta name="publisher" content="collectif 11880" />
		<meta property="og:title" content="Association Collectif 11880">
		<meta property="og:type" content="website">
		<meta property="og:url" content="http://www.collectif11880.org/index.php">
		<meta property="og:image" content="http://www.collectif11880.org/systeme/images/titre_collectif.png">
		<meta property="og:description" content="Site internet de l’association Collectif 11880 Club CMIT, qui a comme ambition de faire entrer le numérique dans l’art et gère une collection d’ordinosaures en les mettant à disposition de ses membres.">
		<meta property="og:locale" content="fr_FR">
		<meta property="og:collectif 11880" content="Balise META">
		<title>Association Collectif 11880</title>
		<link href="systeme/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet/less" type="text/css" href="systeme/css/collectif11880.less">
		<script src="systeme/css/less.js" type="text/javascript"></script>
		</head>
	<body>
		<nav> 
			<ul>
				<?php   Genenu($activ, $liens, $rn); ?>
			</ul>
				<img  id="logo_asso" src="systeme/images/titre_collectif03.png"alt="Collectif 11880 cub CMIT, association loi 1901">
			</div>
		</nav>
		<main>
			<div id="container">
					<?php 	include($affpg); ?>
				<div class="row mb-3 mx-auto">
					<div class="fin_page">
						<hr>
				</div>
				</div>
			</div> 
		</main>	
		<footer> 
			<p>
				&copy; Association Collectif 11880 Club CMIT - 1996-2023 / Site réalisé Site par l’association / <a href="mailto:infos@collectif11880.com?subject=renseignement">infos@collectif11880.com</a> / <?php echo $liens["txt_vrn"]." ".$liens["version"]." au ". $liens["date"];?>  
			</p>
		</footer>
	</body>
</html>