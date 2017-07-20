<?php
    $server = "localhost";
    $username = "root";
    $password  = "";
    $db = "emortalized_db";
    $con = mysqli_connect($server,$username,$password,$db);
    // Check connection
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    
    /* Config */
    $GLOBALS['$siteUrl'] = "";
    
?>