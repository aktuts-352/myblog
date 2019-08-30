<?php

$server="localhost";
$db_user="root";
$db_pass="";
$database="portfolio";
$con=mysqli_connect($server,$db_user,$db_pass,$database);
if(!$con)
{
die("Connection failed" . mysqli_connect_error());
}
else
/*{
echo "database connection successful";
}*/
?>


