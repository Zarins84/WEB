<?
include 'dataB.php';

if (isset($_POST['submit'])) {


        $Nosaukums = $_POST['Nosaukums'];
        $Produkta_teksts = $_POST['Produkta_teksts'];
        $Bilde = $_POST['Bilde'];
        $Cena = $_POST['Cena'];
        $Skaits = $_POST['Skaits'];
        
        
        $sql = "INSERT INTO Produkts (Nosaukums, Produkta_teksts, Bilde, Cena, Skaits) 
        VALUES ('$Nosaukums','$Produkta_teksts','$Bilde','$Cena','$Skaits')";

        if ($conn->query($sql) === TRUE) {
            echo "Dati pievienoti, dodieties uz sadaļu Produkti, lai redzētu pievienoto produktu";
        }else{
            echo "Neizdevās";
            mysqli_error($conn);
        }

    }



?>