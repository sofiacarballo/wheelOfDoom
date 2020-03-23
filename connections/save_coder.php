<?php
include("connect.php");

    $name= $_POST['name'];
    $status= $_POST['status'];

    $query= "INSERT INTO coders_list(name,status) VALUES('$name','$status')";
    $result= $connect->query($query);

    header("Location: http://localhost/phpfactoriaf5/wheelOfDoomSofi2/index.php"); die();

    $connect->close();
?>