<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link type="text/css" rel="stylesheet" href="css/test_2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animated Fragment Slideshow | Codrops</title>
	<meta name="description" content="A slider made with the Pieces library where slides are animated in a fragmented look." />
	<meta name="keywords" content="slideshow, slider, pieces, fragments, animation, svg, canvas, javascript" />
	<link rel="stylesheet" type="text/css" href="css/slider.css" />
	<script>document.documentElement.className="js";var supportsCssVars=function(){var e,t=document.createElement("style");return t.innerHTML="root: { --tmp-var: bold; }",document.head.appendChild(t),e=!!(window.CSS&&window.CSS.supports&&window.CSS.supports("font-weight","var(--tmp-var)")),t.parentNode.removeChild(t),e};supportsCssVars()||alert("Please view this demo in a modern browser that supports CSS Variables.");</script>

    <title>Photo</title>
</head>
<body style="background-color:#cec7c7;"></body>
    <Header>
    	<div class="centre">
			<a href="Accueil.html" id="lien"><h1 id="monstyle3" >Photos et Images</p></h1></a>
		</div>

	</Header>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		<ul class="navbar-nav">
		  <li class="nav-item">
            <a class="nav-link" href="Accueil.php">Accueil</a>
          </li>
		  <li class="nav-item ">
			<a class="nav-link" href="Page_1.php">Skyrim</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="Page_2.php">Jurassic Park</a>
          </li>
          <li class="nav-item active" id="actif">
			<a class="nav-link" href="PhotoSlider.php">Gallerie</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="Page_3.php">Contact</a>
          </li>

		</ul>
	</nav>
    <div class="pieces-slider">
        <div class="pieces-slider__slide">
          <img class="pieces-slider__image" src="images/Photo.jpg" alt="">
          <h2 class="pieces-slider__text">RPZ</h2>
        </div>
        <div class="pieces-slider__slide">
          <img class="pieces-slider__image" src="images/raptor.jpg" alt="">
          <h2 class="pieces-slider__text">Rassurant...</h2>
        </div>
        <div class="pieces-slider__slide">
          <img class="pieces-slider__image" src="images/rex1.jpg" alt="">
          <h2 class="pieces-slider__text">Roberta dans la place</h2>
        </div>
        <div class="pieces-slider__slide">
          <img class="pieces-slider__image" src="images/rex2.jpg" alt="">
          <h2 class="pieces-slider__text">Papa et maman pas content content</h2>
        </div>
        <div class="pieces-slider__slide">
          <img class="pieces-slider__image" src="images/Run.jpg" alt="">
          <h2 class="pieces-slider__text">RUN</h2>
        </div>
        <canvas class="pieces-slider__canvas"></canvas>
        <button class="pieces-slider__button pieces-slider__button--prev">prev</button>
        <button class="pieces-slider__button pieces-slider__button--next">next</button>   
        <script src='js/anime.min.js'></script>
        <script src='js/pieces.min.js'></script>
        <script src='js/demo.js'></script>
    </div>
  
    <footer>
        <p>Groupe Troie/Formation Développeur Web/Web mobile<br>
          2 Rue de l'Arsenal, 59131 Rousies</p>
    </footer>
</body>
</html>