<html lang="lv">
<head>
        <meta charset="UTF-8">
        <title>Laptopu</title>
<?php

include 'dataB.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$search_value=$_POST["search"];

$sql="select * from Laptop where Nosaukums like '%$search_value%'";

        $res=$conn->query($sql);

        while($row=$res->fetch_assoc()){
        
            $Nosaukums = $row["Nosaukums"];
            $Procesors = $row["Procesors"];
            $RAM = $row["RAM"];
            $Videokarte = $row["Videokarte"];
            $Bilde = $row["Bilde"];
            $Kur_atrast = $row["Kur_atrast"]
            
            ?><h4><a href = "<?php  echo $Kur_atrast ?>" target="_blank"><?php echo  $Nosaukums ?></a></h4><?php
            ?><img src = "<?php echo $Bilde ?>" alt="<?php echo $Nosaukums ?>" width="200"><?php
            ?><h4><?php echo "Procesors: ". $Procesors ?></h4><?php
            ?><h4><?php echo "RAM: ". $RAM ?></h4><?php
            ?><h4><?php echo "Videokarte: ". $Videokarte ?></h4><?php
            
            
            
        }   
   }
?>   
</head>
</html>