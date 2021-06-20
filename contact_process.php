<?php
//var_dump($_POST);
if(isset($_POST['email'])) {

    $email_to = "contact@interasys.net";
 
    

 
    function died($error) {
 
        // your error code can go here
 
        echo "Désolé, une erreur est survenue !. ";
 
        echo "Ces erreurs apparaissent plus bas<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Retournez et résolvez tout ça.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['name']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['message'])) {
 
        died('Désolé, une erreur est survenue lorsque le formulaire a été envoyé !.');       
 
    }
 
     
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $subject = $_POST['subject'];
 
    $email_message = "Les informations contenues dans ce mail sont confidentielles.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "Name: ".clean_string($name)."\n";
 
    $email_message .= "Email: ".clean_string($email)."\n";
 
    $email_message .= "Message: ".clean_string($message)."\n";

 
	// create email headers
	 
	$headers = 'From: '.$email."\r\n".
	 
	'Reply-To: '.$email."\r\n" .
	 
	'X-Mailer: PHP/' . phpversion();
	 
	@mail($email_to, $subject, $email_message, $headers);  
    
header("Location:https://www.logisafrica.com/contact.php");
?>
 
 
 
<!-- include your own success html here -->
 
 
 
Merci de nous avoir contacté. Nous vous répondrons sous peu.
 
 
 
<?php
 
}
 
?>