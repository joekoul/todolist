<?php 
 
$localhost = "127.0.0.1"; 
$username = "root"; 
$password = ""; 
$dbname = "todo_crud"; 
 
// create connection 
$db = new mysqli($localhost, $username, $password, $dbname); 
 
// check connection 
if($db->connect_error) {
    die("connection failed : " . $db->connect_error);
} else {
   // echo "Connected";
}
 
?>

