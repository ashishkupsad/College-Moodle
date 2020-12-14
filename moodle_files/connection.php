<?php

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "moodle";

//making connection to mysql
$dbc = mysqli_connect($hostname,$username,$password,$dbname) OR die("Could not connect to server, ERROR: ".mysqlli_connect_erroe());

//set encoding
mysqli_set_charset($dbc, "utf8");

//echo "Connected to ".$dbname."\n";


?>