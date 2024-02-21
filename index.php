<?php
  $json = file_get_contents("donnees_site.json");
  $demar = json_decode($json, true);
  $chem_princ =$demar["chem"]; 
  $jsonsite = $demar["f_json"]; 
  $chem_deb = "systeme/php/";
  include($chem_deb."/index_deb.php");
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
		<meta property="og:description" content="Le site internet de l’association Collectif 11880 Club CMIT, qui a comme ambition de faire entrer le numérique dans l’art et gère une collection d’ordinosaures en les mettant à disposition de ses membres.">
		<meta property="og:locale" content="fr_FR">
		<meta property="og:collectif 11880" content="Balise META">
		<title>Association Collectif 11880</title>
		<link href="systeme/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet/less" type="text/css" href="systeme/css/collectif11880.less">
		<script src="systeme/css/less.js" type="text/javascript"></script>
		<link href="systeme/css/collectif11880.css" rel="stylesheet">
		</head>
	<body>
		<nav> 
			<ul>
				<?php   Genenu($activ, $liens, $rn); ?>
			</ul>
				<img  id="logo_asso" src="systeme/images/titre_collectif03.png"alt="Collectif 11880 cub CMIT, association loi 1901">
				<article id="zon_conect"></article>
		</nav>
		<main id="main_central">
			<?php
				if ($aside) {
					echo"<div class=\"col-8\">$rn";
					include $affpg;
					echo"</div>$rn";
					echo"<aside class=\"col-4\">$rn";
					echo"<div class=\"boite12\">$rn";
					include $dirlien.$liens["dirtxt"]."mot_president".$lp;
					echo"</div>$rn";
					include $affasi;
					echo"</aside>$rn";
				}
				else include $affpg;
			?>
			<div class="fin_page"><hr></div>
		</main>	
		<footer> 
			<p>
				&copy; Association Collectif 11880 Club CMIT - 1996-2023 / Site réalisé Site par l’association / <a href="mailto:infos@collectif11880.com?subject=renseignement">infos@collectif11880.org</a> / <?php echo $liens["txt_vrn"]." ".$demar["version"]." au ". $demar["date"];?>  
			</p>
		</footer>
	</body>
</html>