<?php

require_once 'dbconnect.php';
require_once 'authenticate.php';

$select_messages =
  "SELECT message_id, sender_name, sender_email,".
  "sender_message FROM messages";

$result = mysql_query($select_messages);

/*
if ($result) {
  $row = mysql_fetch_array($result);
  $id  = $row['message_id'];
  $name = $row['sender_name'];
  $email = $row['sender_email'];
  $message = $row['sender_message'];
*/

?>

<html>
<head>
<title>
Messages
</title>

</head>
<body>

<div>
 <ui>

  <?php
   while ($message = mysql_fetch_array($result)) {
      $message_row = sprintf(
       "<li>Message ID: %s".
       "<br>Sender's name: %s".
       "<br>Sender's supplied Email address: %s".
       "<br>Message: %s</li>",
         $message['message_id'],
         $message['sender_name'],         
         $message['sender_email'],
         $message['sender_message']);
      echo $message_row;
   }
  ?>  

 </ui>
</div>

</body>
</html>