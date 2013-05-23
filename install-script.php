<?php

require 'dbconnect.php';

// Get user account information from installation form

$new_admin_username = trim($_REQUEST['new_admin_username']);
$new_admin_password = trim($_REQUEST['new_admin_password']);

// Create the user table

$create_user_table = "
CREATE TABLE /*$dbprefix*/users (
     user_id    int           AUTO_INCREMENT PRIMARY KEY,
     username   varchar(30)   NOT NULL,
     password   varchar(30)   NOT NULL
     );
";

mysql_query($create_user_table)
  or die(mysql_error());

// Create table for storing messages

$create_message_table = "
CREATE TABLE /*$dbprefix*/messages (
    message_id      int           AUTO_INCREMENT PRIMARY KEY,
    sender_name     varchar(50)   NOT NULL,
    sender_email    varchar(50)   NOT NULL,
    sender_message  varchar(2000) NOT NULL
    );
";

mysql_query($create_message_table)
  or die(mysql_error());

// Create user account

$new_admin_create_account = "INSERT INTO /*$dbprefix*/users (username, password)".
            "VALUES ('".mysql_real_escape_string($new_admin_username)."',".
                    "'".mysql_real_escape_string($new_admin_password)."');";

mysql_query($new_admin_create_account)
  or die(mysql_error());

?>