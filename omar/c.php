<?php
$name="dw";
$value="omar";
$time=time()+3600;
$path="/";
$domain="";
$secure=true;
$http=true;

setcookie($name,$value,$time,$path,$domain,$secure,$http);
echo"done";
?>
<?php
if(count($_COOKIE)>0){
    foreach($_COOKIE as $name => $value)
echo "name: $name <br>";
echo "value: $value <br>";  }


?>
<?php
/*
$name="dw";
$time=time()-3600;
setcookie($name,"",$time,"/");
echo "cookie deleted";
*/
?>