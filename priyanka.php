<?php

$dblocahost  = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "pooja_nale";
// $connection = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);

$connection = mysqli_connect($dblocahost ,$dbuser,$dbpass,$dbname);
error_reporting(0);

if($connection)
{
    echo " connected ";
}
else
{
    echo "not connected";
}
?>