<?php
$items = ['where', 'is', 'my', 'money'];
$sum = 0;

for($i = 10;$i < 100;$i++){
    if(($i %5 == 0) && ($i % 3 ==0)){
        shuffle($items);
        break;
    }else if($i % 3 ==0){
        echo $i . " делится на 3 без остатка!<br>";
        break;
    }else if($i%5 == 0){
        $sum +=$i;
        break;
    }
}
var_dump($items);
echo "<br>А sum всё-таки равно $sum";