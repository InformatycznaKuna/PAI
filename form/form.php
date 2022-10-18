<html>

<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1> Formularz</h1><hr><br>

    <form>
        
       Podaj swoje imię: <input type="text" id="fname" name="fname" required><br>
        Podaj swoje nazwisko: <input type="text" id="lname" name="lname" required> <br>
        Podaj hasło: <input type="password" id="pass" required> <br>
		Powtórz hasło: <input type="password" id="apass" required> <br>
        Podaj email: <input type="email" required> <br> 
<br>
         Pamiętaj mnie <input type="checkbox" id="diebhfj" name="przycisk" value="submit"> <br>
		 
		<br>
		<br>
		<input type="submit" vaule="wyslij">
		<br>
		<br>
		<br>
		   <a href="form2.php" class="btn btn-primary ml-2" ml-3">Kolejne zadanie</a>
 
 
      </form>
<?php
    if(isset($_POST['submit'])) {

    $username = $_POST['userid'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$pass'";
    $result = mysqli_query($conn, $sql)  or die("Could not connect database " .mysqli_error($conn));

    if (!$row = $result->fetch_assoc()) {
      echo "<div class='login-form'>

          <h2>Błąd!</h2>
          Nazwa Użytkownika lub hasło jest nieprawidłowe.<br><br>
          Kliknij tutaj, żeby sie zalogować <a href='login.php'>Zaloguj Się</a></div>";
    }
  }
  ?>

</body>

   
</html>
