<?php
include "MyLibrary.php";
entete("Contact");
?>

<body>

      <Header>
    	<div style="text-align:right">
      <a href="Accueil.html" id="lien"><h1 id="monstyle3" >AFPA  .</h1></a>
      </div>
        

      </header>
      <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <ul class="navbar-nav">
              <li class="nav-item ">
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
              <li class="nav-item active" id="actif">
                    <a class="nav-link" href="Page_3.php">Contact</a>
              </li>

            </ul>
      </nav>
      


      <h2 class="centre">Contactez-nous!</h2>

      <div class="container">
            <form action="Questionnaire.php" method="POST">
                  <label for="prénom">Prénom</label>
                  <input type="text" id="prénom" name="prénom" placeholder="Ton prénom">
                  <label for="nom">Nom</label>
                  <input type="text" id="nom" name="nom" placeholder="Ton nom">
                  <label for="age">Âge</label>
                  <input type="text" id="age" name="age" placeholder="Ton âge">
                  <label for="country">Pays</label>
                  <select id="country" name="pays">
                        <option value="france">France</option>
                        <option value="belgium">Belgique</option>
                        <option value="switzerland">Suisse</option>
                  </select>
                  <label for="ville">Ville</label>
                  <input type="text" id="ville" name="ville" placeholder="Ta ville">
                  <label for="subject">Message</label>
                  <textarea id="subject" name="Message" placeholder="Ecrivez ici..." style="height:200px"></textarea>
                  <form method="link" action="Page_3.html">
                        <input type="submit" value="Envoyer" >
                  </form>
            </form>
      </div>
    <footer>
        <p>Groupe Troie/Formation Développeur Web/Web mobile<br>
          2 Rue de l'Arsenal, 59131 Rousies<br>
          https://www.afpa.fr/<br>
          +33826461414<br>
          lundi
          08:00–12:00
          13:00–17:00<br>
          mardi 
          08:00–12:00
          13:00–17:00<br>
          mercredi
          08:00–12:00
          13:00–17:00<br>
          jeudi
          08:00–12:00
          13:00–17:00<br>
          vendredi
          08:00–12:00<br>
          
          samedi
          Fermé
          dimanche
          Fermé</p>
    </footer>
</body>
</html>