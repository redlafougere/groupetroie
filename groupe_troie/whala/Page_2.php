<?php
include "MyLibrary.php";
entete("Jurassic Park");
?>

<body id="canvascss">
    <Header>
    	<div style="text-align:center">
        <a href="Accueil.html" id="lien">
          <h1 id="monstyle2" >Jurassic Park</h1>
        </a>
      </div>

    </Header>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
			<ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="Accueil.php">Accueil</a>
        </li>
			  <li class="nav-item">
				  <a class="nav-link" href="Page_1.php">Skyrim</a>
			  </li>
			  <li class="nav-item active" id="actif">
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
    
    <article>
    <div class="row1">
    <div class="block2">
        <img src="images/rex1.jpg" alt="T-rex en vadrouille">
     </div>

    <div class="block3">
        <h2>Synopsis</h2>
        <p>1993. John Hammond, PDG de la puissante compagnie InGen, parvient à donner vie à des dinosaures grâce à la technique de l'extraction d'ADN et décide de les utiliser dans le cadre d’un parc d'attractions sur Isla Nublar, une île au large du Costa Rica. Avant l'ouverture, il fait visiter le complexe à un groupe d'experts pour obtenir leur aval. Mais pendant la visite, un informaticien coupe les systèmes de sécurité afin de voler des embryons de dinosaures pour une compagnie rivale. En l'absence de tout système de sécurité pendant plusieurs heures, les dinosaures s'échappent et se répandent sur l'île...
            1997. Quatre ans après le terrible fiasco de Jurassic Park, le milliardaire John Hammond tente de préserver son poste au sein de la compagnie InGen. Mais son propre neveu, Peter Ludlow, l'évince du conseil et monte une expédition pour ramener les dinosaures sur le continent depuis Isla Sorna, une île voisine du parc. Hammond contacte Ian Malcolm pour l'informer de son nouveau projet : envoyer une équipe pour contrecarrer les plans de Ludlow et protéger l'île de toute intrusion malveillante... </p>
     </div>   

    <div class="block2" >
        <img src="images/rex2.jpg" alt="Papa et Maman T-rex pas content">
        
    </div>
    </div>
    </article>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.7.2/p5.min.js"></script>
      <script type="text/javascript" src='js/Logomouv.js'></script>
    
    <footer>
        <p>Groupe Troie/Formation Développeur Web/Web mobile<br>
          2 Rue de l'Arsenal, 59131 Rousies</p>

    </footer>

</body>
</html>
