<html>
<head>
<link rel="shortcut icon" href="https://www.canadianginsengfarm.com/wp-content/uploads/2018/03/Product-Icon.png">
<title>Produkti</title>
<?php
include "dataB.php";
include 'header.php';

$sql = "SELECT * FROM Produkts";
$result = $conn-> query ($sql);

if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_assoc()) {
        $Nosaukums = $row['Nosaukums'];
        $Bilde = $row['Bilde'];
        $Produkta_ID = $row['Produkta_ID'];
        ?>
        <?php echo "<a href='single_product.php?Produkts=" . $Produkta_ID ."'>" ?>
        <h1><?php echo $Nosaukums ?></h1>
        <img src="<?php echo $Bilde ?>" alt="<?php echo $Nosaukums ?>" width="300">
        <?php
        }
}else {
        echo "nav rezultātu";
}
$conn-> close();
?>
</head>
</html>