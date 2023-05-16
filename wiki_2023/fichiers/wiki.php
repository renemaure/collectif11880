		<table class="menu_acc">
			<tr>
				<!-- <td><input type="button" value="Mode édition" id="edition"></td> -->
				<td><a href="index.php?donn=accueil">Accueil Wiki</td>
				<td><a href="index.php?donn=velocouch&men=menu_velo">Vélo couché</a></td> 
				<td><a href="index.php?donn=applicarto">Appli cartographie</a></td> 
				<td><a href="index.php?donn=electro">Electronique</a></td>
				<td><a href="index.php?donn=program">Programmation</a></td>
				<td><a href="index.php?donn=contemporain">Art contemporain</a></td>
				<td><a href="index.php?donn=assosn&men=menu_assos">Association</a></td>
				<td><input type="button" value="upload image" id="enregistre"></td>
			</tr>
		</table>	
 		<?php if ($menu_2) include("fichiers/".$menu_2.".html"); ?>
		<div id ="affich_txt" contentEditable>
				<?php if (file_exists("donnees/".$donne.".txt")) include("donnees/".$donne.".txt"); ?>
		</div>
		<form action="php/trait-text.php" method="post" name="saisie" id="saisie" >
				<!-- <textarea name="text" id="textarea" >
					<?php /*if(file_exists("donnees/".$donne.".txt")) include("donnees/".$donne.".txt");*/ ?>
				</textarea>  -->
				
			<input type="hidden" name="retour" value="<?php echo($donne); ?>">
			<input type="hidden" name="menu" value="<?php echo($menu_2); ?>">
    		<section id="zonbout">
    			<article class="lign_bout">
					<input type="button" value="retour ligne" onclick ="insertTag('<br>','');">
					<input type="button" value="paragraphe" onclick ="insertTag('<p class =\'f12 jst\'>','</p>');">
					<input type="button" value="paragraphe centrer" onclick ="insertTag('<p class=\'f12 cnt\'>','</p>');">
  					<input type="button" value="paragraphe en retrait" onclick ="insertTag('<p class =\'f12 jst rel40\'>','</p>');">
					<input type="button" value="titre" onclick ="insertTag('<p class=\'nouvtitre\'>','</p>');">
					<input type="button" value="gras" onclick ="insertTag('<span class =\'g\'>','</span>');">
					<input type="button" value="italique" onclick ="insertTag('<span class=\'i\'>','</span>');">
					<input type="button" value="souligné" onclick ="insertTag('<u>','</u>');">
					<input type="button" value="barré" onclick ="insertTag('<strike>','</strike>');">
					<input type="button" value="code machine" onclick ="insertTag('<div class=\'code\'><code><xmp>','</xmp></code></div>');">	
				</article>
				<article class="lign_bout">
					<input type="button" value="texte en indice" onclick ="insertTag('<sup>','</sup>');">
					<input type="button" value="modif rouge" onclick ="insertTag('<span class=\'rouge\'>','</span>');">
					<input type="button" value="modif vert" onclick ="insertTag('<span class=\'vert\'>','</span>');">
					<input type="button" value="modif bleu" onclick ="insertTag('<span class=\'bleu\'>','</span>');">
					<input type="button" value="Lien nouv page" onclick="insertTag('', '', 'lien')" />
					<input type="button" value="Lien page web" onclick="insertTag('', '', 'extern')" />
					<input type="button" value="inserer image" onclick="insertTag('', '', 'image')" />
				</article>
				<div class="lign_bout lign_valid">
					<input type="submit" value="valider">
					<!-- <input type="button" value="fermer" id="ferme"> -->
				</div>
			</section>
		</form>

		<div id="zon_erg">
			<form id="don_img" action="index.php" method="POST" enctype="multipart/form-data">
      			    <input type="file" name="file">
        			<button type="submit">Enregistrer</button>
			</form>
		</div>