<?php

$con=new mysqli('localhost', 'root', '', 'reservation');

if(!$con){
    die(mysqli_error($con));
}

?>