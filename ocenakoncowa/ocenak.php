<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Ocena koncowa</title>
</head>
<body>

   <?php
    
    $procent = 65;
    
        if($procent < 39)
    {
        echo "Otrzymałeś 1";
    }
    elseif($procent > 40 and $procent <54)
    {
        echo "Otrzymałeś 2";
    }
        elseif($procent > 55 and $procent <69)
    {
        echo "Otrzymałeś 3";
    }
    elseif($procent > 70 and $procent <84)
    {
        echo "Otrzymałeś 4";
    }
    elseif($procent > 85 and $procent <94)
    {
        echo "Otrzymałeś 5";
    }
    elseif($procent > 95 and $procent <100)
    {
        echo "Otrzymałeś 6";
    }
    
echo "<hr>";
    $Ksiazka = "Adam Mickiewicz";

  switch($Ksiazka)
    {
        case "Dziady część 1":
            echo "Adam Mickiewicz";
            break;
        case "Dziady część 2":
            echo "Adam Mickiewicz";
            break;
        case "Dziady część 3":
            echo "Adam Mickiewicz";
            break;
        case "Dziady część 4":
            echo "Adam Mickiewicz";
            break;
        case "Lalka":
            echo "Bolesław Prus";
            break;
        default:
        echo "Czytaj ksiazki";
     }    
    ?>




</body>
</html>