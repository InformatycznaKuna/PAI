<?php 
$zmienna=-1;
$zmienna2=-2;
 
for($i=0;$i<=8;$i++) {
    $zmienna++;
    $zmienna2++; 
      
    for($j=0;$j<=$i;$j++) {
     
        if($i==1 && $j==0){
            echo '-';
        }elseif($j>=1 && $j<=$zmienna2 && $i==$zmienna){ 
            echo '-';
        }else{ 
            echo '*';
        }
         
    }
    echo '<br />';
}
?>
