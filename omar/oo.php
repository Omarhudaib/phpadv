<?php

$p = "omar";

function tou($p) {
    return strtoupper($p);
}

echo tou($p);

$p = "omar";

function tol($p) {
    return strtolower($p);
}

echo tol($p);


$p = "omar";

function too($p) {
    return ucwords($p);
}

echo too($p);


$p = "omar tareh cgnzn";

function top($p) {
    return ucwords($p);
}

echo top($p);

?>
<?php

$i = 507205;

function ti($i) {
   
    $is = strval($i);

    
    if (strlen($is) == 6) {
        
        $f = substr($is, 0, 2);
        $s = substr($is, 2, 2);
        $l = substr($is, 4, 2);
        
        
        return "$f:$s:$l";
    } else {
        return "Invalid input length";
    }
}


echo ti($i); 


?>
<?php

$i = "Hello, my name is Omar Hudaib.";
$O = "Omar";

function po($i, $O) {
    $is = strpos($i, $O);

    if ($is !== false) {
        return "The word '$O' was found at position $is.";
    } else {
        return "The word '$O' was not found.";
    }
}

echo po($i, $O);


?>


<?php
function getLastSegment($path) {

    $segments = explode('/', $path);


    $lastSegment = end($segments);

    return $lastSegment;
}


$path = "c/ou/omar/ali.html";
echo getLastSegment($path);
?>



?>


<?php
function email($pa) {

    $se = strpos($pa,'@' );

    if ($se !== false) {
      
        $us= substr($pa, 0, $se);
        return $us;
    } 
}

$pa = "omar@gmail.com";
echo email($pa);
?>






<?php
function com($pa) {

    $se = strpos($pa,'.' );

    if ($se !== false) {
      
        $us= substr( $pa,$se+1);
        return $us;
    } 
}

$pa = "omar@gmail.com";
echo com($pa);
?>
<?php
function ge($length ) {

    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+';

    $password = '';
    for ($i = 0; $i < $length; $i++) {
    $randomIndex = random_int(0, strlen($chars) - 1);
    $password .= $chars[$randomIndex];
    }


    return $password;
}

echo ge(20);
<?php  
function reb($text, $word2, $word) {
    $text2 = str_ireplace($word2, $word, $text);
    return $text2;
}

$text = "The man is good.";
$word2 = "man";
$word = "boy";

$Text2 = reb($text, $word2, $word);
echo $Text2; 
?>
<?php  
function reb($text, $position, $chr) {
     $text[$position] = $chr;


   return  $text; }
$text = "omar";
$position = 2;
$chr = "k";

$Text2 = reb($text, $position,$chr );
echo $Text2;  
?>
<?php

$st = "This is a test string";

$ar = explode(" ", $st);

var_dump($ar); 
?>
<?php
function nextlet($l){
    $b=ord($l);
    $nl=chr($b+1);
    return $nl;
}
$l='a';
nextlet($l);
echo nextlet($l);
?>
<?php 
function inword($text, $word, $position){
    $part1 = substr($text, 0, $position);
    $part2 = substr($text, $position);
    $newText = $part1 . $word . $part2;

    return $newText;
}
$text = "Hello, world!";
$word = "beautiful ";
$position = 7; 
$newText = inword($text, $word, $position);
echo $newText;
?>
<?php
function re0($num) {
    $numStr = (string)$num;
    $numStr = str_replace('0', '', $numStr);
    return (int)$numStr;
}
$num = 1020304050;
$newNum = re0($num);
echo $newNum;
?>
<?php
function res($text, $part) {
   
    $newText = str_replace($part, '', $text);
    
    return $newText;
}

$text = "Hello, world!";
$part = "world";
$newText = res($text, $part);
echo $newText; 
?>
<?php
function red($str) {
    $str = str_replace('-', '', $str);
    return $str;
}
$str = "dv ['kpdv  lsjv -- -- lsdzvn -- zdtj";
$new = red($str);
echo $new;
?>

<?php
function res($str) {
    $sp = '/[^a-zA-Z0-9\s]/';
    $str = preg_replace($sp, '', $str);
    return $str;
}
$str = "dv ['kpdv  lsjv -- -- lsdzvn -- zdtj";
$new = res($str);
echo $new;
?>
<?php
function take($str){
    $wor = explode(' ', $str); 
    $fS = array_slice($wor, 0, 5);
    $worb = implode(' ', $fS); 
    return $worb; 
}

$str = "This is a sample string with more than five words.";
$newText = take($str);
echo $newText; 
?>
<?php
function ree($num) {
    $numStr = (string)$num;
    $numStr = str_replace(',', '', $numStr);
    return (float)$numStr;
}
$num = '2,543.12';
$newNum = ree($num);
echo $newNum;
?>
<?php
function pr() {
  
    for ($char = 'a'; $char <= 'z'; $char++) {
        echo $char . ' ';
    }
}

pr();
?>
<?php
function year($year) {
    if (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) {
        return "$year is a leap year.";
    } else {
        return "$year is not a leap year.";
    }
}


$year = 2013;
echo year($year);
?>
<?php
function tr($tr){
    if($tr>20){return "Summer";}
    else { return "Winter";}
}
$tr=21;
echo tr($tr);
?>
<?php
$int1 =5;
$int2=6;
function tr($int1,$int2){
    if($int1==$int2){
        $int3=$int1+$int2;
         return $int3;}
    else { return "Summer";}
}
$int1=21;
$int2=21;
echo tr($int1,$int2);
?>
<?php
$int1 =5;
$int2=6;
function tr($int1,$int2){
    if($int1==$int2){
        $int3=$int1+$int2;
         return $int3;}
    else { return "Summer";}
}
$int1=21;
$int2=21;
echo tr($int1,$int2);
?>
<?php
$int1 =9;
function trl($int1){
    if ($int1 > 0 && $int1 % 3 == 0){
         return true;
        }else { 
            return false;
        }
}
$int1=21;

if (trl($int1)) {
    echo "$int1 is positive and divisible by 3.";
} else {
    echo "$int1 is not positive or not divisible by 3.";
}
?>
<?php
$int = 25;

function re($int) {
    if ($int >= 20 && $int <= 50) {
        return true;
    } else {
        return false;
    }
}

if (re($int)) {
    echo "$int is between 20 and 50.";
} else {
    echo "$int is not between 20 and 50.";
}
?>
<?php
$int = 25;

function re($int) {
    if ($int <= 50) {
        $unit = 2.50;
    } elseif ($int < 100) {
        $unit = 5.00;
    } elseif ($int <= 200) {
        $unit = 6.20;
    } else {
        $unit = 7.50;
    }
    return $unit;
}

$unit_rate = re($int);
echo "The unit rate for $int is $unit_rate.";

?>
<?php
function add($a, $b) {
    return $a + $b;
}

function subtract($a, $b) {
    return $a - $b;
}

function multiply($a, $b) {
    return $a * $b;
}

function divide($a, $b) {
   
        return $a / $b;
    }


$num1 = 10;
$num2 = 5;

echo "Addition: " . add($num1, $num2) . ;

?>
<?php  
$int = 15;

if ($int >= 18) {
    echo "you can";
} else {
    echo "you can not";
}
?>

<?php  
$int = 15;

if ($int >0 ) {
    echo "positev";
} elseif($int==0) {
    echo "zero";
} else { echo "negativ";}
?>

<?php  
$int1 = 50;
$int2 = 90;
$int3 = 70;
$int4 = 66;
$int5 = 95;
$int6 = $int1 + $int2 + $int3 + $int4 + $int5;

$int7 = $int6 / 5;

if ($int7 <= 60) {
    $unit = "F";
} elseif ($int7 <= 70) {
    $unit = "D";
} elseif ($int7 <= 80) {
    $unit = "C";
} elseif ($int7 <= 90) {
    $unit = "B";
} elseif ($int7 <= 100) {
    $unit = "A";
} else {
    $unit = "Invalid";
}

echo "The unit rate for average score $int7 is $unit.";
?>
















<?php
echo strrev("Hello World!");
?>

<?php
 $tt=ctype_lower($word1);
if ($tt) {
    echo "$word1: ok";
} else {
    echo "$word1: Not ok";
}
?>
<?php
function to(&$num,&$num2) {
$num0=$num;
$num1=$num2;
$num=$num1;
$num2=$num0;
}
$a = 10;
$b = 20;

echo "Before swap: a = $a, b = $b";

to($a, $b);

echo "After swap: a = $a, b = $b";
?> 
<?php

$array = [1, 2, 2, 3, 4, 4, 5];
$uniqueArray = array_unique($array);

print_r($uniqueArray);

?>
<?php

for ($i = 0; $i <= 9; $i++) {
    echo $i .'-';
}
echo 10;
?>
<?php
$o = 0;
for ($i = 0; $i <= 30; $i++) {
   $o=$o+$i;
}
echo $o;
?>

<?php
$characters = ['A', 'B', 'C', 'D', 'E']; 

for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 5; $j++) {
        if ($j < 3 - $i) {
            echo " A";
        } else {
            echo " ".$characters[$i];
        }
    }
    echo "<br>";
}
?>
<?php
$num = [1,2,3,4,5]; 

for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 5; $j++) {
        if ($j < 3 - $i) {
            echo " 1";
        } else {
            echo " ".$num[$i];
        }
    }
    echo "<br>";
}
?>
<?php
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 5; $j++) {
        if ($j == $i) {
            echo $i + 1; 
        } else {
            echo "0"; 
        }
    }
    echo "<br>"; 
}
?>
<?php
$number = 5; 
$factorial = 1;

for ($i = 1; $i <= $number; $i++) {
    $factorial *= $i; 
}

echo "The factorial of $number is $factorial"; 
?>

<?php
$n = 10;
$fibonacci = [0, 1]; 

for ($i = 2; $i < $n; $i++) {
    $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2]; 
}


for ($i = 0; $i < $n; $i++) {
    echo $fibonacci[$i];
    if ($i < $n - 1) {
        echo ", ";
    }
}
?>
<?php
$text = "OrangeCodingAcademy";
$searchChar = 'c';
$count = 0;


$lowercaseText = strtolower($text);
$searchChar = strtolower($searchChar);


for ($i = 0; $i < strlen($lowercaseText); $i++) {
    if ($lowercaseText[$i] == $searchChar) {
        $count++;
    }
}

echo "The  'c' in the text is $count";


?>


<?php
echo '<table border="1" cellpadding="3px" cellspacing="0px">';
for ($i = 1; $i <= 6; $i++) {
    echo '<tr>';
    for ($j = 1; $j <= 5; $j++) {
        echo '<td>' . $i . ' * ' . $j . ' = ' . ($i * $j) . '</td>';
    }
    echo '</tr>';
}
echo '</table>';
?>


<?php
for ($i = 1; $i <= 50; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz";
    } elseif ($i % 3 == 0) {
        echo "Fizz";
    } elseif ($i % 5 == 0) {
        echo "Buzz";
    } else {
        echo $i;
    }
    if ($i < 50) {
        echo " "; 
    }
}
?>
<?php
$n = 5; // Number of lines for Floyd's triangle

$num = 1; // Initialize starting number

for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $num . " ";
        $num++;
    }
    echo "<br>";
}
?>
<?php
$n = 5; // Number of lines for the pattern (including both halves)

// Print the upper part of the pattern
for ($i = 1; $i <= $n; $i++) {
    // Print leading spaces
    for ($k = $n - $i; $k > 0; $k--) {
        echo "&nbsp;"; // Using HTML non-breaking space for visual alignment
    }
    
    // Print letters from 'A' to the current letter
    for ($j = 0; $j < $i; $j++) {
        echo chr(65 + $j);
        if ($j < $i - 1) {
            echo " ";
        }
    }
    echo "<br>";
}

// Print the lower part of the pattern (excluding the middle line)
for ($i = $n - 1; $i >= 1; $i--) {
    // Print leading spaces
    for ($k = $n - $i; $k > 0; $k--) {
        echo "&nbsp;"; // Using HTML non-breaking space for visual alignment
    }
    
    // Print letters from 'A' to the current letter
    for ($j = 0; $j < $i; $j++) {
        echo chr(65 + $j);
        if ($j < $i - 1) {
            echo " ";
        }
    }
    echo "<br>";
}
?>

