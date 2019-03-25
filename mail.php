<!DOCTYPE html>
<html>
<head>
	<title></title>
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
        	echo "Bestand is een afbeelding - " . $check["mime"] . ".";
        	echo "<br>";
        	$uploadOk = 1;
    	} else {
    		$bestandErr = "Bestand is geen afbeelding";
        	echo "Bestand is geen afbeelding";
        	echo "<br>";
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


if (isset($_REQUEST['email']))  {
	$admin_email = "sandergeldofbv@hotmail.com";	

	$subject = "Nieuwe Form submissie";

	$voornaam = $_REQUEST['voornaam'];

  	$achternaam = $_REQUEST['achternaam'];

  	$email = $_REQUEST['email'];
  	
  	$telefoonnummer = $_REQUEST['telefoonnummer'];

  	$vraag = $_REQUEST['vraag'];

  	mail($admin_email, $subject, $vraag, "From:" . $voornaam . $achternaam, "Contact:" . $telefoonnummer . $email);

  	$verzenden = "Het verzenden is gelukt!!";
  } else {
  	$verzendenErr = "Het verzenden is mislukt!!";
  }

?>

</body>
</html>