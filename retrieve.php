
    
        <?php 
        // select all tasks if page is visited or refreshed
        $tasks = mysqli_query($db, "SELECT * FROM tasks");
//displaying task from database
        $i = 1;
         while ($row = mysqli_fetch_array($tasks)) { ?>
        <?php $i++; } ?>