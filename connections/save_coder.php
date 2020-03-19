<?php
include("connection.php");

    $name= $_POST['name'];
    $status= $_POST['status'];
    
    $query= "INSERT INTO coders_list(name,status) VALUE('$name','$status')";
    $result= $connection->query($query);

    if($result){
        echo "Add New Coder is OK";
    }
    else{
        echo "Add New Coder ERROR";
    }
?>