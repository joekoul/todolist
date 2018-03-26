<?php 
//including database file
require_once 'db/database.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>To-do List</title>
        <!-- CSS -->
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Shadows+Into+Light+Two">
        
        <!--js-->
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="js/script.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <body>
        <div class="container">
            <h1 class="header">Todo List</h1>

    <ul>  
    
        <?php 
        // select all tasks if page is visited or refreshed
        $tasks = mysqli_query($db, "SELECT * FROM tasks");
//displaying task from database
        $i = 1;
         while ($row = mysqli_fetch_array($tasks)) { ?>
        <li>
               
                 <span ><input class='checkbox' type='checkbox'/><?php echo $row['task']; ?></span>
                    <a href="index.php?rem_task=<?php echo $row['id'] ?>"class='remove'>x</a><hr></li>
        <?php $i++; } ?>
</ul>
            <form method="post" action="index.php" class="add-items">
                <input type="text" name="task" class="form-control" id="todo-list-item" placeholder="Write your task......">
                <button class="add" type="submit" name="submit">Add Task</button>
                <?php 
        
    // initializing  errors variable
    $errors = "";

    // inserting a quote if submit button is clicked
    if (isset($_POST['submit'])) {
        if (empty($_POST['task'])) {
            $errors = "write something";
        }else{
            $task = $_POST['task'];
            $sql = "INSERT INTO tasks (task) VALUES ('$task')";
            mysqli_query($db, $sql);
            header('location: index.php');
        }
        
}
// removing task from the list
    if (isset($_GET['rem_task'])) {
    $id = $_GET['rem_task'];

    mysqli_query($db, "DELETE FROM tasks WHERE id=".$id);
    header('location: index.php');
}
        
    ?>
        <?php if (isset($errors)) { ?>
    <p><?php echo $errors; ?></p>
<?php } ?>
    </form>

        </div>
    </body>
</html>
