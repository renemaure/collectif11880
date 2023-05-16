//////////////////////////////////////////////////////////////////////////////////////////
//script réalisé par Andrei Savin (Glork)                                               //
//////////////////////////////////////////////////////////////////////////////////////////

var icon_list = new Array();
icon_list[0] = new Array("bold", "bold", "Bold");
icon_list[1] = new Array("underline", "underline", "Underline");
icon_list[2] = new Array("italic",  "italic", "Italic");
icon_list[3] = new Array("bar",  "bar", "bar");
icon_list[4] = new Array("JustifyLeft", "left", "Left Align");
icon_list[5] = new Array("JustifyCenter", "center", "Center");
icon_list[6] = new Array("JustifyRight", "right", "Right Align");
icon_list[7] = new Array("bar",  "bar", "bar");
icon_list[8] = new Array("insertorderedlist", "orderlist", "Ordered List");
icon_list[9] = new Array("insertunorderedlist", "turnorderlist", "Bulleted List");
icon_list[10] = new Array("bar",  "bar", "bar");
icon_list[11] = new Array("forecolor", "charcolor", "Character Color");
icon_list[12] = new Array("backcolor", "backgroundcolor", "Highlighted Color");
icon_list[13] = new Array("bar",  "bar", "bar");
icon_list[14] = new Array("createlink", "link", "Add Link");
icon_list[15] = new Array("insertimage", "image", "Add Image");
icon_list[16] = new Array("inserthorizontalrule", "rule", "Rule");
icon_list[17] = new Array("bar",  "bar", "bar");

var font_list = new Array();
font_list[0] = new Array("Arial", "Arial");
font_list[1] = new Array("Courier", "Courier");
font_list[2] = new Array("Sans Serif",  "Sans Serif");
font_list[3] = new Array("Tahoma", "Tahoma");
font_list[4] = new Array("Verdana", "Verdana");
font_list[5] = new Array("Wingdings", "Wingdings");

var fontsize_list = new Array();
fontsize_list[0] = new Array("1", "Tres petit");
fontsize_list[1] = new Array("2", "Petit");
fontsize_list[2] = new Array("3", "Moyen");
fontsize_list[3] = new Array("4", "Gros");
fontsize_list[4] = new Array("5", "Tres gros");
fontsize_list[5] = new Array("6", "Enorme");


var handing_list = new Array();
handing_list[0] = new Array("Heading 1", "H1");
handing_list[1] = new Array("Heading 2", "H2");
handing_list[2] = new Array("Heading 3", "H3");
handing_list[3] = new Array("Heading 4", "H4");
handing_list[4] = new Array("Heading 5", "H5");
handing_list[5] = new Array("Heading 6", "H6");

var select_font_op = "";


document.write("<style type=\"text/css\">.link_editor {	font-family: Arial, Helvetica, sans-serif;	font-size: 9px;color: #666666;	text-decoration: underline;}</style>");


var nav_app = "";

if (document.all)
	nav_app = "IE";
else
	nav_app = "AUTRES";


function popup(url, titre, largeur, hauteur, scrollbar) 
{
  	window.open(url, titre, 'width=' + largeur + ', height=' + hauteur + ', scrollbars=' + scrollbar);
} 

function see_source(zone_origine, zone_depart, liensee_wysiwyg){
	document.getElementById(zone_origine).style.display='none';
	document.getElementById(zone_depart).style.display='block';
	document.getElementById(liensee_wysiwyg).style.display='block';
}

function see_wysiwyg(zone_origine, zone_depart, liensee_wysiwyg){
	
	document.getElementById(zone_origine).style.display='block';
	document.getElementById(zone_depart).style.display='none';
	document.getElementById(liensee_wysiwyg).style.display='none';
}

function add_foot_tool(commande, iframe_val, val_tab){
	//alert ("select"+commande);
	var select_tag = "<select style=\"font-family: Arial, Helvetica, sans-serif;	font-size: 10px;\" id=\"select"+commande+"\" name=\"select"+commande+"\" onChange=\"commande_html('"+commande+"', '"+iframe_val+"', this.options[this.selectedIndex].value)\">";
	
	if (val_tab == "font_list"){
	
		if (font_list.length>0){
			select_tag += "<option value=\"\">-- Police --</option>";
			for (i=0;i<font_list.length;i++){ 	
				select_tag += "<option value=\""+font_list[i][0]+"\">"+font_list[i][1]+"</option>";
			}
			select_tag += "</select>";
		}
	}
	
	if (val_tab == "fontsize_list"){
	
		if (fontsize_list.length>0){
			select_tag += "<option value=\"\">-- Taille du texte --</option>";
			for (i=0;i<fontsize_list.length;i++){ 	
				select_tag += "<option value=\""+fontsize_list[i][0]+"\">"+fontsize_list[i][1]+"</option>";
			}
			select_tag += "</select>";
		}
	}
	
	if (val_tab == "handing_list"){
	
		if (handing_list.length>0){
			select_tag += "<option value=\"\">-- Handing --</option>";
			for (i=0;i<handing_list.length;i++){ 	
				select_tag += "<option value=\""+handing_list[i][0]+"\">"+handing_list[i][1]+"</option>";
			}
			select_tag += "</select>";
		}
		
	}
	
	return (select_tag);	
}


function commande_html(commande, zone_html, option){

	if (document.getElementById(zone_html).contentDocument){
		
		zone_editable = document.getElementById(zone_html).contentWindow.document;

	} else {
		zone_editable = document.frames[zone_html].document;
		
	}

	zone_editable.execCommand(commande,false,option);
	

	if (commande == 'formatblock'){		
		//var select_font_op = document.getElementById("selectfontsize").options[document.getElementById("selectfontsize").selectedIndex].value);
		window.frames[zone_html].document.execCommand('fontname',"",select_font_op);
		
	}
	if (commande == 'fontname'){
		//alert(option);
		select_font_op = option;
	}

	window.frames[zone_html].focus();
}


function Reset(zone) { 

	var txt_zone_tags;
	
	if (zone == 'all'){
		txt_zone_tags = document.getElementsByTagName("textarea");
		for (var i = 0; i < txt_zone_tags.length ; i++)  {
			makeFrame(txt_zone_tags[i].id);
		}
	}
	else{
		makeFrame(zone);
	}	
	
}

function copy2(zone1, zone2) {
	var iframe_area = zone1;
	var txt_area = zone2; 
	document.getElementById(txt_area).value = window.frames[iframe_area].document.body.innerHTML;


}


function copy(zone1, zone2) {
	var txt_area = zone1; 
	var iframe_area = zone2;
	window.frames[iframe_area].document.body.innerHTML=document.getElementById(txt_area).value;
}

function makeFrame(txt_zone) {
	
	var parent=document.getElementById(txt_zone).parentNode;
	var icons_tab = "";
	
	var iframe_name = txt_zone + "_iframe";
	var div_name = txt_zone + "_div";
	var div_name2 = txt_zone + "_div_contener";
	var div_wysiwyg_name = txt_zone + "div_wysiwyg";
	
	//crée la zone tools
	tab_tool = document.createElement("TABLE");
	
	tab_tool.setAttribute("border", "0");
	tab_tool.setAttribute("cellpadding", "2");
	tab_tool.setAttribute("cellspacing", "2");
	
	tab_toolbody = document.createElement("TBODY");
	
	mycurrent_row=document.createElement("TR");

	
		//boucle des boutons...
		for (i=0;i<icon_list.length;i++)
		{ 	
			mycurrent_cell=document.createElement("TD");
			
			icons_tab =  "imgs/"+icon_list[i][1]+".gif";
			
			les_liens=document.createElement("A");
			
			if (icon_list[i][0]=="forecolor" || icon_list[i][0]=="backcolor"){
				les_liens.setAttribute("href","javascript: void(popup('addon/palette.html?zone_iframe="+iframe_name+"&commande="+icon_list[i][0]+"', 'palette', '200px', '148px', 'no'));");
			} else if (icon_list[i][0] == "createlink" || icon_list[i][0] == "insertimage"){
				les_liens.setAttribute("href","javascript: void(popup('addon/address.html?zone_iframe="+iframe_name+"&commande="+icon_list[i][0]+"', 'palette', '250px', '74px', 'no'));");
			}
			else if (icon_list[i][0] == "bar"){
				les_liens.setAttribute("href","#");
			}
			else{
				les_liens.setAttribute("href","javascript: void(commande_html('"+icon_list[i][0]+"','"+iframe_name+"','false'));void(copy2('"+iframe_name+"', '"+txt_zone+"'));");
			}
			
			les_icones=document.createElement("IMG");
			les_icones.setAttribute("src",icons_tab);
			les_icones.setAttribute("alt",icon_list[i][2]);
			les_icones.setAttribute("border","0");
			
			mycurrent_cell.appendChild(les_liens);
			les_liens.appendChild(les_icones);
			
			mycurrent_row.appendChild(mycurrent_cell)
		}
	
	
	tab_toolbody.appendChild(mycurrent_row);	
	tab_tool.appendChild(tab_toolbody);
	

	div_contener = document.createElement("DIV");
	div_contener.setAttribute("name", div_name2);
	div_contener.setAttribute("id", div_name2);
	
	div_contener.style.width = document.getElementById(txt_zone).style.width;

	div_contener.style.position = "relative";

	
	parent.appendChild(div_contener);
	
	
	
	div_text_wysiwyg = document.createElement("DIV");
	div_text_wysiwyg.setAttribute("name", div_wysiwyg_name);
	div_text_wysiwyg.setAttribute("id", div_wysiwyg_name);
	
	div_text_wysiwyg.style.width = document.getElementById(txt_zone).style.width;
	div_text_wysiwyg.innerHTML = "<a class=\"link_editor\" href=\"javascript:void(see_wysiwyg('"+div_name2+"','"+txt_zone+"','"+div_wysiwyg_name+"'));\"> Retour au Mode WYSIWYG</a>";
	div_text_wysiwyg.style.display = 'none';
	div_text_wysiwyg.align = 'center';

	div_text_wysiwyg.style.position = "relative";

	
	parent.appendChild(div_text_wysiwyg);
	

	div_contener.appendChild(tab_tool);
	
	//crée la zone iframe
	div_zone = document.createElement("DIV");
	div_zone.setAttribute("name", div_name);
	div_zone.setAttribute("id", div_name);
	
	div_zone.style.width = document.getElementById(txt_zone).style.width;
	div_zone.style.height = document.getElementById(txt_zone).style.height;
	
	

	
	div_zone.style.position = "relative";
	div_zone.innerHTML = "<iframe style=\"background-color: white;\" frameborder=\"0\" hspace=\"1\" marginheight=\"1\" marginwidth=\"1\" scrolling=\"auto\" onMouseOut=\"void(copy2('"+iframe_name+"', '"+txt_zone+"'));\" onLoad=\"javascript:void(copy('"+txt_zone+"','"+ iframe_name+"'));\" width=\"100%\" height=\"100%\" name=\""+iframe_name+"\" id=\""+iframe_name+"\"></iframe><br>"+add_foot_tool('fontname',iframe_name,'font_list')+add_foot_tool('fontsize',iframe_name,'fontsize_list')+add_foot_tool('formatblock',iframe_name,'handing_list')+" <a class=\"link_editor\" href=\"javascript:void(see_source('"+div_name2+"','"+txt_zone+"','"+div_wysiwyg_name+"'));\">Source HTML</a>";
	
	div_contener.appendChild(div_zone);
	
	window.frames[iframe_name].document.designMode = 'On'; 

	document.getElementById(txt_zone).style.display='none';
	
	document.write("<style type=\"text/css\"> div {background-color: #CCCCCC;border: 1px solid #333333;}</style>");

}

