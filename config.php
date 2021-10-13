<?php
    $hostname="localhost";
    $username="root";
    $password="";
    $database="blog_data_phpv1";

    $conn = mysqli_connect($hostname,$username,$password,$database);

    if(!$conn){
        echo "<h3 class='container bg-secondary text-center p-3 text-warning rounded mt-5'>Not able to establish connection</h3>";
    }
?>