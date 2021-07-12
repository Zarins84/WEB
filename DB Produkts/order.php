<html>
<head>
<link rel="shortcut icon" href="https://www.canadianginsengfarm.com/wp-content/uploads/2018/03/Product-Icon.png">
<title>Produkta pirkuma veikšana</title>
<a href="http://zarins.atwebpages.com/Produkts/izvade_produkta.php">Atpakaļ pie precēm</a>
<?php

        $Produkta_ID = $_GET['Produkta_ID'];
        $Nosaukums = $_GET['Nosaukums'];
        $Cena = $_GET['Cena'];
?>

<h1>Jūsu pirkums</h1>
<h3><?php echo $Nosaukums . " cena " . $Cena . " € " ?></h3>
<h2>Ievadiet Sūtijuma datus lai veiktu pirkumu:</h2>
<form method="post">
        <input type="text" name="Vards" Placeholder="Vārds">
        <input type="text" name="Uzvards" Placeholder="Uzvārds">
        <input type="text" name="Epasts" Placeholder="E-pasts">
        <input type="text" name="Tel_num" Placeholder="Telefona num">
        <input type="text" name="Valsts" Placeholder="Valsts">
        <input type="text" name="Pilseta" Placeholder="Pilsēta">
        <input type="text" name="Iela" Placeholder="Iela">
        <input type="text" name="Pasta_indekss" Placeholder="Pasta indekss">
        <input type="submit" name="submit" Placeholder="Iesniegt">
</form>

<?php
include 'dataB.php';
if(isset($_POST['submit'])){
        $Vards = $_POST['Vards'];
        $Uzvards = $_POST['Uzvards'];
        $Epasts = $_POST['Epasts'];
        $Tel_num = $_POST['Tel_num'];
        $Valsts = $_POST['Valsts'];
        $Pilseta = $_POST['Pilseta'];
        $Iela = $_POST['Iela'];
        $Pasta_indekss = $_POST['Pasta_indekss'];
        
        $sql = "INSERT INTO Adrese (Valsts, Pilseta, Iela, Pasta_indekss) VALUES ('$Valsts','$Pilseta','$Iela','$Pasta_indekss')";
        if(mysqli_query($conn,$sql)){
           echo "dati pievienoti";
        }else{
           echo "Neizdevās";
           mysqli_error($conn);
        }
        
        $sqlGet = "SELECT * FROM Adrese Where Iela like '$Iela'";
        $result = $conn -> query($sqlGet);
        while($row = $result->fetch_assoc()){
           $Adrese_ID = $row['Adrese_ID'];
        }
        
        $sqlUser = "INSERT INTO Klients (Vards, Uzvards, Epasts, Tel_num, Adrese_ID) VALUES ('$Vards','$Uzvards','$Epasts','$Tel_num','Adrese_ID')";
        if(mysqli_query($conn,$sqlUser)){
           echo "dati pievienoti";
        }else{
           echo "Neizdevās";
           mysqli_error($conn);
        }
        
        $sqlGetCust = "SELECT * FROM Klients WHERE Uzvards like '$Uzvards' AND Tel_num like '$Tel_num'";
        $result2 = $conn -> query($sqlGetCust);
        while($row = $result2->fetch_assoc()){
           $Klienta_ID = $row['Klienta_ID'];
        }
        
        $sqlOrder = "INSERT INTO Order (Klienta_ID, Produkta_ID, Adrese_ID) VALUES ('$Klienta_ID','$Produkta_ID','$Adrese_ID')";
        if(mysqli_query($conn,$sqlOrder)){
           echo "dati pievienoti";
        }else{
           echo "Neizdevās";
           mysqli_error($conn);
        }
}
?>
</head>
</html>
        
        
        
        
