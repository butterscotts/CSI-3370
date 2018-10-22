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
#send{
	width: 15%;
	margin-left: 40%;
}
textarea{
	width: 94%;

	position: absolute;
	resize: none;
}
#message{
	position: absolute;
	width: 94%;
	bottom: 50px;
	background: white;
}
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
#blue{
	width: 50%;
	background: lightblue;
	opacity: .7;
	text-align: center;
	position: relative;
	right: 0;
	border: solid 2px black;
	white-space: normal;
	word-wrap: break-word;
	
}
#grey{
	position: relative;
	background: gray;
	border-radius: .4em;
	white-space: normal;
	width: 75%;
	display: block;
	word-wrap: break-word;
	padding: 5px;
}
#grey:after{
	content: '';
	position: absolute;
	left: 0;
	top: 50%;
	width: 0;
	height: 0;
	border: 20px solid transparent;
	border-right-color: gray;
	border-left: 0;
	border-bottom: 0;
	margin-top: -10px;
	margin-left: -20px;
	
}
#bleu{
		padding: 5px;
	margin-left: 25%;
	position: relative;
	background: #00aabb;
	border-radius: .4em;
	white-space: normal;
	width: 75%;
	margin-right: 0px;
	word-wrap: break-word;
	display: block;
	
}
#bleu:after{
	content: '';
	position: absolute;
	right: 0;
	top: 50%;
	width: 0;
	height: 0;
	border: 20px solid transparent;
	border-left-color: #00aabb;
	border-right: 0;
	border-bottom: 0;
	margin-top: -10px;
	margin-right: -20px;
}
#gray{
	width: 50%;
	text-align: center;
	position: absolute;
	right: 15px;
	border: solid 2px black;
	white-space: normal;
	word-wrap: break-word;
}
#messagepreview{
	font-size: 15px;
	margin-top: -10px;
	overflow-y: scroll;
	position: absolute;
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
	    margin-left: 90%;
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
	    margin-left: 90%;
	    border: solid 2px white;
	    color: white;
	    border-radius: 20px;
	    font-size: 20px;
	    width: 100px;
	    background: limegreen;
	}
	#box{
		width: 30%;
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
		width: 30%;
		height: 10%;
		background: #FFF;
		margin-bottom: 15px;
		margin-left: 15px;
		position: absolute;
		border-radius: 20px;
		opacity: .7;
	
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
		width: 55%;
		height: 75%;
		background: #FFF;
		top: 298px;
		margin-left: 130px;
		position: absolute;
		border-radius: 20px;
		opacity: .7;
		overflow: scroll;
		display: block;
	}
	#box3{
		width: 55%;
		height: 20%;
		background: #FFF;
		position: absolute;
		border-radius: 20px;
		opacity: .7;
		bottom: 15px;
		left: 31.5%;
		
		
	}
	#innerbox{
	  width: 90%;
		height: 10%;
		border: solid 2px #000000;
		background: white;
		margin-top: 10px;
		margin-left: 15px;
		position: relative;
		border-radius: 20px;
	    opacity: 1.0;
	    word-wrap: break-word;
	    overflow-y: scroll;
	    
	}
		#innerbox:hover{
	 	cursor: pointer;
	 	background: pink;
	 	opacity: 01.0;
	 

	 /*background-image: url('/Pictures/Background.jpg');*/
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
	<div>
  <button id="logout" onclick = "window.location.href = 'https://scottim-mrcalihan.c9users.io/Login.php';">Log Out</button>
  <button id="profile" onclick = "window.location.href = '/Pages/Profile.php';">Profile</button>
  <button id="events" onclick = "window.location.href = '#';">Events</button>
  </div>
<div class="bgimg">
	
	<!-- Begin Dynamic list which pulls list of contacts in which you have added or accepted a friendship from-->
	
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
   ?>

   <button id='innerbox' onclick = "window.location.href = 'https://scottim-mrcalihan.c9users.io/Pages/Index.php?f2=<?php echo $friend; ?>';">
   	 <!--<button id='innerbox' name='innerbox' value='<?php echo $friend; ?>' type='submit';>-->
   
   
   	<!--<button id='innerbox' onclick = 'show()';>-->
  
  
  <!-- Finds the most recent message sent between each user-->
  
   <?php
   $sql2 = "SELECT * FROM USER WHERE U_ID = '$friend'";
   $f_result = $db->query($sql2);
   $row2 = $f_result->fetch_assoc();
    echo "<h1 style='text-align: left; margin-top: -5%; font-weight: cursive; font-size: 17.5px'>".$row2["U_FNAME"]." ".$row2["U_LNAME"]."</h1>";
    $sqlmess = "SELECT FRIEND_ID FROM FRIEND WHERE FRIEND_ONE = '$user' AND FRIEND_TWO = '$friend'";
    $mess_result = $db->query($sqlmess);
    $row3 = $mess_result->fetch_assoc();
    $frid = $row3["FRIEND_ID"];
    $sqlget = "SELECT * FROM MESSAGE WHERE FRIEND_ID = '$frid' ORDER BY M_ID DESC LIMIT 0, 1";
    $mess_get = $db->query($sqlget);
    $row4 = $mess_get->fetch_assoc();
    if($row4["M_WORDS_OUT"] == NULL){
    $recent = $row4["M_WORDS_IN"];
       if($row4["M_READS"] == 0){
       	$unread = TRUE;
    }
    else{
    	$unread = FALSE;
    }
    }else{
    $recent = $row4["M_WORDS_OUT"];
       if($row4["M_READS"] == 0){
       	$unread = TRUE;
    }else{
    	$unread = FALSE;
    }
    }
    
    
    if($unread == TRUE){
	echo "<h2 id='messagepreview' style='font-weight: bold'>NEW: $recent</h2>";
    }else{
    echo "<h2 id='messagepreview'>$recent</h2>";
    }
    
    
   // echo "<h2 id='messagepreview'>$recent</h2>";
   echo "</button>";
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

<div id="box2" class="w3-display-middle w3-padding-large w3-xlarge" style="color: black; display: inline">
<?php

$receiver = $_GET["f2"];
$sender = $user;

 include "config.php";

$sql = "SELECT FRIEND_ID FROM FRIEND WHERE FRIEND_ONE = '$sender' AND FRIEND_TWO = '$receiver'";
	$result = $db->query($sql);
		  	if ($result->num_rows == 1) {
			$row = $result->fetch_assoc();
			$fid = $row["FRIEND_ID"];
			$readsql = "UPDATE MESSAGE SET M_READS = '1' WHERE FRIEND_ID = '$fid'";
			$db->query($readsql);
			$sql2 = "SELECT * FROM MESSAGE WHERE FRIEND_ID = '$fid'";
			$rs_result = $db->query($sql2); 
             while($row2 = $rs_result->fetch_assoc()) {
                 
                 //use the if to colorize and separte who is sending the message
                 
                 if($row2["M_WORDS_OUT"] == NULL){
                 	echo "<div id='grey'>";
                	echo $row2["M_WORDS_IN"];
                	echo "</div>";
                 }else{
                 	echo "<div id='bleu'>";
                	echo $row2["M_WORDS_OUT"];
                	echo "</div>";
                 }
                 echo "<br>";
                
		  	}
		  	}
?>
</div>
<div id="box3" class="w3-display-bottom w3-padding-large w3-xlarge">
	<form action="/Pages/MessageSender.php?f2=<?php echo $receiver; ?>" method="post">
	<textarea onkeyup="charCount(this, 'counter', 250);" id="mess" name="mess" placeholder="Type your message here..." maxlength="250"></textarea><br><br>
	<button id="send" type="submit" position="relative">Send</button>
	<input disabled maxlength="3" size="2" value="250" id="counter"> charcters remaining
	</form>
</div>


<script>
  function charCount(field, field2, maxlimit){
      var countfield = document.getElementById(field2);
      if (field.value.length > maxlimit){
          field.value = field.value.substring(0,maxlimit);
          return false;
      }else{
          countfield.value = maxlimit - field.value.length;
      }
  }
var myDiv = document.getElementById("box2");
myDiv.scrollTop = myDiv.scrollHeight;
function show() {
    var x = document.getElementById("box2");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
function updateDiv()
{
	$("#innerbox").load(window.location.href + " #innerbox" );
}
</script>


</body>
</html>

