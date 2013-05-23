<?php

require_once 'dbconnection.php';



if (!isset($_SERVER['PHP_AUTH_USER']) ||
    !isset($_SERVER['PHP_AUTH_PW'])) {
header('HTTP/1.1 401 Unauthorized');
header('WWW-Authenticate: Basic realm="Contact Form Messages"');
exit("Access restricted");
}

$request_user = sprintf("SELECT user_id, username FROM users".
                        "WHERE username = '%s' AND".
                        "      password = '%s';",

?>