<h4><?php echo $affichtxt["txt_prg7"];?></h4>
<h6><span class="i"> Version 1.1 au 16 novembre 2023</span></h6>
<div class="row">
	<div class="col-12">
		<p>
            Le format SVG permet d’afficher dans des pages html, des images vectorielles, mais aussi de les manipuler dans le DOM. L’image est contenue dans une paire de balises:</p>  
        <p>
        <code> 
            <div class="cnt f12 g"> &lt;svg&gt;…&lt;/svg&gt;</div>
        </code>
        </p><p>
            Dans cette balise on doit obligatoire mettre pour être reconnue par le DOM, la référence de sa norme, version du SVG ainsiq ue la hauteur et la largeur de la vue VieuwBox, ce qui donne</p>
        <p><code>
            <div class="cnt f12 g"> 
            &lt;svg width="800" height="600" xmlns="http://www.w3.org/2000/svg" version="1.1"&gt;
            </div> 
        </code>
        </p><p>
            Dans le format SVG les images sont créées en codes et en coordonnées. Le point de référence est le coin en haut et à gauche. Il existe des formes déjà prédéfinis sous forme de balises. La première formes est le rectangle, qui peut être aussi un carré.
        </p>
        <p>
            Note : Pour toutes les formes, on peut rajouter les arguments, stroke définissant la couleur du contour et stroke-width son épaisseur, et fill pour la couleur de remplissage, que l’on peut mettre à transparent pour afficher la couleur du fond.
        </p>

        <p>
            <div class="g f16 brd"> RECT </div>
            Pour dessiner un rectangle il lui faut passer des arguments, x=coordonnées horizontales et y=coordonnées verticales du point de départ du rectangle, puis widh pour sa longueur et height pour sa hauteur.
            <br>
            On peut aussi rajouter des coins arrondis a cette forme en renseignant rx et ry pour les rayons des coins horizontaux et verticaux. 
            <br>
            Ce qui donne pour pour dessiner un rectangle:</p>
        <p>
            <code>
                <div class="cnt f12 g">
                    &lt;rect x="110" y="110" rx="5" ry="5" width="100" height="100" stroke="red" fill="transparent" stroke-width="5"/&gt;
                </div>
            </code>
        </p>
        <p>
            Ce qui donne en visuel, en SVG:
        </p>
        <p>
            <div class="cnt">
                <svg  width="150" height="150" xmlns="http://www.w3.org/2000/svg" version="1.1">
                    <rect x="10" y="10" rx="5" ry="5" width="100" height="100" stroke="red" fill="transparent" stroke-width="5"/>
                </svg>
            </div>
        </p>
        <p>
            <div class="g f16 brd">CIRCLE</div>
            On peut aussi dessiner des cercles avec plusieurs attributs, cx et cy pour les coordonnées du centre du cercle et r le rayon du cercle et naturellement avec tous les attributs de couleur et de contours, ce qui donne pour écrire le code:
        </p>
        <p>
            <code>
                <div class="cnt f12 g">
                    &lt;circle cx="350" cy="80" r="50" stroke="red" fill="transparent" stroke-width="5"&gt;
                </div>
            </code>
        </p>
        <p>
            et sous ça forme SVG:
        </p>
        <p>
            <div class="cnt">
                <svg  width="150" height="150" xmlns="http://www.w3.org/2000/svg" version="1.1">
                    <circle cx="60" cy="60" r="50" stroke="red" fill="transparent" stroke-width="5"/>
                </svg>
            </div>
        </p>
	</div>	
</div>