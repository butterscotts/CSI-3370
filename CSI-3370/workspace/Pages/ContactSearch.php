
<!DOCTYPE html>

<html>
  <link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>ScottIM</title>
<meta name="description" content="登录界面">
<meta name="keywords" content="登录界面">
<link href="" rel="stylesheet">
<style type="text/css">
	body,p,div,ul,li,h1,h2,h3,h4,h5,h6{
		margin:0;
		padding: 0;
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
	    margin-left: 92.5%;
	    border: solid 2px white;
	    color: white;
	    border-radius: 20px;
	    font-size: 20px;
	    width: 100px;
	    background: darkblue;
	    height: 40px;
	}
	#title{
	 position: absolute;
	 width:100%;
	 text-align: center;
	 margin-top: 100px;
	 left:0px;
	 white-space: nowrap;
	 font-size: 50px;
	 color: white;
	}
	body{
/*		background:#D8D8D8; */
                background-image: url(/Pictures/Background.jpg)
	}

	#login{
		width: 400px;
		height: 250px;
		background: #FFF;
		margin: 35%;
		margin-top: 250px;
		position: absolute;
		border-radius: 20px;
		opacity: .7;
		color: white;
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
	
	#email{
		background: url(/Pictures/Background.jpg) rgba(25,223,1,.10) no-repeat;
		width: 200px;
		height: 30px;
		border:solid #ccc 1px;
		border-radius: 3px;
		padding-left: 32px;
		margin-top: 50px;
		margin-bottom: 30px;
		color: white;
		font-size: 15px;
	}
	#username{
		background: url(/Pictures/Background.jpg) rgba(25,223,1,.1) no-repeat;
		width: 200px;
		height: 30px;
		border:solid #ccc 1px;
		border-radius: 3px;
		padding-left: 32px;
		margin-bottom: 30px;
		color: white;
		font-size: 15px;
	}
	#submit{
		width: 100px;
		height: 30px;
		background: rgba(0,0,0,.1);
		border: solid #ccc 1px;
		border-radius: 3px;
	}
	#submit:hover{
		cursor: pointer;
		background: activecaption;
	}
        #reset{
		width: 100px;
		height: 30px;
		background: orange;
		border:solid #ccc 1px;
		border-radius: 3px;
	}
	#reset:hover{
		cursor: pointer;
		background: activecaption;
	}


</style>
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
<body>
   

    <div id="title" style="font-family:monoton, cursive">SEARCH for CONTACTS
  </div>

<div id="login">
	<form action="/Pages/FindContact.php" method="post">
		<p><input type="text" name="email" id="email" style="border-radius: 20px; rgba(25,223,1,.1) no-repeat" placeholder="search by email"></p>
		<p><input type="text" name="username" id="username" style="border-radius: 20px" placeholder="search by username"></p>
                <p><td><input type="submit" id="submit" style="background: #CC6FA2; font-weight: bold" value="SUBMIT"><label>
	</form>
</div>

    <button id="logout" onclick = "window.location.href = 'https://scottim-mrcalihan.c9users.io/Login.php';">Log Out</button>
    <button id="home" onclick = "window.location.href = 'https://scottim-mrcalihan.c9users.io/Pages/Index.php';">Home</button>

</body>
</html>
