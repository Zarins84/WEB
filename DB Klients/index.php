<html lang="lv">
<head>
<link rel="shortcut icon" href="https://img.icons8.com/emoji/452/laptop-emoji.png">
<body>
        <meta charset="UTF-8">
        <title>Laptopu ekrānu datubāze</title>


</head>
<body>
<div id="main">
<?php include 'upgrade.html';?>
        <form method="post">
                <input type="text" name="Vards" id="Vards" placeholder="Vārds"><br>
                <input type="text" name="Uzvards" id="Uzvards" placeholder="Uzvārds"><br>
                <input type="text" name="Epasts" id="Epasts" placeholder="E-pasts"><br>
                <input type="text" name="Tel_num" id="Tel_num" placeholder="Telefona num"><br>
                <input type="submit" value="ievietot">
        </form>
        <?php
include 'klients.php';
?>
</div>        
</body>
</head>
</html>