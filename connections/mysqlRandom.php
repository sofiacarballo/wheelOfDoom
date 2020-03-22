<?php
include("connect.php");

$query="SELECT * FROM coders_list WHERE status='Alive'ORDER BY RAND() LIMIT 1";
$result= $connect->query($query);

while($row=$result->fetch_assoc()){
?> 
<?php 
echo '<tr><td>' . $row['name'] . '</td></tr>';

return $row['id'];

header("Location: http://localhost/phpfactoriaf5/wheelOfDoom/index.php"); die();

$connect->close();
}
?>
