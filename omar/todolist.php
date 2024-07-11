<!DOCTYPE html>
<html>
<head>
    <title>To-Do List</title>
</head>
<body>

<?php
session_start();

// Initialize the tasks array if it doesn't exist
if (!isset($_SESSION['tasks'])) {
    $_SESSION['tasks'] = [];
}

// Add a task
if (isset($_POST['task']) && !empty(trim($_POST['task']))) {
    $_SESSION['tasks'][] = trim($_POST['task']);
}

// Remove a task
if (isset($_POST['remove'])) {
    $index = $_POST['remove'];
    if (isset($_SESSION['tasks'][$index])) {
        unset($_SESSION['tasks'][$index]);
        $_SESSION['tasks'] = array_values($_SESSION['tasks']); // Reindex the array
    }
}
?>

<h1>To-Do List</h1>

<form action="" method="POST">
    <input type="text" name="task" placeholder="Enter a new task">
    <input type="submit" value="Add Task">
</form>

<ul>
    <?php foreach ($_SESSION['tasks'] as $index => $task): ?>
        <li>
            <?php echo htmlspecialchars($task); ?>
            <form action="" method="POST" style="display:inline;">
                <button type="submit" name="remove" value="<?php echo $index; ?>">Remove</button>
            </form>
        </li>
    <?php endforeach; ?>
</ul>

</body>
</html>