<?php
// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Include files (ensure paths are correct)
include './index.html';
include './php/database.php';

// Handle form submission
if (isset($_POST['submit'])){
    $uname = $_POST['uname'];
    $password = $_POST['pwd'];

    // Insert query
    $query = "INSERT INTO users (first_name, last_name, email, pwd) 
              VALUES ('{$uname}', 'Gethmin', 'gajdfjsdjflj@lsjdfkjsd', '{$password}')";

   mysqli_query($connection, $query);

}
?>
