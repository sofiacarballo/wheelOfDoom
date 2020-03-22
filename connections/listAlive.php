<?php
include("connect.php");

$query="SELECT * FROM coders_list WHERE status='Alive'";
$result= $connect->query($query);
while($row=$result->fetch_assoc()){
?> 
<?php echo '<tr><td>' . $row['name'] . '</td></tr>';
 }
$connect->close();

 ?>