<?php
$r='';
for ($i = 0; $i <= 10; $i++) {
   $r.=$i ;
   if($i<10){
    $r.='-';
   }
    
}
echo $r;
echo "<br>";

$T=0;
for($i=0;$i<=30;$i++){
    $T=$T+$i;

}
echo $T;

echo "<br>";

?>
<?php
$o = ['a', 'b', 'c', 'd', 'e'];
for ($p = 0; $p < 5; $p++) {
    for ($y = 0; $y < 5; $y++) {
   s     if ($y < 4 - $p) {
            echo " a";
        } else {
            echo " " . $o[$p];
        }
    }
    echo "<br>";
}
?>
<?php
$o =[1,2,3,4,5];
for ($p = 0; $p < 5; $p++) {
    for ($y = 0; $y < 5; $y++) {
        if($p>3-$y){
            echo $o[$p];
}
        else{ echo "1";}
    }
    echo "<br>";
}
?>


<?php

for ($p = 1; $p < 6; $p++) {
    for ($y = 1; $y < 6; $y++) {
        if($p==$y){
            echo $p;
}
        else{ echo "0";}
    }
    echo "<br>";
}
?>
<?php
$a=1;
$b=0;
$r=5;
$z = 0;
for($n=0;$n<=$r;$n++){
   $e=$a+$b;
   $z=$e+$a;
   
}
 echo $z;

?>


