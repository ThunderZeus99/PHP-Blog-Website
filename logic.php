<?php
    $conn = mysqli_connect("localhost","root", "secret", "blog_data_phpv1");

    if(!$conn){
        echo "<h3 class='container bg-secondary text-center p-3 text-warning rounded mt-5'>Not able to establish connection</h3>";
    }
?>