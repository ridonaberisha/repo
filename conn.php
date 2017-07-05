<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="fly"; // Database name 
//$db_name="dardalink";
//echo $host.$db_name;

mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
$con=mysqli_connect("$host", "$username", "$password","$db_name")or die("cannot connect"); 



?>