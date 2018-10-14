
<head>
<?php
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
?>
</head>

<?php

include "config.php";

$email = $_POST["email"];
$username = $_POST["username"];

if($email != ""){
    $sql = "SELECT * FROM USER WHERE U_EMAIL = '$email'";
		$result = $db->query($sql);
		  	if ($result->num_rows == 1) {
			$row = $result->fetch_assoc();
			$friend2 = $row["U_ID"];
			$sql2 = "INSERT INTO FRIEND (FRIEND_ID, FRIEND_ONE, FRIEND_TWO) VALUES (NULL, '$user', '$friend2')";
			if ($db->query($sql2) == TRUE)
            {
             ?>
                <meta http-equiv="refresh" content="0; URL='https://scottim-mrcalihan.c9users.io/Pages/Index.php'" />
             <?php
                echo "<script>
                    alert('You made a new friend! Awesome!'); 
                     </script>";
                }else{
             ?>
                <meta http-equiv="refresh" content="0; URL='https://scottim-mrcalihan.c9users.io/Pages/ContactSearch.php'" />
             <?php
                 echo "<script>
                     alert('Something went wrong please try again'); 
                     </script>";
       
                 }
		  	
    } else {
             ?>
                <meta http-equiv="refresh" content="0; URL='https://scottim-mrcalihan.c9users.io/Pages/ContactSearch.php'" />
             <?php
                 echo "<script>
                     alert('User email does not exist please try again');
                     </script>";
 
            }	
    } else {
         $sql = "SELECT * FROM USER WHERE U_UNAME = '$username'";
		$result = $db->query($sql);
		  	if ($result->num_rows == 1) {
			$row = $result->fetch_assoc();
			$friend2 = $row["U_ID"];
			$sql2 = "INSERT INTO FRIEND(FRIEND_ID, FRIEND_ONE, FRIEND_TWO) VALUES (NULL, '$user', '$friend2')";
			if ($db->query($sql2) == TRUE)
            {
             ?>
                <meta http-equiv="refresh" content="0; URL='https://scottim-mrcalihan.c9users.io/Pages/Index.php'" />
             <?php
                echo "<script>
                    alert('You made a new friend! Awesome!'); 
                     </script>";
                }else{
             ?>
                <meta http-equiv="refresh" content="0; URL='https://scottim-mrcalihan.c9users.io/Pages/ContactSearch.php'" />
             <?php
                 echo "<script>
                     alert('Something went wrong please try again'); 
                     </script>";
       
                 }
		  	
    } else {
             ?>
                <meta http-equiv="refresh" content="0; URL='https://scottim-mrcalihan.c9users.io/Pages/ContactSearch.php'" />
             <?php
                 echo "<script>
                     alert('Username does not exist, please try again');
                     </script>";
 
            }
    
}

?>
