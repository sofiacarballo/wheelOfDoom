<?php
include("connect.php");

$query="SELECT * FROM coders_list WHERE status='Dead'";
$result= $connection->query($query);
while($row=$result->fetch_assoc()){
?> 
<?php echo $row['name']; }?>