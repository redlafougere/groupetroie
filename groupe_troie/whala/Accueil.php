<?php
include "MyLibrary.php";
entete("Accueil");
?>

<body >
    <Header>
    	<div style="text-align:right">
    	<a href="Accueil.html" id="lien"><h1 id="monstyle3" >Accueil:
			<span
         class="txt-rotate"
         data-period="2000"
         data-rotate='[ "Jurassic Park.", "Skyrim.", "Groupe Troie." ]'></span>
		</h1></a>
		</div>
	</header>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
			<ul class="navbar-nav">
              <li class="nav-item active" id="actif">
                <a class="nav-link" href="Accueil.php">Accueil</a>
              </li>
			  <li class="nav-item">
				<a class="nav-link" href="Page_1.php">Skyrim</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="Page_2.php">Jurassic Park</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="PhotoSlider.php">Gallerie</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="Page_3.php">Contact</a>
			  </li>
			</ul>
		</nav>

		<div class="w3-container w3-center w3-animate-top">
			<h2 id="monstyle4">Bienvenue sur notre site!</h2>
		</div>
		<h3 class="centre">Pierre.D</h3>
		<p class="centre"> Bonjour et bienvenue sur notre site,
			nous avons créé ce site avec mon groupe car nous sommes
			en formation de développement Web. Sur ce site on se présente 
			un peu, nous parlons de Skyrim, de jurassic Park.<br>
			Je m'appelle Pierre, j'ai 21 ans. Je sors d'un BTS SIO 
			réalisé à Valenciennes. Je fais du foot dans un club et du rallye, 
			je joue à la Ps4 principalement</p>
		<h3 class="centre">Alex.K</h3>
		<p class="centre">Salut c'est Alex, mais certain m'appel Red,
			pour en dire un peu plus je suis un gros Fan de 
			l'univers de Jurassic Parc (d'où la page dessus), 
			de pokemon, The Legend of Zelda, Monster Hunter ou encore des mangas.
			Je joue également beaucoup à League of legends.<br>
			Débutant en développement web, ceci est la première page 
			web que nous créons au sein de cette formation, see you
			dans la faille pour game avec la meilleure morgana World 
			(auto-proclamé chut :p)</p>
		<h3 class="centre">Valentin.C</h3>
		<p class="centre">Bonjour moi c'est Valentin, Je m'occupe grace 
			au series, films et mangas et j'essaye également d'apprendre la
			trompette par moi-même, tant bien que mal.<br>
			Egalement débutant en developpement, c'est ma premiere expérience
			de création de site web.<br>
			ps: mon test est négatif</p>
		<div class="centre" id="margeB">
		<img src="images/Photo.jpg" alt="Developpeur" />
		</div>
		<div class="centre">
			<p id='tog'>Il est actuellement <span id='heure'></span></p>
			<button id='bouton'>Cacher / Afficher l'heure</button>
			<script src="js/Date.js"></script>
			<a href="https://www.terre-net.fr/meteo-agricole/" id="terrenet-meteo-agricole">Météo agricole - Terre-net</a>
			<script type="text/javascript" src=meteo.js ></script>
			</div>
		<div class="centre">
			<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d20393.82904069158!2d4.064439796441601!3d50.28765996040439!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sbar!5e0!3m2!1sfr!2sfr!4v1597930333784!5m2!1sfr!2sfr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" id="monstyle5" class="margeBottom"></iframe>
		</div>
		<footer>
			<p>Groupe Troie/Formation Développeur Web/Web mobile<br>
			  2 Rue de l'Arsenal, 59131 Rousies</p>
		</footer>
</body>
</html>
