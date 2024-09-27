<?php

// echo "Successfully inclue database.php file";
// $connection = mysqli_connect(dbsercer, dbuser, dbpass, dbname);

$connection = mysqli_connect('localhost', 'root', '', 'users');

// check database connection 
if (mysqli_connect_errno()){
    die('Database connection failed !' . mysqli_connect_error());
}

// else{
//     echo "Database Connection Successfull !";
// }
?>