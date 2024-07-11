<!DOCTYPE html>
<html>
<body>
<?php 
session_start();

if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0;
}
$_SESSION['count'] = $_SESSION['count'] + 1;

$visitor = 'calc.txt';
if (!file_exists($visitor)) {
    file_put_contents($visitor, 0);
}

if (!isset($_SESSION['visited'])) {
    $visited = (int)file_get_contents($visitor);
    $visited = $visited + 1;
    file_put_contents($visitor, $visited);
    $_SESSION['visited'] = true;
    $visited = file_get_contents($visitor);
} else {
    $visited = file_get_contents($visitor);
}

$uu = date('Y-m-d H:i:s');
$num1 = isset($_POST["num1"]) ? $_POST["num1"] : 0;
$num2 = isset($_POST["num2"]) ? $_POST["num2"] : 0;
$o = isset($_POST["operator"]) ? $_POST["operator"] : '+';
$result = 0;

if ($o == "+") {
    $result = $num1 + $num2;
} elseif ($o == "-") {
    $result = $num1 - $num2;
} elseif ($o == "*") {
    $result = $num1 * $num2;
} elseif ($o == "/") {
    if ($num2 != 0) {
        $result = $num1 / $num2;
    } else {
        $result = "Error: Division by zero";
    }
} else {
    $result = "Error";
}
?>

<h1>Simple Calculator</h1>
Welcome <?php echo $_GET["name"]; ?><br>
Your email address is: <?php echo $_GET["email"]; ?>
<p>Page requested at: <?php echo htmlspecialchars($uu); ?></p>
<p>Page view count: <?php echo $_SESSION['count']; ?></p>


<form action="" method="POST"> 
    Num1: <input type="number" name="num1" value="<?php echo htmlspecialchars($num1); ?>"><br>
    Num2: <input type="number" name="num2" value="<?php echo htmlspecialchars($num2); ?>"><br>
    <label for="output">Result: <?php echo htmlspecialchars($result); ?></label><br>
    <input type="submit" name="operator" value="+">
    <input type="submit" name="operator" value="-">
    <input type="submit" name="operator" value="*">
    <input type="submit" name="operator" value="/">
</form>



<form action="todolist.php" method="GET">
to do list page<input type="submit">
</form>

</body>
</html>
