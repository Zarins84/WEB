 <html>
 <link rel="shortcut icon" href="https://images.vexels.com/media/users/3/128132/isolated/preview/fa3b9aad78a9db81459bd03294a0f985-flat-laptop-icon-design-by-vexels.png">
 <div class="container">
    <head>
    <style>
    table {
    width: 100%;
}
td {
    vertical-align: top;
}
.d1 {
    text-align: left;
}
.d2 {
    text-align:center;
}
.d3 {
    text-align:right;
}
.copy {
    visibility: hidden;
}
.copy, .d3 {
    white-space: nowrap;
}
    @media print {
  body * {
    visibility: hidden;
  }
  .print-container, .print-container * {
    visibility: visible;
  }
}
    </style>
        <title> Laptopi </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include "upgrade.php" ?>

    </head>
    <div class="row print-container">
    <body background="https://wallpaper.dog/large/5486750.png">
        <h1 style="color:green; text-align:center">Laptop ekrānu mājaslapa</h1>
        <table>
        <tr>
        <td>
        Ievadiet laptopa modeli:
<form action="" method="post">
<input type="text" name="search" required
oninvalid="this.setCustomValidity('Ievadiet Laptopa modeli')"
    oninput="setCustomValidity('')">
<input type="submit" name="submit" value="Atrast">
<?php
include 'insert.php';
?>
</form>
        </td>
        <!--<h2 style="color: black; text-align:center; font-family: Garamond, serif"><u>ši lapa ir paradzēta paraiza laptopa atrašanai,<br> kādu vēlaties iegādāties.</u></h2>-->
        <td class="d2"><p style="text-align:center"><button onclick="document.getElementById('myImage').src='laptop_on.png'">Ieslēgt datoru</button>

<img id="myImage" src="laptop_off.png" style="width:250px">

<button onclick="document.getElementById('myImage').src='laptop_off.png'">Izslēgt datoru</button><br></td></div>
<td><h3>Laptopi, Kurus var uzmeklēt:<br>
Acer Nitro 5 AN515;<br>
ACER Aspire A514;<br>	
Asus VivoBook M433IA;<br>
ASUS ROG Zephyrus G14;<br>
Apple MacBook Air (2020);<br>
Lenovo IdeaPad Gaming 3;<br>
Lenovo Legion Y530;<br>
MSI GL65 Leopard;<br>
Razer Blade Pro 17 RZ09;<br>
HP Omen 15.
</h3>
</td>
</tr>
</table>
    </body>
    </div>
    </html>
