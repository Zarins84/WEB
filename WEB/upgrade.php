<!DOCTYPE html>
  <html>
    <head>
    <?php include "popup.php" ?>
	<style>
body {
  position: relative;
  padding-bottom: 6rem;
  min-height: 90%;
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: blue;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
  <meta name="viewport" content="width=device-width, initial-scale=0.6">
<div class="navbar">
<div style="color: #00ffff">
<?php
date_default_timezone_set('Europe/Riga');
$working_hours = json_decode('{"1" : "10:00 - 16:00", "2" : "17:00 - 22:00"}');
$is_open = false;
$time = time();

foreach ($working_hours as $key=>$value)
{
   $working_hour = explode(" - ", $value);
   $from = strtotime($working_hour[0]);
   $to = strtotime($working_hour[1]);

   if ($time >= $from && $time <= $to)
   {
       $is_open = true;
       break;
   }    
}

if($is_open)
   echo "Veikals ir atvērts";
else
   echo "Veikals ir aizvērts";

?>
  <a href="http://zarins.atwebpages.com/WEB"><img src="https://cdn.pixabay.com/photo/2017/09/13/17/45/laptop-2746336_960_720.png" witdh="20" height="20"></a>
  <a href="http://zarins.atwebpages.com/WEB/preces.php">Info</a>
  <div class="dropdown">
    <button class="dropbtn">informatīvie materiāli 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="https://www.konozime.lv/laptops/" target="_blank">Ko nozīmē vārds laptops?</a>
      <a href="https://lv.wikipedia.org/wiki/Kl%C4%93pjdators" target="_blank">Kas ir laptops?</a>
      <a href="https://220.lv/lv/g/labakie-portativie-datori" target="_blank">Labākie laptopi</a>
    </div>
  </div> 
  <div style="color: #00ffff">Pareizs laiks:<div id="txt"></div></div>
  </div>
  <script>
function startTime() {
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('txt').innerHTML =
  h + ":" + m + ":" + s;
  var t = setTimeout(startTime, 500);
}
function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}
</script>
</head>

<body onload="startTime()">
</div>

</div>
</body>

