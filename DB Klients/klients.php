<html lang="lv">
<head>
<link rel="icon" href="laptop.png">
        <meta charset="UTF-8">
        <title>Laptopu ekrānu datubāze</title>
<?php   
        include 'dataB.php';
        
        $Vards = $_POST["Vards"];
        $Uzvards = $_POST["Uzvards"];
        $Epasts = $_POST["Epasts"];
        $Tel_num = $_POST["Tel_num"];

        $sql = "INSERT INTO Klients (Vards, Uzvards, Epasts, Tel_num)
        VALUES ('$Vards', '$Uzvards', '$Epasts', '$Tel_num')";
    
        if ($conn->query($sql) === TRUE) {
          echo "Klients " .$Vards. " " .$Uzvards. " - " .$Epasts. " " .$Tel_num. " veiksmīgi pievienots!";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }

$conn->close();

?>
</head>
</html>