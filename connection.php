<?php

    $conn = mysqli_connect("localhost", "root", "","student_spvc");

    if(!$conn){
        die("Failed to connect to database" . mysqli_error($conn));
    }

?>