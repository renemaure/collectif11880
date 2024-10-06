
let text_acc_jon = new Array(100);
let dataaff="";
let datadates ="";

function demarer(){
    fetch('systeme/donnees/don_crt_acceuil.json')
    .then( response => {
  return response.json();
    })
    .then( json =>{
        text_acc_jon = json;
        modif_carte_accueil(text_acc_jon);
      } 
  )
}

function modif_carte_accueil(text_acc_jon){
    for (let index = 1; index <= text_acc_jon["nbr_cart"]; index++) {
        dataaff = dataaff + "<tr><td onclick=\"OuvrPopupTxt('text_cart"+index+"')\">"+text_acc_jon["trt_acc"+index]+"</td></tr>";
        datadates = datadates +"<tr><td>"+text_acc_jon["trt_acc"+index]+"</td><td>"+text_acc_jon["date_card"+index]+"</td><td>"+text_acc_jon["heure"+index]+"</td></tr>";
    }
    affichage("affich_text_cart",dataaff);
    affichage("affich_date_cart",datadates);
}

function OuvrPopupTxt(){
    // alert("ouvre la fonction");
    popup("popup-textacc","block");
}