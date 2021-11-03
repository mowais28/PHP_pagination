<?php
$host= 'localhost';
$username = 'root';
$password = '';
$database = 'prectice';
$connnect = mysqli_connect($host,$username,$password,$database);
if(!$connnect){
    echo 'Failed to Connect Database';
}

?>