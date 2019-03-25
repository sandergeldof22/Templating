<!DOCTYPE html>
<html lang="nl">
<head>
	<title>Mijn werk</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" type="text/css" href="css/mijnwerk.css">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
	<div class="grid-container">
	<div class="grid-item1">
		<?php
		include ('header.php');
		?>
	</div>
	<div class="grid-item2">
		<h1 class="mijnwerk">Mijn werk</h1>
  </div>
  <div class="grid-item3">
  	<div class="wrapper">
  	  	<div id="demo" class="carousel slide" data-ride="carousel">
  			<ul class="carousel-indicators">
  				<li data-target="#demo" data-slide-to="0" class="active"></li>
      			<li data-target="#demo" data-slide-to="1"></li>
      			<li data-target="#demo" data-slide-to="2"></li>
      			<li data-target="#demo" data-slide-to="3"></li>
      			<li data-target="#demo" data-slide-to="4"></li>
      			<li data-target="#demo" data-slide-to="5"></li>
      			<li data-target="#demo" data-slide-to="6"></li>
      			<li data-target="#demo" data-slide-to="7"></li>
      			<li data-target="#demo" data-slide-to="8"></li>
      			<li data-target="#demo" data-slide-to="9"></li>
      			<li data-target="#demo" data-slide-to="10"></li>
      			<li data-target="#demo" data-slide-to="11"></li>
      			<li data-target="#demo" data-slide-to="12"></li>
      		</ul>
      			<div class="carousel-inner">
      				<div class="carousel-item active">
       					<img src="voorgaandwerk/pizzacalculator.png" alt="pizzacalculator" class="">
      				</div>

      				<div class="carousel-item">
        				<img src="voorgaandwerk/voc-game.png" alt="voc-game" class="">
      				</div>

      				<div class="carousel-item">
        				<img src="voorgaandwerk/gehaktbrood.png" alt="gehaktbrood" class="">
      				</div>

      				<div class="carousel-item">
        				<img src="voorgaandwerk/robotarm.png" alt="robotarm" class="">
      				</div>

      				<div class="carousel-item">
        				<img src="voorgaandwerk/overallgrid.png" alt="overallgrid" class="">
      				</div>

      				<div class="carousel-item">
        				<img src="voorgaandwerk/Horeca-app.png" alt="Horeca-app" class="">
      				</div>

      				<div class="carousel-item">
        				<img src="voorgaandwerk/handy.png" alt="handy" class="">
      				</div>

      				<div class="carousel-item">
        				<img src="voorgaandwerk/adventure.png" alt="adventure" class="">
      				</div>

      				<div class="carousel-item">
        				<img src="voorgaandwerk/mastermind.png" alt="mastermind" class="">
      				</div>

      				<div class="carousel-item">
        				<img src="voorgaandwerk/responsive.png" alt="responsive" class="">
      				</div>

      				<div class="carousel-item">
        				<img src="voorgaandwerk/introphp.png" alt="introphp" class="">
      				</div>

      				<div class="carousel-item">
        				<img src="voorgaandwerk/erheerstpaniek.png" alt="erheerstpaniek" class="">
      				</div>

      				<a class="carousel-control-prev" href="#demo" data-slide="prev">
     					<span class="carousel-control-prev-icon"></span>
    				</a>
    				<a class="carousel-control-next" href="#demo" data-slide="next">
      					<span class="carousel-control-next-icon"></span>
    				</a>
    			</div>
  		</div>
  		<p class="githubtext">Om het voor u makkelijk te maken verwijst de knop hiernaast zich naar het Github profiel. vanaf daar is al het werk nogmaals op een fijnere manier te bekijken <a class="fab fa-github-square" href="https://github.com/sandergeldof22"></a></p>
	</div>
   </div>
  <div class="grid-item8">
  	<?php
		include ('footer.php');
	?>
  </div>  
</div>

</body>
</html>