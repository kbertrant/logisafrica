<?php
//var_dump($_POST);
if(isset($_POST['emailAddress'])) {

    $email_to = "estimation@logisafrica.com";
 
    
    function died($error) {
 
        // your error code can go here
 
        echo "Désolé, une erreur est survenue !. ";
 
        echo "Ces erreurs apparaissent plus bas<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Retournez et résolvez tout ça.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['firstName']) || !isset($_POST['lastName']) || !isset($_POST['emailAddress']) ||
 
        !isset($_POST['cargoType']) || !isset($_POST['depart']) || !isset($_POST['destination']) ||
 
        !isset($_POST['quantity']) || !isset($_POST['weight']) || !isset($_POST['width']) || !isset($_POST['height'])) {
 
        died('Désolé, une erreur est survenue lorsque le formulaire a été envoyé !.');       
 
    } 
 
     
    $first_name = $_POST['firstName'];
    $last_name = $_POST['lastName'];
    $email = $_POST['emailAddress'];
    $cargoType = $_POST['cargoType'];
    $depart = $_POST['depart'];
    $destination = $_POST['destination'];
    $quantity = $_POST['quantity'];
    $weight = $_POST['weight'];
    $width = $_POST['width'];
    $height = $_POST['height'];
 
    $email_message = "Les informations contenues dans ce mail sont confidentielles. \n\n";
 
    $subject = "Estimation"; 
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
    $email_message .= "Noms : ".clean_string($first_name)."\n";
    $email_message .= "Prénoms : ".clean_string($last_name)."\n";
    $email_message .= "Adresse mail: ".clean_string($email)."\n";
    $email_message .= "Type cargaison : ".clean_string($cargoType)."\n";
    $email_message .= "Ville départ : ".clean_string($depart)."\n";
    $email_message .= "Ville destination :".clean_string($destination)."\n";
    $email_message .= "Quantité : ".clean_string($quantity)."\n";
    $email_message .= "Poids :".clean_string($weight)."\n";
    $email_message .= "Largeur: ".clean_string($width)."\n";
    $email_message .= "Hauteur: ".clean_string($height)."\n";

 
	// create email headers
	 
	$headers = 'From: '.$email."\r\n".
	 
	'Reply-To: '.$email."\r\n" .
	 
	'X-Mailer: PHP/' . phpversion();
	 
	@mail($email_to, $subject, $email_message, $headers);  
    
header("Location:https://www.logisafrica.com");
?>
 
 
 
<!-- include your own success html here -->
 
 
 
Merci de nous avoir contacté. Nous vous répondrons sous peu.
 
 
 
<?php
 
}
 
?>