<!DOCTYPE html>
<html>
<head>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:15px;
  opacity: 0.8;
}

.form-container .cancel {
  background-color: red;
}

.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}

</style>
</head>
<body>
<button class="open-button" onclick="openForm()">Pievienoties</button>

<div class="form-popup" id="myForm">
  <form action="/WEB/" class="form-container">

    <label for="email"><b>E-pasts</b></label>
    <input type="text" placeholder="Enter Email" name="email" required
    oninvalid="this.setCustomValidity('Nav ievadīts e-pasts')"
    oninput="setCustomValidity('')">

    <label for="psw"><b>Parole</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required
    oninvalid="this.setCustomValidity('Nav ievadīta parole')"
    oninput="setCustomValidity('')">
    
    <a href="http://zarins.atwebpages.com/WEB/register.php">Reģistrēties</a>
    <button type="submit" class="btn">Pievienoties</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Aizvērt</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

</body>
</html>
