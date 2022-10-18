
<!DOCTYPE html>
    <head>
        <title>Wstaw Komentarz</title>
        <meta charset="utf-8">
    </head>
    <body>
  <h1> Wstaw komentarz</h1><hr><br>
<form action="" method="POST">

Pseudonim <input type="text" name="pseudo" /><br>
<br>
Komentarz <textarea name='area'> </textarea><br>
<br>
<input type="submit" vaule="wyslij">
</form>

<?php

if(isset($_POST['pseudo'])){
echo "Pseudonim: " . htmlspecialchars($_POST['pseudo']) . "<br>"; }

if(isset($_POST['area'])){
    echo "Komenatrz: " . htmlspecialchars($_POST['area']) . "<br>" . $_POST['area'];
}

?>
<br>
	   <a href="form4.php" class="btn btn-primary ml-2" ml-3">Kolejne zadanie</a>
	   <br>

</body>