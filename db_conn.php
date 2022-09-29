<?php

$localhost="localhost";
$uname="root";
$password="";
$dbname="to-do-list";

try
{
    $conn= new PDO("mysql:host=$localhost;dbname=$dbname",$uname,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo "Connected Failed : ". $e->getMessage();
}

?>