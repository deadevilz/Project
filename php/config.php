<?php

$hostname = "localhost";
$username = "root";
$password = "deadsiter";
$db_name = "tumor_conference";

$objConnect = mysql_connect($hostname,$username,$password) or die (mysql_error());
mysql_select_db($db_name,$objConnect)or die (mysql_error());
mysql_query("SET character_set_results=UTF-8");
mysql_query("SET character_set_client=UTF-8");
mysql_query("SET character_set_connection=UTF-8");
mysql_query("SET NAMES UTF-8");

//echo "completed";



?>