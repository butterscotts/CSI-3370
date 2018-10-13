<?php

// most important page in the entire workspace, connects the database using one line:(include "Config.php";) anytime you want to call the db 
    $db = mysqli_connect('localhost', 'root', '', 'ScottIM');
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    } 
    $thisPHP = $_SERVER['PHP_SELF'];
?>