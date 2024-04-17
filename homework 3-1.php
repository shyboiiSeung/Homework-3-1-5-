<?php
$n = 30;
$sum = 0;
$prod = 1;
for($i=1;$i<$n;$i++){
    echo $i , "+";
    $sum += $i;
}
$sum += 30;
echo "30 = $sum<br>";
for($i=1;$i<$n;$i++){
    echo $i , "*";
    $prod *= $i;
}
$prod *= 30;
echo "30 = $prod<br>";
?>