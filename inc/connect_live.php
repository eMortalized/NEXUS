<?php
    $server = "localhost";
    $username = "motowebi_em";
    $password  = "build9600";
    $db = "motowebi_emortalized_db";
    $con = mysqli_connect($server,$username,$password,$db);
    // Check connection
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    
    /* Config */
    $GLOBALS['$siteUrl'] = "";
    
?>