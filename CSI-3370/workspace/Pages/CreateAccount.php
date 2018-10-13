<?php

include "config.php";

$fn = $_POST["first"];
$ln = $_POST["last"];
$em = $_POST["email"];
$username = $_POST["user"];
$password = $_POST["passw0rd"];
$confirm = $_POST["passw0rd2"];

    global $db;
    if($password == $confirm){

    $sql = "INSERT INTO USER( U_ID, U_FNAME, U_LNAME, U_EMAIL, U_UNAME, U_PASS ) VALUES (NULL ,  '$fn',  '$ln',  '$em',  '$username',  '$password')";
    if ($db->query($sql) == TRUE)
   {
         ?>
            <meta http-equiv="refresh" content="0; URL='https://scottim-mrcalihan.c9users.io/Login.php'" />
         <?php
           echo "<script>
       alert('New User Added! Please Login!'); 
       </script>";
    }else{
        ?>
            <meta http-equiv="refresh" content="0; URL='https://scottim-mrcalihan.c9users.io/Create.php'" />
         <?php
       echo "<script>
       alert('Something went wrong, please try again'); 
       </script>";
       
    }
    }else{
        echo "<script>
       alert('Passwords do not match'); 
       </script>";
    }


?>



