<?php
include("connect.php");

    $name= $_POST['name'];
    $status= $_POST['status'];
    
    $query= "INSERT INTO coders_list(name,status) VALUES('$name','$status')";
    $result= $connect->query($query);

    if($result){
        echo "Add New Coder is OK";
    }
    else{
        echo "Add New Coder ERROR";
    }

    $connect->close();
?>

