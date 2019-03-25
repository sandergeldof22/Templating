<!DOCTYPE html>
<html lang="nl">
<head>
	<title>Over Mij</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" type="text/css" href="css/overmij.css">
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
  	<h1 class="overmij">Over Mij</h1>
  </div>
  <div class="grid-item3">
  	<h1 class="mijzelftitel">Over Mij</h1>
  	<p class="mijzelf">Mijn naam is Sander, ik ben een 22 jarige man die momenteel studeert in Dordrecht en woont in Rotterdam, oorspronkelijk kom ik uit Zeeuws-vlaanderen, het onderste eiland van de provincie Zeeland.</p>
  	<p class="afbeelding">Zie afbeelding hiernaast --></p>
  	<p class="mijzelf">Zelf ben ik een enthousiaste, leergierige man die zich graag verder wil werken in de ICT wereld. </p>
  </div>  
  <div class="grid-item4">
  	<img src="img/zeeland.png">
    <hr>
  </div>
  <div class="grid-item5">
 <h1 class="ict">ICT</h1>
  	<p class="icttext">Vanuit mijn jeugd af aan ben ik opgegroeid met een oudere broer die zelf heel erg in de Nintendo's en SEGA's was. vanaf klein mannetje ben ik opgegroeid met dit soort systemen die voor zijn tijd redelijk revolutionair waren. naarmate ik ouder werd ging ik zelf natuurlijk hele dagen op deze spelcomputers spelen terwijl mijn broer bezig was op de computer. langzamerhand werd mijn broer erg technisch op dit vlak. en dat heeft genoeg impact voor mij achtergelaten om zelf ook veel interesse te tonen hierin, dingen uit mezelf ga opzoeken en lezen, dingen proberen.</p>
  	<br>
  	<p class="icttext">Het meest belangrijkste is natuurlijk de ICT zelf, Het middel van onze digitalisering die deze tijden een van de grootste impacten op de wereld heeft. Voor mij is dit ook niet anders. Innovatie en ontwikkeling zijn voor mij dan ook zeer belangrijk. Het is ook om die reden dat ik mijzelf nu in de ICT wereld heb gegoten en hoop ook in deze wereld voortgang in veranderingen te produceren en uiteindelijk een stukje "Mij" achterlaat in de digitale wereld van ICT</p>
  	<hr>
  </div>
  <div class="grid-item6">
  	<h1 class="h1hobbys">Mijn Hobby's</h1>
  	<p class="phobbys">Bovenop ICT heb ik nog andere hobby's namelijk geschiedenis en filosofie, ook speel ik op zn tijd nog steeds wel eens een leuke game. Geschiedenis heeft mij altijd al geïnterreseerd en dus lees of kijk ik daar graag wat over. Het is fascinerend hoe we van man met speer naar man met technologie zijn gegaan.</p>
  	<p class="phobbys">Wat me ook interreseerd is filosofie. ik vind het altijd interresant om meerdere manieren van kijken en gedachtegang van leven te werk zien gaan. want wat is uiteindelijk die letters op je toetsenbord? menselijk gefabriceerde tekens die we zelf een betekenis geven. Ik vind Nietzsche en Kierkegaard super interresant vanwege hun gedachtegang gebasseerd op vrijheid. hun manier van denken zal voor mij altijd een voorbeeld blijven</p>
    <hr>
  </div>  
  <div class="grid-item7">
  	<div id="demo" class="carousel slide" data-ride="carousel">
  		<ul class="carousel-indicators">
  			<li data-target="#demo" data-slide-to="0" class="active"></li>
      		<li data-target="#demo" data-slide-to="1"></li>
      	</ul>
      	<div class="carousel-inner">
      		<div class="carousel-item active">
       			<img src="img/nietzsche.png" alt="Nietzsche" class="Nietzsche">
      		</div>

      		<div class="carousel-item">
        		<img src="img/kierkegaard.png" alt="Kierkegaard" class="Kierkegaard">
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
 <div class="grid-item8">
  	<?php
    include ('footer.php');
    ?>
</div>

</body>
</html>