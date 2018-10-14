<!DOCTYPE html>
<html>
    <?php
    session_start();
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
.bgimg {
    background-image: url('/Pictures/Background.jpg');
    min-height: 100%;
    background-position: center;
    background-size: cover;
}
	#logout{
	    position: absolute;
	    margin-top: 15px;
	    margin-left: 92.5%;
	    border: solid 2px white;
	    color: white;
	    border-radius: 20px;
	    font-size: 20px;
	    width: 100px;
	    background: #CC6FA2;
	}
		#logout:hover{
	    cursor: pointer;
	}
		#events:hover{
	    cursor: pointer;
	}
		#profile:hover{
	    cursor: pointer;
	}
		#profile{
	    position: absolute;
	    margin-top: 65px;
	    margin-left: 92.5%;
	    border: solid 2px white;
	    color: white;
	    border-radius: 20px;
	    font-size: 20px;
	    width: 100px;
	    background: skyblue;
	}
		#events{
	    position: absolute;
	    margin-top: 115px;
	    margin-left: 92.5%;
	    border: solid 2px white;
	    color: white;
	    border-radius: 20px;
	    font-size: 20px;
	    width: 100px;
	    background: limegreen;
	}
	#box{
		width: 400px;
		height: 85%;
		background: #FFF;
		margin-top: 15px;
		margin-left: 15px;
		position: absolute;
		border-radius: 20px;
		opacity: .7;
		overflow-y: scroll;
	}
	#boxmini{
		content: '\00bb';
		width: 400px;
		height: 10%;
		background: #FFF;
		margin-bottom: 15px;
		margin-left: 15px;
		position: absolute;
		border-radius: 20px;
		opacity: .7;
		overflow-y: scroll;
	}

#boxmini span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

#boxmini span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

#boxmini:hover span {
  padding-right: 25px;
}

#boxmini:hover span:after {
  opacity: 1;
  right: 0;
}
	
	
	#box2{
		width: 900px;
		height: 96%;
		background: #FFF;
		margin-top: 0px;
		margin-left: 150px;
		position: absolute;
		border-radius: 20px;
		opacity: .7;
	}
	#innerbox{
	  width: 350px;
		height: 75px;
		border: solid 2px #000000;
		background: white;
		margin-top: 10px;
		margin-left: 15px;
		position: relative;
		border-radius: 20px;
	    opacity: 1.0;
	}
/*	#login h1{
		text-align:center;
		position:absolute;
		left:120px;
		top:-40px;
		font-size:21px;
	}*/
	#login form p{
		text-align: center;
		
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
</head>
<body>

<div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
  <div id="box" class="w3-display-topleft w3-padding-large w3-xlarge" style="color: black">
    <?php
    include "config.php";
    $sql = "select U_FNAME from USER where U_ID = '$user'";
  	$result = $db->query($sql);
		  	if ($result->num_rows == 1) {
			$row = $result->fetch_assoc();
			$dbfname = $row["U_FNAME"];
		  	}
		  	?>
    Welcome <?php echo"$dbfname"?>
    <?php
$sql = "SELECT * FROM FRIEND WHERE FRIEND_ONE = '$user'";
$rs_result = $db->query($sql); 
 while($row = $rs_result->fetch_assoc()) {
   $friend = $row["FRIEND_TWO"];
   echo "<div id='innerbox'>";
   $sql2 = "SELECT * FROM USER WHERE U_ID = '$friend'";
   $f_result = $db->query($sql2);
   $row2 = $f_result->fetch_assoc();
    echo "<h1 style='margin-left: 5px; margin-top: 2px; font-weight: bold; font-size: 17.5px'>".$row2["U_FNAME"]." ".$row2["U_LNAME"]."</h1>";
   echo "</div>";
}; 
?>
<!--<div id="innerbox"></div>-->
<!--<div id="innerbox"></div>-->
<!--<div id="innerbox"></div>-->
<!--<div id="innerbox"></div>-->
<!--<div id="innerbox"></div>-->
<!--<div id="innerbox"></div>-->
<!--<div id="innerbox"></div>-->
<!--<div id="innerbox"></div>-->
    

</div>
<button id="boxmini" class="w3-display-bottomleft w3-padding-large w3-xlarge" style="color: black" onclick = "Javascript:window.location.href = '/Pages/ContactSearch.php';"><span>Add Contacts</span>
    	<!--<a href="#" style="position: absolute; width: 100%; margin-top: 5px; margin-left: -10px; text-align: center; color: black; font-weight: bold">Add Contacts</a>-->
</button>
<div id="box2" class="w3-display-middle w3-padding-large w3-xlarge" style="color: black">
</div>
  <button id="logout" onclick = "window.location.href = 'https://scottim-mrcalihan.c9users.io/Login.php';">Log Out</button>
  <button id="profile" onclick = "window.location.href = '#';">Profile</button>
  <button id="events" onclick = "window.location.href = '#';">Events</button>
</div>



</body>
</html>

