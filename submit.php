<html>
<head>
<title>
Form submitted
</title>

</head>
<body>
<?php

// Connect to database
require 'dbconnect.php';

//require_once 'config.php';

// Get information from form

$name = trim($_REQUEST['name']);
$email = trim($_REQUEST['email']);
$message = trim($_REQUEST['message']);

// Submit information to database

$insert_new_message = "INSERT INTO /*$dbprefix*/messages (
                       sender_name, sender_email, sender_message)
                VALUES ('".mysql_real_escape_string($name)."',".
                        "'".mysql_real_escape_string($email)."',".
                        "'".mysql_real_escape_string($message)."');";

mysql_query($insert_new_message)
  or die(mysql_error());

// Explain form on webpage

echo "
The form that you submitted contained:<br>
Name: $name<br>
Return email address: $email<br>
Message:<br>$message
";

?>
</body>
</html>