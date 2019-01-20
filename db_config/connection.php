<?php
$server='localhost';
$user='root';
$password="";
$db="online_examination";

$con=mysqli_connect($server,$user,$password,$db);
if(!$con)
{
die("error is because".mysqli_connect_error());
}
?>