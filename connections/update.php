<?php
include ("connect.php");

$sql = "UPDATE coders_list SET status='Alive' WHERE id=1";
    if(mysqli_query($connect,$sql)){
        echo "OK Update.";
    } else {
        echo "ERROR: No Update. ";
}

?>
