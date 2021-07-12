<?php
include 'dataB.php';

$sql = "SELECT * FROM header";
$header = $conn->query($sql);
if($header-> num_rows > 0){
echo "<ul>";
while($frow=$header->fetch_assoc()){
        $name = $frow['name'];
        $url = $frow['url'];
        $icon = $frow['icon'];

echo "<li><a href='$url'><img src='$icon' alt='$name' style= 'max-width:20px;'>". $name ."</a></li>";

}
echo "</ul>";
}
?>