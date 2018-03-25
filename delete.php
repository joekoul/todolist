<? php 

// removing task from the list
    if (isset($_GET['rem_task'])) {
    $id = $_GET['rem_task'];

    mysqli_query($db, "DELETE FROM tasks WHERE id=".$id);
    header('location: index.php');
}
        
    ?>