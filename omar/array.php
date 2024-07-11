
<?php

$colors = array('red', 'green', 'white');

$color1 = $colors[0];
$color2 = $colors[1];
$color3 = $colors[2];


$paragraph = "The memory of that scene for me is like a frame of film forever frozen at that moment: the $color1 carpet, the $color2 lawn, the $color3 house, the leaden sky. The new president and his first lady. Richard M. Nixon";


echo $paragraph;
?>
<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<h1>This is a Heading</h1>
<p>This is a paragraph.</p>

<ul>
    <?php
    //1
$colors=array('white','green','red');

for($i=0;$i<count($colors);$i++){
   echo "<li>".$colors[$i]."</li>";
}

?>
</ul>
</body>
</html>
<?php
//2
$cities = array(
    "Italy" => "Rome", 
    "Luxembourg" => "Luxembourg", 
    "Belgium" => "Brussels",
    "Denmark" => "Copenhagen", 
    "Finland" => "Helsinki", 
    "France" => "Paris",
    "Slovakia" => "Bratislava", 
    "Slovenia" => "Ljubljana", 
    "Germany" => "Berlin", 
    "Greece" => "Athens", 
    "Ireland" => "Dublin", 
    "Netherlands" => "Amsterdam", 
    "Portugal" => "Lisbon",
    "Spain" => "Madrid"
);

asort($cities);

foreach ($cities as $c => $ca) {
    echo "The capital of $c is $ca<br>";
}
?>


<?php
//5
$color=array(
    4=>'whith',
    6=>'green',
    11=>'red');
reset($color);
$o=current($color);
echo$o;
?>



<?php
//5
echo"<br>";
$num=array( 1,2,3,5,6,7);
$num4=4;
$pos=3;
foreach($num as$x){
echo$x;
}
echo"<br>";
array_splice($num,$pos=3,0,$num4=4);

foreach($num as$x){
    echo$x;
    }
    echo"<br>";
?>
<?php
//6
$fruits = array(
    "d" => "lemon", 
    "a" => "orange", 
    "b" => "banana", 
    "c" => "apple"
);
asort($fruits);
foreach($fruits as $a =>$b){
    echo$a ." ".$b." <br>";
}



?>
<?php
//7
$num3 = array(
    78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62,
    65, 64, 68, 73, 75, 79, 73
    
);
$sum=0;
$count=0;
foreach($num3 as $a ){
 $sum +=$a;
 $count++;
}

echo$sum/$count." <br>";



sort($num3);
for($i=0;$i<=6;$i++){

        echo $num3[$i] . "  ";
    
}
for($r=$count;$r>=$count-8;$r--){

    echo $num3[$r] . "  ";

}
?>

<?php
$a1 = array("color" => "red", 2, 4);
$a2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
print_r(array_merge($a1,$a2));


$r = $a1 +$a2;
print_r(asort($r));
?>
<?php
//9
$colors = array("red", "green", "blue", "yellow");
for($i=0;$i<count($colors);$i++){

   $colors[$i]= strtoupper($colors[$i]);
echo $colors[$i]."<br>";
}



?>
<?php
//10
$colors = array("red", "green", "blue", "yellow");
for($i=0;$i<count($colors);$i++){

   $colors[$i]= strtolower($colors[$i]);
echo $colors[$i]."<br>";
}



?>
<?php
//11
echo "<br>";
echo "<br>";
$u=array();
for($i=200;$i<251;$i++){
    if($i%4==0){
    $u[]=$i;
    echo $i. ",";
    }

}




?>
<?php
//12
echo "<br>";
echo "<br>";
$farray=array("abcd", "abc", "de", "hjjj", "g", "wer");
$sarray=array_map('strlen',$farray);
echo "shortest".min($sarray)."<br>";
echo "longest".max($sarray)."<br>";
?>

<?php
//13
$a1=5;
$a2=20;
$num=rand($a1,$a2);
echo $num;

echo "<br>";
echo "<br>";
?>








<?php
//14
echo "<br>";
echo "<br>";
$tarray = array(-1, 0, 1, 12, -100, 1);


$ttarray = array_filter($tarray, function($value) {
    return $value != 0;
});

$min = min($ttarray);

echo $min . "\n";
?>

<?php
//15
echo "<br>";
$y = array(5, 3, 1, 3, 8, 7, 4, 1, 1, 3);
rsort($y);
print_r($y);
echo "<br>";


?>
<?php
//16
echo "<br>";

function ii($n, $p, $s) {
    $m = pow(10, $p);
    $f = floor($n * $m) / $m;
    return number_format($f, $p, $s, '');
}

$n = 1.155;
$p = 2;
$s = ".";
echo ii($n, $p, $s) . "\n"; 
echo "<br>";
$n = 100.25781;
$p = 4;
$s = ".";
echo ii($n, $p, $s) . "\n"; 
echo "<br>";
$n = -2.9636;
$p = 3;
$s = ".";
echo ii($n, $p, $s) . "\n"; 
echo "<br>";
?>
<?php
//17
$list1 = "4, 5, 6, 7";
$list2 = "4, 5, 7, 8";
$array1=explode(", ",$list1);
$array2=explode(", ",$list2);
$marray = array_unique(array_merge($array1, $array2));
$larray=implode(", ",$marray);
echo $larray;
echo "<br>";
?>
<?php
echo "<br>";
//18
$list1 = "4, 5, 6, 7, 4, 7, 8 ,9 ,10 , 14";
$array1=explode(", ",$list1);
$marray = array_unique($array1);
$larray=implode(", ",$marray);
echo $larray;
?>
<?php
echo "<br>";
//19


function isSubset($subset, $superset) {
    return empty(array_diff($subset, $superset));
}


$subset = [1, 2, 3];
$superset = [1, 2, 3, 4, 5];

if (isSubset($subset, $superset)) {
    echo " is a subset";
} else {
    echo "is not a subset";
}
echo "<br>";
//19
?>




