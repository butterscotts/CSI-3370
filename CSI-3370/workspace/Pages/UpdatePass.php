<head>
     <?php
     session_start();
     ?>
     <?php
  
  //recalls the Session variable created in CheckLogin.php to obtain the user's id number and to confirm they have logged in.
  

	if (isset($_SESSION['user'])) {
$user = $_SESSION['user'];
}	else{
?>
<meta http-equiv="refresh" content="0; URL='https://scottim-mrcalihan.c9users.io/Login.php'" />
<script>
        alert('Please Login to Access ScottIM');
</script>
<?php
}
include "config.php";

$pass = $_POST["password"];
$conf = $_POST["password1"];

if($pass == $conf){
    
    $sql = "UPDATE USER SET U_PASS = '$pass' WHERE U_ID = '$user'";
    if ($db->query($sql) == TRUE){
            ?>
                <meta http-equiv="refresh" content="0; URL='https://scottim-mrcalihan.c9users.io/Pages/Profile.php'" />
             <?php
                
           echo "<script>
       alert('Password Updated!'); 
       </script>";
    } else {
            ?>
                <meta http-equiv="refresh" content="0; URL='https://scottim-mrcalihan.c9users.io/Pages/Revise.php'" />
             <?php
                 echo "<script>
                     alert('Something went wrong, please try again!'); 
                     </script>";
    }
    }else{
             ?>
                <meta http-equiv="refresh" content="0; URL='https://scottim-mrcalihan.c9users.io/Pages/Revise.php'" />
             <?php
                 echo "<script>
                     alert('Passwords do not match'); 
                     </script>";
}




?>
