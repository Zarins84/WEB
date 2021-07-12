<!DOCTYPE html>
<html>
<link rel="shortcut icon" href="https://www.pngkey.com/png/full/13-135230_person-icon-natural-environment.png">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

.container {
  padding: 16px;
}

.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
<body>
<meta name="viewport" content="width=device-width, initial-scale=0.8">

<form action="/WEB/" style="border:1px solid #ccc">
  <div class="container">
    <h1>Reģistrēšanās</h1>
    <p>Ievadiet visu nepieciešamo informāciju lai veiktu reģistrāciju</p>
    <hr>
    
    <label for="vards"><b>Vārds</b></label>
    <input type="text" placeholder="Ievadiet savu vārdu" name="name" required
    oninvalid="this.setCustomValidity('Nav ievadīts vārds')"
    oninput="setCustomValidity('')">

    <label for="email"><b>E-pasts</b></label>
    <input type="text" placeholder="Ievadiet savu E-pastu" name="email" required
    oninvalid="this.setCustomValidity('Nav ievadīts E-pasts')"
    oninput="setCustomValidity('')">

    <label for="psw"><b>Parole</b></label>
    <input type="password" placeholder="Ievadiet paroli" name="psw" required
    oninvalid="this.setCustomValidity('Nav ievadīta parole')"
    oninput="setCustomValidity('')">

    <label for="psw-repeat"><b>Atkārtojiet paroli</b></label>
    <input type="password" placeholder="Atkārtoti ievadiet paroli" name="psw-repeat" required
    oninvalid="this.setCustomValidity('Atkārtoti ievadiet paroli')"
    oninput="setCustomValidity('')">

    <div class="clearfix">
      <button type="button" class="cancelbtn">Atcelt</button>
      <button type="submit" class="signupbtn">Reģistēties</button>
    </div>
  </div>
</form>

</body>
</html>
