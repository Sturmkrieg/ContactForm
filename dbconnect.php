<?php

// Load the variables from config.php
require 'config.php';


// Connect to the database
mysql_connect($dbhost, $dbusername, $dbpassword)
  or die("<p>Database connection error".mysql_error()."</p>");

echo "Connected to MySQL";

mysql_select_db($dbname)
  or die("<p>Problem selecting the database<br>".mysql_error()."</p>");

echo "<br>Connected to the database";

?>