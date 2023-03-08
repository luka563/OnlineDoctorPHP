<?php


$serverName="localhost";
$dBUerName="root";
$dBPassword="";
$dBName="baza";


$conn = mysqli_connect($serverName,$dBUerName,$dBPassword,$dBName);

if(!$conn)
{
    die("Connection failed:".mysqli_connect_error());
    
}