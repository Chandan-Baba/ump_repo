<?php
 require_once "Mail.php";
 
 $from = "feedback@umpwomenindia.com";
 $to = "ujwalaprabhakar@gmail.com";
 $subject = "Hi!";
 $body = "Hi,\n\nHow are you?";
 
 $host = "mail.umpwomenindia.com";
 $username = "ujwalaprabhakar@gmail.com";
 $password = "L!ox#123";
 
 $headers = array ('From' => $from,
   'To' => $to,
   'Subject' => $subject);
 $smtp = Mail::factory('smtp',
   array ('host' => $host,
     'auth' => false));
 
 $mail = $smtp->send($to, $headers, $body);
 
 if (PEAR::isError($mail)) {
   echo("<p>" . $mail->getMessage() . "</p>");
  } else {
   echo("<p>Message successfully sent!</p>");
  }
 ?>