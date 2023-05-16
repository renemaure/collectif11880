/*
fichier crée le on sait pas
version 1.1.0
modifier le 26/02/2023

*/
$(document).ready(function(){
	$('#edition').click(function() {
		$('#saisie').css('visibility','visible');
		$('#saisie').animate({
		width:1225,
		height:570
		},
		350
		);
	})
	$('#ferme').click(function() {
		$('#saisie').css('visibility','hidden');
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

/*function br(){
	document.saisie.text.focus();
	text_act = document.saisie.text.value;
	document.saisie.text.value = text_act + "<br>";
}

function ouvp(){

document.saisie.text.focus();

text_act = document.saisie.text.value;

document.saisie.text.value = text_act + "<p class =\'f12 justifier\'>";
}

function fermp(){

document.saisie.text.focus();

text_act = document.saisie.text.value;

document.saisie.text.value = text_act + "</p>";

document.saisie.text.focus();
}

function voir(code){

	var x = document.getElementById(code);
	
	x.style.visibility="visible";
}	

function fermer(code){

	var x = document.getElementById(code);
	
	x.style.visibility="hidden";
}	*/

/*onclick="insertTag('<balise>','</balise>','textarea');"*/

function insertTag(startTag, endTag, textareaId, tagType) {
    var field  = document.getElementById(textareaId);
    var scroll = field.scrollTop;
    field.focus();
         
	if (window.ActiveXObject) {
		var textRange = document.selection.createRange();            
		var currentSelection = textRange.text;
	} else {
		var startSelection   = field.value.substring(0, field.selectionStart);
		var currentSelection = field.value.substring(field.selectionStart, field.selectionEnd);
		var endSelection     = field.value.substring(field.selectionEnd);
	}

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

if (window.ActiveXObject) {
		textRange.text = startTag + currentSelection + endTag;
		textRange.moveStart('character', -endTag.length-currentSelection.length);
		textRange.moveEnd('character', -endTag.length);
		textRange.select();  
	} else { // Ce n'est pas IE
		field.value = startSelection + startTag + currentSelection + endTag + endSelection;
		field.focus();
		field.setSelectionRange(startSelection.length + startTag.length, startSelection.length + startTag.length + currentSelection.length);
	}  				
					  
     field.scrollTop = scroll; // et on redéfinit le scroll.
}