<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address

  
  // $receiving_email_address = array ('f.cordier@codeur.online', 'coco2171@hotmail.fr', 'fredericcordier@sfr.fr');

  // if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
  //   include( $php_email_form );
  // } else {
  //   die( 'Unable to load the "PHP Email Form" Library!');
  // }

  // $contact = new PHP_Email_Form;
  // $contact->ajax = true;
  
  // $contact->to = $receiving_email_address;
  // $contact->from_name = $_POST['name'];
  // $contact->from_email = $_POST['email'];
  // $contact->subject = $_POST['subject'];

  // // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  // /*
  // $contact->smtp = array(
  //   'host' => 'example.com',
  //   'username' => 'example',
  //   'password' => 'pass',
  //   'port' => '587'
  // );
  // */

  // $contact->add_message( $_POST['name'], 'From');
  // $contact->add_message( $_POST['email'], 'Email');
  // $contact->add_message( $_POST['message'], 'Message', 10);

  // echo $contact->send();
  //===============================================================================================
  if(isset($_POST['mailform'])) {
	if(!empty($_POST['nom']) AND !empty($_POST['mail']) AND !empty($_POST['message'])) {
	   $header="MIME-Version: 1.0\r\n";
	   $header.='From:"nom_d\'expediteur"<votre@mail.com>'."\n";
	   $header.='Content-Type:text/html; charset="uft-8"'."\n";
	   $header.='Content-Transfer-Encoding: 8bit';
	   $message='
	   <html>
		  <body>
			 <div align="center">
			
				<u>Nom de l\'expéditeur :</u>'.$_POST['nom'].'<br />
				<u>Mail de l\'expéditeur :</u>'.$_POST['mail'].'<br />
				<br />
				'.nl2br($_POST['message']).'
		   
			 </div>
		  </body>
	   </html>
	   ';
	   mail("f.cordier@codeur.online, coco2171@hotmail.fr, fredericcordier@sfr.fr", "Sujet du message", $message, $header);
	   $msg="Votre message a bien été envoyé !";
	   echo "<h1>$msg</h1>";
	   header("Refresh: 2;url=https://fredericc.promo-44.codeur.online/");
	} 
	else {
	   $msg="Tous les champs doivent être complétés !";
	   echo "<h1>$msg</h1>";
	   header("Refresh: 2;url=https://fredericc.promo-44.codeur.online/");
	}
 }
?>
