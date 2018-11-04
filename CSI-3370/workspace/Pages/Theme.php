<?php

include "config.php";
session_start();
  
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

$mySelect = $_POST["mySelect"];
echo $mySelect;
$sql = "UPDATE USER SET U_THEME = '$mySelect' WHERE U_ID = '$user'";
if ($db->query($sql) == TRUE){
           ?>
                <meta http-equiv="refresh" content="0; URL='https://scottim-mrcalihan.c9users.io/Pages/Profile.php'" />
              <?php
                
      
}
 
?>
