<!DOCTYPE html>
<html lang="nl">
<head>
	<title>Portfolio Introductiepagina</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" type="text/css" href="css/portfolio.css">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="grid-container">
	<div class="grid-item1">
		<?php
		include ('header.php');
		?>
	</div>
  <div class="grid-item2">
  	<h1>Mijn profiel</h1>
  </div>
  <div class="grid-item3">
  	<p>Voornaam:</p>
  	<p>Achternaam:</p>
  	<p>Geboortedatum:</p>
  	<p>Adres:</p>
  	<p>Woonplaats:</p>
  	<p>E-mailadres:</p>
  	<p>Beroep:</p>
  	<p>Opleiding:</p>
  </div>  
  <div class="grid-item4">
  	<p>Sander</p>
  	<p>Geldof</p>
  	<p>21 Februari 1997</p>
  	<p>Herman Robberstraat 104D</p>
  	<p>3031RL, Rotterdam</p>
  	<p>sandergeldofbv@hotmail.com</p>
  	<p>Momenteel nog student</p>
  	<p>Applicatie- en Mediaontwikkelaar Niveau 4</p>
  </div>
  <div class="grid-item5">
  	<div id="demo" class="carousel slide" data-ride="carousel">
  		<ul class="carousel-indicators">
  			<li data-target="#demo" data-slide-to="0" class="active"></li>
      		<li data-target="#demo" data-slide-to="1"></li>
      	</ul>
      	<div class="carousel-inner">
      		<div class="carousel-item active">
       			<img src="img/selfie.png" alt="selfie" class="selfie">
      		</div>

      		<div class="carousel-item">
        		<img src="img/sander.png" alt="sander" class="sander">
      		</div>

      		<a class="carousel-control-prev" href="#demo" data-slide="prev">
     			<span class="carousel-control-prev-icon"></span>
    		</a>
    		<a class="carousel-control-next" href="#demo" data-slide="next">
      			<span class="carousel-control-next-icon"></span>
    		</a>
    	</div>
  </div>
</div>
  <div class="grid-item6">
  	<h1 class="maintitle">Introductie</h1>
  	<p>Welkom op mijn digitale portfolio, Ik hoop zoveel mogelijk duidelijkheid en een goed beeld voor u achter te laten wie ik als persoon ben en wat ik voor u kan betekenen.</p>
  	<br>
  	<p>voor eventuele vragen of contact klikt u <a href="contact.php">hier</a>
  </div>  
  <div class="grid-item7">
  	<p class="quote">Computers are like Old Testament gods; lots of rules and no mercy. -Joseph Campbell</p>
  </div>
  <div class="grid-item8">
  	<?php
		include ('footer.php');
	   ?>
  	</footer>
  </div>  
</div>

</body>
</html>