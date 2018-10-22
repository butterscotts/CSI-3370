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

include "config.php";

$sender = $user;
$receiver = $_GET["f2"];
$message = $_POST["mess"];

if($receiver == NULL){
	  ?>
                    <meta http-equiv="refresh" content="0; URL='https://scottim-mrcalihan.c9users.io/Pages/Index.php'" />
                  <?php
                     echo "<script>
                    alert('No recipient selected!'); 
                     </script>";
}

$sql = "SELECT FRIEND_ID FROM FRIEND WHERE FRIEND_ONE = '$sender' AND FRIEND_TWO = '$receiver'";
$result = $db->query($sql);
	if ($result->num_rows == 1) {
			$row = $result->fetch_assoc();
			$senderid = $row["FRIEND_ID"];
			
			$sql2 = "INSERT INTO MESSAGE(M_ID, FRIEND_ID, M_WORDS_OUT, M_WORDS_IN) VALUES (NULL, '$senderid', '$message', '')";
			if ($db->query($sql2) == TRUE)
            {
                $sql3 = "SELECT FRIEND_ID FROM FRIEND WHERE FRIEND_ONE = '$receiver' AND FRIEND_TWO = '$sender'";
                $result = $db->query($sql3);
                if ($result->num_rows == 1) {
			    $row3 = $result->fetch_assoc();
			    $receiverid = $row3["FRIEND_ID"];
			    
			    $sql4 = "INSERT INTO MESSAGE(M_ID, FRIEND_ID, M_WORDS_OUT, M_WORDS_IN) VALUES (NULL, '$receiverid', '', '$message')";
			    if ($db->query($sql4) == TRUE)
			    {
			         ?>
                    <meta http-equiv="refresh" content="0; URL='https://scottim-mrcalihan.c9users.io/Pages/Index.php?f2=<?php echo $receiver; ?>'" />
                     <?php
                  
			    }
			        
            }
	}
	}
                
?>
