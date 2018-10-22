<!--BEFORE I FORGET THIS IDEA, REFEREECNE FROM INNER BOX DYNAMIC LIST USING-->
<!--GET METHOD TO SAVE THE RECEVIERS ID AS A VARIABLE TO CALL THIS FUNCTION-->
<!--AS A SEPARATE PAGE. THEN USE JQUERY TO LOAD THE CONTENT OF THIS PAGE-->
<!--WITHOUT RELOADING OR CHANGING THE URL. -->

<!--FUNCTION SHOULD TAKE IN AND STATEMENT USING SENDER AND RECEVIER AS FRIEND-->
<!--ONE AND TWO RESPECTIVELY FROM FRIEND TABLE THEN REVERTS THEM TO SEE IF BOTH HAVE -->
<!--ACCEPTED A FRIENDSHIP. IF NOT PRINT NOTICE ALERT.-->

<!--ONCE A FRIENDHSIP IS ESTABLISHED THEN PRINT THE DYNAMIC STRING OF MESSAGES -->
<!--BETWEEN THE TWO USING THE SENDER AS THE PRIMARY FROM THE MESSAGE TABLE. -->

<!--*THIS WHOLE PAGE MUST BE COMPLETELY CLIENT-SIDE THERE CANT BE ANY GLOBAL VARIABLES-->
<!--CARRIED ACROSS*-->
<!DOCTYPE HTML>
<html>
<head>
<?php
  
  //recalls the Session variable created in CheckLogin.php to obtain the user's id number and to confirm they have logged in.

session_start();

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

$receiver = $_GET["f2"];
$sender = $user;
 include "config.php";
$sql = "SELECT FRIEND_ID FROM FRIEND WHERE FRIEND_ONE = '$sender' AND FRIEND_TWO = '$receiver'";
	$result = $db->query($sql);
		  	if ($result->num_rows == 1) {
			$row = $result->fetch_assoc();
			$fid = $row["FRIEND_ID"];
			$sql2 = "SELECT * FROM MESSAGE WHERE FRIEND_ID = '$fid'";
			$rs_result = $db->query($sql2); 
             while($row2 = $rs_result->fetch_assoc()) {
                 
                 //use the if to colorize and separte who is sending the message
                 
                 if($row2["M_WORDS_OUT"] == NULL){
                 echo $row2["M_WORDS_IN"];
                 }else{
                 echo $row2["M_WORDS_OUT"];
                 }
                 echo "<br>";
                 
		  	} 
		  
		  	}	else{
		  	     ?>
                <meta http-equiv="refresh" content="0; URL='https://scottim-mrcalihan.c9users.io/Pages/ContactSearch.php'" />
             <?php
                 echo "<script>
                     alert('Something went wrong please try again'); 
                     </script>";
       
                 }
		  	

?>
</html>
