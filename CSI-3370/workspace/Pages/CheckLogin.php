<?php


//The following function takes in the two inputs using the POST method and checks to see if BOTH username and password are matching in the database
    include "config.php";

    $username = $_POST['user'];
    $password = $_POST['passw0rd'];
		
		//sql statement that pulls the users id to store as a SESSION variable to confirm with the pages that they have logged in
		
		$sql2 = "select U_ID from USER where U_UNAME = '$username' and U_PASS = '$password'";
		$result = $db->query($sql2);
		  	if ($result->num_rows == 1) {
			$row = $result->fetch_assoc();
			$dbfname = $row["U_ID"];
			    session_start();
			$_SESSION['user'] = $dbfname;
				
		$url = "Index.php";
		header('Location: ' . $url);
		exit();
		  	
    } else {
    echo "<script>
        alert('Sorry, Invalid Username or Password. Try Again');
    window.location.href='/Login.php';
    </script>";
 
    }	
  
?>