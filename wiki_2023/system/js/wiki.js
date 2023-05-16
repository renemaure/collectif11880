/*
moteur wiki collectif
fichier crée le 18/02/2012
version 2.0.0 au 19/03/2023

modif : supressions des lignes obsoletes le 03/03/2023
		supression des variante IE le 23/03/2023
modif du 19/03/2023 supression de la variable textareaId


*/
$(document).ready(function(){

	$('#edition').click(function() {
		$('#saisie').css('display','block');
		$('#saisie').animate({
		width:1225,
		height:570
		},
		350
		);
	})
	$('#ferme').click(function() {
		$('#saisie').css('display','none');
				$('#saisie').animate({
		width:1,
		height:1
		},
		500
		);
	})
	$('#enregistre').click(function() {
		$('#zon_erg').css('visibility','visible');
	})
});

function insertTag(startTag, endTag, tagType) {

	var field  = document.getElementById('textarea');

    var scroll = field.scrollTop;
   
    field.focus();
         
	var startSelection   = field.value.substring(0, field.selectionStart); // debut texte justqu'a position debut focus

	/*console.log(field.value.substring(0, field.selectionStart));*/

	var currentSelection = field.value.substring(field.selectionStart, field.selectionEnd); // texte en focus

	/* console.log(field.value.substring(field.selectionStart, field.selectionEnd));*/

	var endSelection     = field.value.substring(field.selectionEnd); //fin document

if (tagType) {
		switch (tagType) {
			case "lien":
					endTag = "</a>";
					var URL = prompt("nom de la nouvelle page ?") || "";
					startTag = "<a href=\"index.php?util=fichiers/donnees&cod=2&donn=" + URL + "\">";
			break;
				case "extern":
					endTag = "</a>";
					var URL = prompt("nom du lien externe?") || "";
					startTag = "<a href=\"" + URL + "\" target=\"_blank\">";
			break;
				case "anoter":
					endTag = "</span>";
					var URL = prompt("texte ?") || "";
					startTag = " <span class=\"souris sable gras\" title=\"" + URL + "\">";
			break;
				case "image":
					endTag = "";
					var URL = prompt("Nom de l'image avec son extentsion?") || "";
					startTag = " <img class=\"photo_cnt\" src=\"images/" + URL + "\"/>";
			break;
			}
		}		
	field.value = startSelection + startTag + currentSelection + endTag + endSelection;
	field.focus();
	field.setSelectionRange(startSelection.length + startTag.length, startSelection.length + startTag.length + currentSelection.length);
	field.scrollTop = scroll; // et on redéfinit le scroll.
}