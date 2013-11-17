<?php

// mysql hostname
$db_host = "localhost";

// mysql user
$db_user = "root"

// database name
$db_name = "fall2103";

// database password
$db_pass = "rakrura";

mysql_connect($db_host, $db_name, $db_pass) OR DIE ("Unable to 
            connect to database! Please try again later.");
            mysql_select_db($dbname);

?>
