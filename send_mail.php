<?php

	$end_line = "\xA";

	require_once('PHPMailer-master/class.phpmailer.php');

	$email = new PHPMailer();
	$email->FromName  = 'GreyBox Online Quiz';
	$email->Subject   = 'Inscription';
	$email->Body      = "Email : " . $_POST['from'] . $end_line . $end_line . "Score : " . $_POST['score'] . "/6" ;
	
	$email->AddAddress( 'nicstaubin@gmail.com' );
	
	if(!$email->send()) {
	    echo 'Your inscription could not be sent.';
	} else {
	    echo 'success';
	}

?>