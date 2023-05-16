	<input type="button" value="Mode édition" id="edition">
 			<?php
 				include("fichiers/menu_accueil.html"); 
 				if ($menu_2) 
 					{
 						include("fichiers/".$menu_2.".html");
 					}
			?>
		<input type="button" value="upload image" id="enregistre">
			<div id ="zone_text">
				<?php if (file_exists("donnees/".$donne.".txt")) include("donnees/".$donne.".txt"); ?>
			</div>
			<form action="php/trait-text.php" method="post" name="saisie" id="saisie" >
				<!-- <textarea name="text" id="textarea" >
					<?php if(file_exists("donnees/".$donne.".txt")) include("donnees/".$donne.".txt"); ?>
				</textarea>  -->
				
				<div id="textarea" name="text" contentEditable >
					<?php if(file_exists("donnees/".$donne.".txt")) include("donnees/".$donne.".txt"); ?>
				</div> 

				<input type="hidden" name="retour" value="<?php echo($donne); ?>">
				<input type="hidden" name="menu" value="<?php echo($menu_2); ?>">
    			<div id="zonbout">
    				<?php include("fichiers/boutons_edition.html"); ?>
    			</div>
			</form>

			<div id="zon_erg">
					<form id="don_img" action="index.php" method="POST" enctype="multipart/form-data">
      			        <input type="file" name="file">
        				<button type="submit">Enregistrer</button>
					</form>
			</div>