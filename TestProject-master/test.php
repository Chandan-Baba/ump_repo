<?php
 require_once "Mail.php";
 
 $from = "feedback@umpwomenindia.com";
 $to = "ujwalaprabhakar@gmail.com";
 $subject = "Hi!";
 $body = "Hi,\n\nHow are you?";
 
 $host = "mail.umpwomenindia.com";
 $username = "umpwomenindia@umpwomenindia.com";
 $password = "umpwomenindia@umpwomenindia.com";
 
 $headers = array ('From' => $from,
   'To' => $to,
   'Subject' => $subject);
 $smtp = Mail::factory('smtp',
   array ('host' => $host,
     'auth' => true,
     'username' => $username,
     'password' => $password));
 
 $mail = $smtp->send($to, $headers, $body);
 
 if (PEAR::isError($mail)) {
   echo("<p>" . $mail->getMessage() . "</p>");
  } else {
   echo("<p>Message successfully sent!</p>");
  }
 ?>