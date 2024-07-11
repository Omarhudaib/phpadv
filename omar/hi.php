<html> 

<body>
   <?php
   session_start();
   if (!isset($_SESSION['c'])) {
    $_SESSION['c'] = 0;
}
$_SESSION['c'] = $_SESSION['c'] + 1;
  $_SESSION['c'] ;
    ?>
<form action="calc.php" method="GET">
    <label for=""><?php echo $_SESSION['c'] ;?></label><br>
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>
<br>


</body>
</html>