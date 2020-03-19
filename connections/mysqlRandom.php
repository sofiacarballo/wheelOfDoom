<?php
include("connect.php");

$query="SELECT * FROM coders_list WHERE status='Alive'ORDER BY RAND() LIMIT 1";
$result= $connection->query($query);
while($row=$result->fetch_assoc()){
?> 
<?php 
echo $row['name']; 
return $row['id'];
}?>