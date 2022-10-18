
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Strona</title>
</head>
<body>

	<?php

		function print_array($array) {
			for($i=0; $i<sizeof($array); $i++) {
				echo $array[$i];
				if($i != sizeof($array)-1) {
					echo ", ";
				}
			}
		}


		function main() {
			echo "<h3 style='margin-bottom: 1px;'>zad 1</h3>";

			$array_liczby = [13,10,16,28,34,98,56,77,9,30];
			$zdanie = " Bardzo Lubie jesc zupe pomidorową";
			
			print_array($array_liczby);
			echo "</br>".$zdanie."</br>";

			echo "<h3 style='margin-bottom: 1px;'>zad 2</h3>";

			$array_zdanie = explode(' ', $zdanie);
		}

		main();
		
		echo "<h3 style='margin-bottom: 1px;'>zad 3</h3>";

			echo "Ilość w array_liczby: ".count($array_liczby)."</br>";
			echo "Ilość w array_zdanie: ".count($array_zdanie)."</br>";
		
		echo "<h3 style='margin-bottom: 1px;'>zad 4</h3>";
		      $zdanie1 = array("orange", "banana");
            array_push($zdanie1, "apple", "raspberry");
            print_r($stack);
	?>

</body>
</html>
