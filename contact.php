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
  	<link rel="stylesheet" type="text/css" href="css/contact.css">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<?php

$voornaamErr = $achternaamErr = $emailErr = $telefoonnummerErr = $vraagErr = $bestandErr = $verzendenErr =  "";
$voornaam = $achternaam = $email = $telefoonnummer = $vraag = $bestand = $verzenden = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["voornaam"])) {
		$voornaamErr = "Verplicht in te voeren";
	} else {
		$voornaam = test_input($_POST["voornaam"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$voornaam)) {
     		 $voornaamErr = "Alleen letters en hoofdletters a-Z mogelijk"; 
   		}
	}


	if (empty($_POST["achternaam"])) {
		$achternaamErr = "Verplicht in te voeren";
	} else {
		$achternaam = test_input($_POST["achternaam"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$achternaam)) {
     		 $achternaamErr = "Alleen letters en hoofdletters a-Z mogelijk"; 
   		}
	}

	if (empty($_POST["email"])) {
		$emailErr = "Verplicht in te voeren";
	} else {
		$email = test_input($_POST["email"]);
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
 			 $emailErr = "Invalide Email"; 
		}
	}

	if (empty($_POST["telefoonnummer"])) {
		$telefoonnummerErr = "Verplicht in te voeren";
	} else {
		$telefoonnummer = test_input($_POST["telefoonnummer"]);
		if (!preg_match("/^[0-9]*$/",$telefoonnummer)) {
     		 $telefoonnummerErr = "Alleen cijfers mogelijk"; 
   		}
	}

	if (empty($_POST["vraag"])) {
		$vraagErr = "Verplicht in te voeren";
	} else {
		$vraag = test_input($_POST["vraag"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$voornaam)) {
     		 $vraagErr = "Alleen letters en hoofdletters a-Z mogelijk"; 
   		}
	}


	$target_dir = "uploads/uploads";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	if(isset($_POST["submit"])) {
    	$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    	if($check !== false) {
        	$uploadOk = 1;
    	} else {
    		$bestandErr = "Bestand is geen afbeelding";
        	$uploadOk = 0;
    	}
	}

	if (file_exists($target_file)) {
    	$bestandErr = "Sorry, bestand bestaat al";
   		$uploadOk = 0;
	}
	if ($_FILES["fileToUpload"]["size"] > 500000) {
   		$bestandErr = "Sorry, je bestand is te groot.";
    	$uploadOk = 0;
	}
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
    	$bestandErr = "Sorry, alleen JPG, JPEG, PNG & GIF bestanden toegestaan.";
    	$uploadOk = 0;
	}

	if ($uploadOk == 0) {
    	$bestandErr = "Sorry, je bestand is niet geupload";
	} else {
   		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        	$bestand = "Het bestand ". basename( $_FILES["fileToUpload"]["name"]). " is geupload.";
    	} else {
        	$bestandErr = "Sorry, er was een error bij het uploaden van jou bestand";
    	}
	}
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
} 
?>

	<div class="grid-container">
	<div class="grid-item1">
		<?php
		include ('header.php');
		?>
	</div>
	 <div class="grid-item2">
  	<h1>Contact</h1>
  </div>
  <div class="grid-item3">
  	<form method="post"  enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<div class="form-group">
	Voornaam				<input type="text" class="form-control" name="voornaam">
	<span class="error"><?php echo $voornaamErr;?></span>
	<br>
	</div>
	<div class="form-group">
	Achternaam				<input type="text" class="form-control" name="achternaam">
	<span class="error"><?php echo $achternaamErr;?></span>
	<br>
	</div>
	<div class="form-group">
	E-mail					<input type="text" class="form-control" name="email">
	<span class="error"><?php echo $emailErr;?></span>
	<br>
	</div>
	<div class="form-group">
	Telefoonnummer			<input type="text" class="form-control" name="telefoonnummer">
	<span class="error"><?php echo $telefoonnummerErr;?></span>
	<br>
	</div>
	<div class="form-group">
	Uw vraag				<input type="text" class="form-control" name="vraag">
	<span class="error"><?php echo $vraagErr;?></span>
	<br>
	</div>
	<div>
	Selecteer Bestand:	<input type="file" name="fileToUpload" id="fileToUpload">
	<span class="succes"><?php echo $bestand;?></span>
	<span class="error"><?php echo $bestandErr;?></span>
	<input class="submit" type="submit" name="submit" value="Send Form">
	<br>
	<span class="succes"><?php echo $verzenden;?></span>
	<span class="error"><?php echo $verzendenErr;?></span>
	</div>
	</form>
  </div>
  <div class="grid-item8">
  	<?php
	include ('footer.php');
	?>
  </div>  
</div>

</body>
</html>