/*
===============================================
+                                             +
+       functions communes   sur le site      +
+                                             +
===============================================
*/
/* ouvre une popup par rapport à la position de la souris modif le 06/06/2024 par pascal modif du code supression du jquery en parti*/
  function showPopupNouv(parent, nom_popup, hautheur_popup) {
    let relX = document.querySelector("#" + parent).offsetTop;
    let position_popup = parseInt(relX - hautheur_popup);
    if(relX < hautheur_popup) position_popup = 35;
    document.getElementById(nom_popup).style.top = position_popup + "px";
    popup(nom_popup,"block");
  };

  function showPopup(parent, pop, cal_posit) {
    const parentOffset = $(parent).parent().offset();
    const relX = parentOffset.top;
    let result = 30;
    if(relX > cal_posit) result = parseInt(relX - cal_posit);
    console.log("result : "+ relX)
    document.getElementById(pop).style.top = result+"px";
    popup(pop,"block");
  };

  /* nouvelle fonction fermeture de popup au 03/06/2024*/
  function FermePopup(nompopup){
        cellClicked = false;
        location.reload();
        document.getElementById(nompopup).style.display = "none";
   };

         /*fonction ajout d'un € a prés le prix  */
   function AjoutEuro(idprix){
        let prx_ach = document.getElementById(idprix).value;
        if(prx_ach.indexOf("€") == -1) document.getElementById(idprix).value = prx_ach + "€";
    };

    function popup(balise,sens){
        document.getElementById(balise).style.display = sens;
    }

    function visible(balise,sens){
        document.getElementById(balise).style.visibility = sens;
    }

    function affichage(idelm,dataaff){
        document.getElementById(idelm).innerHTML = dataaff;
    }

          /*bouton réinitialiser */
/*     $("#reload, #reload_bas").on("click", function () {
        location.reload();
    }); */

   
    /* formatage d'une date pour enregistrement au format client jj/mm/aaa */ 
    function formatageDeDate(datinput) {
        return datinput.replace(/^(\d{4})-(\d{2})-(\d{2})$/, "$3-$2-$1").split("-").join("/");
      }
  
    function formatageDeDateInvr(datinputa) {
       return datinputa.split('/').reverse().join('-')
      }

      var videoElement = document.getElementById("testphoto");
    
  function toggleFullScreen() {
    if (!document.mozFullScreen && !document.webkitFullScreen) {
      if (videoElement.mozRequestFullScreen) {
        videoElement.mozRequestFullScreen();
      } else {
        videoElement.webkitRequestFullScreen();
      }
    } else {
      if (document.mozCancelFullScreen) {
        document.mozCancelFullScreen();
      } else {
        document.webkitCancelFullScreen();
      }
    }
  }

  document.addEventListener("keydown", function(e) {
    if (e.keyCode == 13) {
      toggleFullScreen();
    }
  }, false);



  // var xhr = new XMLHttpRequest();
  // xhr.open('POST', 'https://httpbin.org/post');
  // xhr.onreadystatechange = function() {
  //   if (xhr.readyState === 4) {
  //     alert(xhr.responseText);
  //   }
  // };
 
//   xhr.send('ceci est un exemple de données envoyées');

// xhr.send(JSON.stringify({ message: 'bonjour!' }));



/*   let urlBase = 'https://dartagnan.cg.helmo.be/~p150107/tutoriels';
  let data = JSON.stringify({text: 'MAtricule E1234569'});
  fetch(`${urlBase}/js-ajax/exemple/toLower.php`, {method: "POST", body: data})
      .then(response => {
          if (!response.ok){
              throw new Error(`[${response.status}]: ${response.statusText} `);
          }
          return response;
      })
      .then(response => response.json())
      .then(result => {
          document.getElementById('consolef1p').innerHTML = result.text;
      })
      .catch(error => {
          document.getElementById('consolef1p').innerHTML = `Exception: ${error.message}`;
      }); */



