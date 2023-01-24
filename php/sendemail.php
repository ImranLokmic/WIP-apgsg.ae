<?php  
 
if(isset($_POST['sendmail'])) {
 $mailto = "info@apgsg.ae";
 $name = $_POST['name']; //getting customer name
 $fromEmail = $_POST['email']; //getting customer email
 $subject = "Website Contact";
 $subject2 = "Confirmation: Message was submitted successfully | APGSG"; // For customer confirmation
 
 //Email body I will receive
 $message = "Client Name: " . $name . "\n"
 . "Client Email: " . $fromEmail . "\n\n"
 . "Client Message: " . "\n" . $_POST['message'];
 
 //Message for client confirmation
 $message2 = "Dear" . $name . "\n"
 . "Thank you for contacting us. We will get back to you shortly!" . "\n\n"
 . "You submitted the following message: " . "\n" . $_POST['message'] . "\n\n"
 . "Regards," . "\n" . "- APGSG";
 
 //Email headers
 $headers = "From: " . $fromEmail; // Client email, I will receive
 $headers2 = "From: " . $mailto; // This will receive client
 
 //PHP mailer function
 
  $result1 = mail($mailto, $subject, $message, $headers); // This email sent to My address
  $result2 = mail($fromEmail, $subject2, $message2, $headers2); //This confirmation email to client
 
  header("Location: https://apgsg.ae");
  die();
 

}

?>
