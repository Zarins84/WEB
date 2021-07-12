<html lang="lv">
<head>
<link rel="shortcut icon" href="https://www.canadianginsengfarm.com/wp-content/uploads/2018/03/Product-Icon.png">
<body>
<?php include 'upgrade.html'; 
include 'header.php'; ?>
<div id="main">
        <meta charset="UTF-8">
        <title>Produktu ievade</title>
  
  
  <?php include 'produkts.php' ?>
    <form method="post">
    <input type="text" name="Nosaukums" id="Nosaukums" placeholder="Produkts">
    <input type="text" name="Produkta_teksts" id="Produkta_teksts" placeholder = "Produkta apraksts">
    <input type="text" name="Bilde" id="Bilde" placeholder="Produkta attēls">
    <input type="text" name="Cena" id="Cena" placeholder = "Produkta cena">
    <input type="text" name="Skaits" id="Skaits" placeholder="Produktu daudzums">
   
    <input type="submit" name="submit" value="Saglabāt">
</form>
</div>
</body>
</head>
</html>