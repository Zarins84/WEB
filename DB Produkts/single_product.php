<html>
<head>
<link rel="shortcut icon" href="https://www.canadianginsengfarm.com/wp-content/uploads/2018/03/Product-Icon.png">
<title>Produkti</title>
<a href="http://zarins.atwebpages.com/Produkts/izvade_produkta.php">Atpakaļ uz sarakstu</a>
<?php
if(isset($_GET['Produkts'])){
$Produkts = $_GET['Produkts'];
}
include 'dataB.php';

        $sql = "SELECT * FROM Produkts WHERE Produkta_ID like $Produkts";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        
        while($row = $result->fetch_assoc()) {
        $Nosaukums = $row['Nosaukums'];
        $Produkta_teksts = $row['Produkta_teksts'];
        $Bilde = $row['Bilde'];
        $Cena = $row['Cena'];
        $Skaits = $row['Skaits'];
        $Produkta_ID = $row['Produkta_ID'];
        
        ?><h1><?php echo $Nosaukums ?></h1><?php
        ?><img src = "<?php echo $Bilde ?>" alt="<?php echo $Nosaukums ?>" width="300"><?php
        ?><p><?php echo $Produkta_teksts ?></p><?php
        ?><li><?php echo "Cena " .$Cena. " eir" ?></li><?php
        ?><li><?php echo "Produktu Skaits " .$Skaits ?></li><?php
        
        }
}
?>
<?php

$data = array(
        'Produkta_ID' => $Produkta_ID,
        'Nosaukums' => $Nosaukums,
        'Cena' => $Cena
 );
 
 echo "<a href='order.php?" . http_build_query($data)."'>Pirkt</a>" 
 ?>
</head>
</html>