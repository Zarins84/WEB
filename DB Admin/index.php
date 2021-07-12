<html lang="lv">
<head>
<link rel="shortcut icon" href="https://pics.freeicons.io/uploads/icons/png/16096534681582799504-512.png">
        <title>Admin izvade</title>
        <body>
<meta charset="UTF-8">
<?php include 'upgrade.html' ?>
<div id="main">
<?php
include 'dataB.php';

$sql2 = "SELECT _Product.id, _Product.prheading, _Product.primg, _Product.prtxt,
_aboutus.id, _aboutus.headingab, _aboutus.img, _aboutus.text,
_header.id, _header.logo, _header.header1, _header.header2, _header.header3, _header.header4, _header.bgimg, _header.heading,
_contact.id, _contact.phone, _contact.adress, _contact.map
FROM _Product 
JOIN _aboutus 
ON _Product.id = _aboutus.id 
JOIN _header 
ON _header.id = _aboutus.id 
JOIN _contact 
ON _contact.id = _header.id";

$result = $conn -> query($sql2);

if($result -> num_rows > 0){
 while($row = $result -> fetch_assoc()){
         $hdlogo = $row['logo'];
         $hdh1 = $row['header1'];
         $hdh2 = $row['header2'];
         $hdh3 = $row['header3'];
         $hdh4 = $row['header4'];
         $hdbgimg = $row['bgimg'];
         $hdheading = $row['heading'];
         $hdabheading = $row['headingab'];
         $hdabimg = $row['img'];
         $hdabtxt = $row['text'];
         $hdprhead = $row['prheading'];
         $hdprimg = $row['primg'];
         $hdprtxt = $row['prtxt'];
         $hdcophone = $row['phone'];
         $hdcoadress = $row['adress'];
         $hdcomap = $row['map'];
         
         
?>
<style>
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 300px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.foot li {
  float: left;
  padding: 22px;
  list-style-type:none;
}
  
</style>  

<nav class="navbar navbar-default">
        <div>
        <div>
        <a href="#"><img src="<?php echo $hdlogo ?>" alt="logo" width="50"></a>
        </div>
        <ul class="nav navbar-nav">
                <li class="active"><a href="index.php"><?php echo $hdh1 ?></a></li>
                <li><a href="#"><?php echo $hdh2 ?></a></li>
                <li><a href="#"><?php echo $hdh3 ?></a></li>
                <li><a href="#"><?php echo $hdh4 ?></a></li>
        </ul>
        </div>
        </nav>
        
        <div>
                <img src="<?php echo $hdbgimg ?>" alt="<?php echo $hdheading ?>" style="width:100%; height:600px;">
                <h1 class="bg-text" style="position: absolute;
                top: 40%;
                left: 50%;
                color: #fff;"><?php echo $hdheading ?></h1>
         </div>
         
         <div class="container">
                 <div class="row">
                 <div class="column" style="background-color:#aaa">
                 <img src="<?php echo $hdabimg ?>" alt="<?php echo $hdabheading ?>" style="max=width:560px">
                 </div>
                 <div class="column" style="background-color:#bbb">
                 <h2><?php echo $hdabheading ?></h2>
                 <p><?php echo $hdabtxt ?></p>
                 </div>
                 </div>
                 <div class="row">
                 <div class="column" style="background-color:#aaa">
                 <h2><?php echo $hdprhead ?></h2>
                 <p><?php echo $hdprtxt ?></p>
                 </div>
                 <div class="column" style="background-color:#bbb">
                 <img src="<?php echo $hdprimg ?>" alt="<?php echo $hdprhead ?>" style="max=width:300px">
                 </div>
                 </div>
                 
                 <footer>
                         <ul class= "foot">
                         <li><?php echo $dbcophone ?></li>
                         <li><?php echo $dbcoadress ?></li>
                         <li><?php echo $dbcomap ?></li>
                         </ul>
                 </footer>
                         
         </div>
         </body>
         </head>
         </html>
         
         <?php
         
         }
}

?>
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                











