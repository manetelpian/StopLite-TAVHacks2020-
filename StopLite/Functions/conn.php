<?php 

//$host = "gohan.ad.nccu.edu:389";
//$user = "AD/PepperLookup";
//$password = "Aa9861hZyUTVY4sjljDMkgLSb7pUnmc1IU5iQUN2w86csamkSw1NxpKJsd0mCZo";
//DC=AD, DC=NCCU, DC=EDU

$server = "localhost";
$user = "root";
$password = "";
$DB = "stoplite";

$conn = mysqli_connect("$server", "$user", "$password", "$DB") or die("cannot connect");

?>