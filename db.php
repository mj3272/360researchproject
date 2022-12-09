<?php
    // Enter your host name, database username, password, and database name.
    // If you have not set database password on localhost then set empty.
    //the "" is the password & cs360 research project is the database name
    $con = mysqli_connect("localhost","root","","cs360 research project");
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>