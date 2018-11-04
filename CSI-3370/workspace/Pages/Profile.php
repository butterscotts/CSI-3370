<!DOCTYPE html>
<html>
    <?php
    session_start();
    $image = '/Pictures/background2.jpg';
    ?>
<title>ScottIM</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>

body,h1 {
  font-family: "Raleway", sans-serif
}
body, html {height: 100%}
body{
    background-image: url('<?php echo $image ?>');
    min-height: 100%;
    background-position: center;
    background-size: cover;
}

	#logout{
	    position: absolute;
	    margin-top: 15px;
	    margin-left: 90%;
	    border: solid 2px white;
	    color: white;
	    border-radius: 20px;
	    font-size: 20px;
	    width: 100px;
	    background: #CC6FA2;
	    height: 40px;
	}
	#logout:hover{
	    cursor: pointer;
	}
		#home:hover{
	    cursor: pointer;
	}
	#home{
	    position: absolute;
	    margin-top: 65px;
	    margin-left: 90%;
	    border: solid 2px white;
	    color: white;
	    border-radius: 20px;
	    font-size: 20px;
	    width: 100px;
	    background: darkblue;
	    height: 40px;
	}
	#userinfo{
		position: absolute;
		top: 10%;
		width: 80%;
		height: 80%;
		background: #FFF;
		margin-left:5%;
		margin-right:7%;
		border-radius: 20px;
		opacity: .7;
		overflow:scroll;
	}
	#circle{
		position: absolute;
		top:5%;
		left:5%;
		width: 15%;
    	height:0;
    	padding-bottom: 15%;
    	-moz-border-radius: 15%; 
    	-webkit-border-radius: 15%; 
  		background-color: #bbb;
  		border-radius: 50%;
  		text-align: center;
  		background: navy;
  		border: solid 2px pink; 
  
    
	}
	#initials{
		position: relative;
		top: 50%;
		font-size: 7vw;
		color: pink;
		font-weight: bold;
		
	}
	#info{
		position:absolute;
		top: 20%;
		left: 25%;
		font-size: 2.5vw;
	}

</style>
<head>
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
?>
<body>
	

 <div id="userinfo"> 
 <?php
    include "config.php";
    $sql = "select U_FNAME, U_LNAME, U_EMAIL, U_UNAME from USER where U_ID = '$user'";
  	$result = $db->query($sql);
		  	if ($result->num_rows == 1) {
			$row = $result->fetch_assoc();
			$dbfname = $row["U_FNAME"];
			$dblname =$row["U_LNAME"];
			$dbuserid =$row["U_UNAME"];
			$dbemail =$row["U_EMAIL"];
		  	}
		  	?>
	<div id="info">
		<ul>
    Name: <?php echo"$dbfname $dblname" ?> <br>
   Username: <?php echo"$dbuserid" ?><br>
    Email: <?php echo"$dbemail"?><br><br>
     <a href="https://scottim-mrcalihan.c9users.io/Pages/Revise.php">Reset Password</a><br><br>
     Theme:
     <select id-'mySelect'>
  		     <option value="Theme1">Pink/Yellow</option>
 			 <option value="Theme2">Blue/Green</option>
 			 <option value="Theme3">Galaxy</option>
 			 <option value="Theme4">SuperBoring</option>
</select>
     </div>
      <div id='circle'>
 		<div id="initials">
	 	<?php
	 	$initial1 = substr($dbfname, 0,1);
	 	$initial2 = substr($dblname, 0,1);
	 	echo"$initial1$initial2"?>
		</div>

 </div>
 </div>
 <button id="logout" onclick = "window.location.href = 'https://scottim-mrcalihan.c9users.io/Login.php';">Log Out</button>
   <button id="home" onclick = "window.location.href = 'https://scottim-mrcalihan.c9users.io/Pages/Index.php';">Home</button>
</div> 
</div>


</body>
</html>

