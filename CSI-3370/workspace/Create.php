
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
<?php

// The following will reset any login variables, meaning a user won't be able to type in a url other than the index page
session_start();

// Unset all of the session variables.
$_SESSION = array();

if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

session_destroy();
 ?>
<style type="text/css">
	body,p,div,ul,li,h1,h2,h3,h4,h5,h6{
		margin:0;
		padding: 0;
	}
	#title{
	 position: absolute;
	 width:100%;
	 text-align: center;
	 margin: auto;
	 top: -20px;
	 left:0px;
	 white-space: nowrap;
	}
	body{
/*		background:#D8D8D8; */
                background-image: url(/Pictures/Background.jpg)
	}
	.doubledick:hover{
	  color: purple;
	}
	.doubledick{
	  text-decoration: none; color: #CC6FA2; font-size: 20px; text-align: center; width: 100%; position: absolute
	}
		#submit{
		width: 100px;
		height: 30px;
		border:solid #ccc 1px;
		border-radius: 3px;
		margin-bottom: 15px;
	}
	#login{
		width: 400px;
		height: 80%;
		background: #FFF;
		margin:150px auto;
		position: relative;
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
	
	.Escherichia{
	    	background: url(/Pictures/Background.jpg) rgba(25,223,1,.1) no-repeat;
		width: 200px;
		height: 30px;
		border:solid #ccc 1px;
		border-radius: 3px;
		padding-left: 32px;
		margin-bottom: 30px;
	}
	#submit:hover{
		cursor: pointer;
		background: activecaption;
	}
        .animate {
  font-size: 50px;
  margin: 100px 0 0;
  position:absolute;
  left:765px;
  top:100px;
 /*border-bottom: 2px solid #ccc;*/
}

.animate span {
  display: inline-block;
}

a.repeat {
  display: inline-block;
  font-size: 12px;
  text-transform: none;
  text-decoration: none;
  color: orange;
  padding: 5px 12px;
  border: 1px solid #cecece;
  font-weight: normal;
  margin: 0 0 0 50px;
  border-radius: 5px;
  position: relative;
  bottom: 15px;
}

.animate span:nth-of-type(2) {
  animation-delay: .05s;
}

.animate span:nth-of-type(3) {
  animation-delay: .1s;
}

.animate span:nth-of-type(4) {
  animation-delay: .15s;
}

.animate span:nth-of-type(5) {
  animation-delay: .2s;
}

.animate span:nth-of-type(6) {
  animation-delay: .25s;
}

.animate span:nth-of-type(7) {
  animation-delay: .3s;
}

.animate span:nth-of-type(8) {
  animation-delay: .35s;
}
.one span {
  color: black;
  opacity: 0;
  transform: translate(-150px, -50px) rotate(-180deg) scale(3);
  animation: revolveScale .4s forwards;
}

@keyframes revolveScale {
  60% {
    transform: translate(20px, 20px) rotate(30deg) scale(.3);
  }
  100% {
    transform: translate(0) rotate(0) scale(1);
    opacity: 1;
  }
}

</style>
 <style>
html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0}article,aside,details,figcaption,figure,footer,header,hgroup,main,nav,section,summary{display:block}audio,canvas,progress,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],template{display:none}a{background:transparent}a:active,a:hover{outline:0}abbr[title]{border-bottom:1px dotted}b,strong{font-weight:bold}dfn{font-style:italic}h1{font-size:2em;margin:0.67em 0}mark{background:#ff0;color:#000}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sup{top:-0.5em}sub{bottom:-0.25em}img{border:0}svg:not(:root){overflow:hidden}figure{margin:1em 40px}hr{-moz-box-sizing:content-box;box-sizing:content-box;height:0}pre{overflow:auto}code,kbd,pre,samp{font-family:monospace, monospace;font-size:1em}button,input,optgroup,select,textarea{color:inherit;font:inherit;margin:0}button{overflow:visible}button,select{text-transform:none}button,html input[type="button"],input[type="reset"],input[type="submit"]{-webkit-appearance:button;cursor:pointer}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}input{line-height:normal}input[type="checkbox"],input[type="radio"]{-moz-box-sizing:border-box;box-sizing:border-box;padding:0}input[type="number"]::-webkit-inner-spin-button,input[type="number"]::-webkit-outer-spin-button{height:auto}input[type="search"]{-webkit-appearance:textfield;-moz-box-sizing:content-box;box-sizing:content-box}input[type="search"]::-webkit-search-cancel-button,input[type="search"]::-webkit-search-decoration{-webkit-appearance:none}fieldset{border:1px solid #c0c0c0;margin:0 2px;padding:0.35em 0.625em 0.75em}legend{border:0;padding:0}textarea{overflow:auto}optgroup{font-weight:bold}table{border-collapse:collapse;border-spacing:0}td,th{padding:0}

</style>

    <style>
html, body {
  overflow: hidden;
  background-image: url(/Pictures/Background.jpg);
}

.wrapper {
  position: absolute;
  top: 50%;
  left: 50%;
  z-index: 2;
  -moz-perspective: 500px;
  -webkit-perspective: 500px;
  perspective: 500px;
}

i {
  display: block;
  position: absolute;
  width: 8px;
  height: 8px;
  border-radius: 8px;
  opacity: 0;
  background: rgba(255, 255, 255, 0.5);
  box-shadow: 0px 0px 10px white;
  animation-name: spin;
  animation-duration: 3s;
  animation-iteration-count: infinite;
  animation-timing-function: ease-in-out;
}

i:nth-child(1) {
  -moz-transform: rotate(11.6129deg) translate3d(80px, 0, 0);
  -ms-transform: rotate(11.6129deg) translate3d(80px, 0, 0);
  -webkit-transform: rotate(11.6129deg) translate3d(80px, 0, 0);
  transform: rotate(11.6129deg) translate3d(80px, 0, 0);
  animation-delay: 0.04839s;
}

i:nth-child(2) {
  -moz-transform: rotate(23.22581deg) translate3d(80px, 0, 0);
  -ms-transform: rotate(23.22581deg) translate3d(80px, 0, 0);
  -webkit-transform: rotate(23.22581deg) translate3d(80px, 0, 0);
  transform: rotate(23.22581deg) translate3d(80px, 0, 0);
  animation-delay: 0.09677s;
}

i:nth-child(3) {
  -moz-transform: rotate(34.83871deg) translate3d(80px, 0, 0);
  -ms-transform: rotate(34.83871deg) translate3d(80px, 0, 0);
  -webkit-transform: rotate(34.83871deg) translate3d(80px, 0, 0);
  transform: rotate(34.83871deg) translate3d(80px, 0, 0);
  animation-delay: 0.14516s;
}

i:nth-child(4) {
  -moz-transform: rotate(46.45161deg) translate3d(80px, 0, 0);
  -ms-transform: rotate(46.45161deg) translate3d(80px, 0, 0);
  -webkit-transform: rotate(46.45161deg) translate3d(80px, 0, 0);
  transform: rotate(46.45161deg) translate3d(80px, 0, 0);
  animation-delay: 0.19355s;
}

i:nth-child(5) {
  -moz-transform: rotate(58.06452deg) translate3d(80px, 0, 0);
  -ms-transform: rotate(58.06452deg) translate3d(80px, 0, 0);
  -webkit-transform: rotate(58.06452deg) translate3d(80px, 0, 0);
  transform: rotate(58.06452deg) translate3d(80px, 0, 0);
  animation-delay: 0.24194s;
}

i:nth-child(6) {
  -moz-transform: rotate(69.67742deg) translate3d(80px, 0, 0);
  -ms-transform: rotate(69.67742deg) translate3d(80px, 0, 0);
  -webkit-transform: rotate(69.67742deg) translate3d(80px, 0, 0);
  transform: rotate(69.67742deg) translate3d(80px, 0, 0);
  animation-delay: 0.29032s;
}

i:nth-child(7) {
  -moz-transform: rotate(81.29032deg) translate3d(80px, 0, 0);
  -ms-transform: rotate(81.29032deg) translate3d(80px, 0, 0);
  -webkit-transform: rotate(81.29032deg) translate3d(80px, 0, 0);
  transform: rotate(81.29032deg) translate3d(80px, 0, 0);
  animation-delay: 0.33871s;
}

i:nth-child(8) {
  -moz-transform: rotate(92.90323deg) translate3d(80px, 0, 0);
  -ms-transform: rotate(92.90323deg) translate3d(80px, 0, 0);
  -webkit-transform: rotate(92.90323deg) translate3d(80px, 0, 0);
  transform: rotate(92.90323deg) translate3d(80px, 0, 0);
  animation-delay: 0.3871s;
}

i:nth-child(9) {
  -moz-transform: rotate(104.51613deg) translate3d(80px, 0, 0);
  -ms-transform: rotate(104.51613deg) translate3d(80px, 0, 0);
  -webkit-transform: rotate(104.51613deg) translate3d(80px, 0, 0);
  transform: rotate(104.51613deg) translate3d(80px, 0, 0);
  animation-delay: 0.43548s;
}

i:nth-child(10) {
  -moz-transform: rotate(116.12903deg) translate3d(80px, 0, 0);
  -ms-transform: rotate(116.12903deg) translate3d(80px, 0, 0);
  -webkit-transform: rotate(116.12903deg) translate3d(80px, 0, 0);
  transform: rotate(116.12903deg) translate3d(80px, 0, 0);
  animation-delay: 0.48387s;
}

i:nth-child(11) {
  -moz-transform: rotate(127.74194deg) translate3d(80px, 0, 0);
  -ms-transform: rotate(127.74194deg) translate3d(80px, 0, 0);
  -webkit-transform: rotate(127.74194deg) translate3d(80px, 0, 0);
  transform: rotate(127.74194deg) translate3d(80px, 0, 0);
  animation-delay: 0.53226s;
}

i:nth-child(12) {
  -moz-transform: rotate(139.35484deg) translate3d(80px, 0, 0);
  -ms-transform: rotate(139.35484deg) translate3d(80px, 0, 0);
  -webkit-transform: rotate(139.35484deg) translate3d(80px, 0, 0);
  transform: rotate(139.35484deg) translate3d(80px, 0, 0);
  animation-delay: 0.58065s;
}

i:nth-child(13) {
  -moz-transform: rotate(150.96774deg) translate3d(80px, 0, 0);
  -ms-transform: rotate(150.96774deg) translate3d(80px, 0, 0);
  -webkit-transform: rotate(150.96774deg) translate3d(80px, 0, 0);
  transform: rotate(150.96774deg) translate3d(80px, 0, 0);
  animation-delay: 0.62903s;
}

i:nth-child(14) {
  -moz-transform: rotate(162.58065deg) translate3d(80px, 0, 0);
  -ms-transform: rotate(162.58065deg) translate3d(80px, 0, 0);
  -webkit-transform: rotate(162.58065deg) translate3d(80px, 0, 0);
  transform: rotate(162.58065deg) translate3d(80px, 0, 0);
  animation-delay: 0.67742s;
}

i:nth-child(15) {
  -moz-transform: rotate(174.19355deg) translate3d(80px, 0, 0);
  -ms-transform: rotate(174.19355deg) translate3d(80px, 0, 0);
  -webkit-transform: rotate(174.19355deg) translate3d(80px, 0, 0);
  transform: rotate(174.19355deg) translate3d(80px, 0, 0);
  animation-delay: 0.72581s;
}

i:nth-child(16) {
  -moz-transform: rotate(185.80645deg) translate3d(80px, 0, 0);
  -ms-transform: rotate(185.80645deg) translate3d(80px, 0, 0);
  -webkit-transform: rotate(185.80645deg) translate3d(80px, 0, 0);
  transform: rotate(185.80645deg) translate3d(80px, 0, 0);
  animation-delay: 0.77419s;
}

i:nth-child(17) {
  -moz-transform: rotate(197.41935deg) translate3d(80px, 0, 0);
  -ms-transform: rotate(197.41935deg) translate3d(80px, 0, 0);
  -webkit-transform: rotate(197.41935deg) translate3d(80px, 0, 0);
  transform: rotate(197.41935deg) translate3d(80px, 0, 0);
  animation-delay: 0.82258s;
}

i:nth-child(18) {
  -moz-transform: rotate(209.03226deg) translate3d(80px, 0, 0);
  -ms-transform: rotate(209.03226deg) translate3d(80px, 0, 0);
  -webkit-transform: rotate(209.03226deg) translate3d(80px, 0, 0);
  transform: rotate(209.03226deg) translate3d(80px, 0, 0);
  animation-delay: 0.87097s;
}

i:nth-child(19) {
  -moz-transform: rotate(220.64516deg) translate3d(80px, 0, 0);
  -ms-transform: rotate(220.64516deg) translate3d(80px, 0, 0);
  -webkit-transform: rotate(220.64516deg) translate3d(80px, 0, 0);
  transform: rotate(220.64516deg) translate3d(80px, 0, 0);
  animation-delay: 0.91935s;
}

i:nth-child(20) {
  -moz-transform: rotate(232.25806deg) translate3d(80px, 0, 0);
  -ms-transform: rotate(232.25806deg) translate3d(80px, 0, 0);
  -webkit-transform: rotate(232.25806deg) translate3d(80px, 0, 0);
  transform: rotate(232.25806deg) translate3d(80px, 0, 0);
  animation-delay: 0.96774s;
}

i:nth-child(21) {
  -moz-transform: rotate(243.87097deg) translate3d(80px, 0, 0);
  -ms-transform: rotate(243.87097deg) translate3d(80px, 0, 0);
  -webkit-transform: rotate(243.87097deg) translate3d(80px, 0, 0);
  transform: rotate(243.87097deg) translate3d(80px, 0, 0);
  animation-delay: 1.01613s;
}

i:nth-child(22) {
  -moz-transform: rotate(255.48387deg) translate3d(80px, 0, 0);
  -ms-transform: rotate(255.48387deg) translate3d(80px, 0, 0);
  -webkit-transform: rotate(255.48387deg) translate3d(80px, 0, 0);
  transform: rotate(255.48387deg) translate3d(80px, 0, 0);
  animation-delay: 1.06452s;
}

i:nth-child(23) {
  -moz-transform: rotate(267.09677deg) translate3d(80px, 0, 0);
  -ms-transform: rotate(267.09677deg) translate3d(80px, 0, 0);
  -webkit-transform: rotate(267.09677deg) translate3d(80px, 0, 0);
  transform: rotate(267.09677deg) translate3d(80px, 0, 0);
  animation-delay: 1.1129s;
}

i:nth-child(24) {
  -moz-transform: rotate(278.70968deg) translate3d(80px, 0, 0);
  -ms-transform: rotate(278.70968deg) translate3d(80px, 0, 0);
  -webkit-transform: rotate(278.70968deg) translate3d(80px, 0, 0);
  transform: rotate(278.70968deg) translate3d(80px, 0, 0);
  animation-delay: 1.16129s;
}

i:nth-child(25) {
  -moz-transform: rotate(290.32258deg) translate3d(80px, 0, 0);
  -ms-transform: rotate(290.32258deg) translate3d(80px, 0, 0);
  -webkit-transform: rotate(290.32258deg) translate3d(80px, 0, 0);
  transform: rotate(290.32258deg) translate3d(80px, 0, 0);
  animation-delay: 1.20968s;
}

i:nth-child(26) {
  -moz-transform: rotate(301.93548deg) translate3d(80px, 0, 0);
  -ms-transform: rotate(301.93548deg) translate3d(80px, 0, 0);
  -webkit-transform: rotate(301.93548deg) translate3d(80px, 0, 0);
  transform: rotate(301.93548deg) translate3d(80px, 0, 0);
  animation-delay: 1.25806s;
}

i:nth-child(27) {
  -moz-transform: rotate(313.54839deg) translate3d(80px, 0, 0);
  -ms-transform: rotate(313.54839deg) translate3d(80px, 0, 0);
  -webkit-transform: rotate(313.54839deg) translate3d(80px, 0, 0);
  transform: rotate(313.54839deg) translate3d(80px, 0, 0);
  animation-delay: 1.30645s;
}

i:nth-child(28) {
  -moz-transform: rotate(325.16129deg) translate3d(80px, 0, 0);
  -ms-transform: rotate(325.16129deg) translate3d(80px, 0, 0);
  -webkit-transform: rotate(325.16129deg) translate3d(80px, 0, 0);
  transform: rotate(325.16129deg) translate3d(80px, 0, 0);
  animation-delay: 1.35484s;
}

i:nth-child(29) {
  -moz-transform: rotate(336.77419deg) translate3d(80px, 0, 0);
  -ms-transform: rotate(336.77419deg) translate3d(80px, 0, 0);
  -webkit-transform: rotate(336.77419deg) translate3d(80px, 0, 0);
  transform: rotate(336.77419deg) translate3d(80px, 0, 0);
  animation-delay: 1.40323s;
}

i:nth-child(30) {
  -moz-transform: rotate(348.3871deg) translate3d(80px, 0, 0);
  -ms-transform: rotate(348.3871deg) translate3d(80px, 0, 0);
  -webkit-transform: rotate(348.3871deg) translate3d(80px, 0, 0);
  transform: rotate(348.3871deg) translate3d(80px, 0, 0);
  animation-delay: 1.45161s;
}

i:nth-child(31) {
  -moz-transform: rotate(360deg) translate3d(80px, 0, 0);
  -ms-transform: rotate(360deg) translate3d(80px, 0, 0);
  -webkit-transform: rotate(360deg) translate3d(80px, 0, 0);
  transform: rotate(360deg) translate3d(80px, 0, 0);
  animation-delay: 1.5s;
}

i:nth-child(32) {
  -moz-transform: rotate(371.6129deg) translate3d(80px, 0, 0);
  -ms-transform: rotate(371.6129deg) translate3d(80px, 0, 0);
  -webkit-transform: rotate(371.6129deg) translate3d(80px, 0, 0);
  transform: rotate(371.6129deg) translate3d(80px, 0, 0);
  animation-delay: 1.54839s;
}

i:nth-child(33) {
  -moz-transform: rotate(383.22581deg) translate3d(80px, 0, 0);
  -ms-transform: rotate(383.22581deg) translate3d(80px, 0, 0);
  -webkit-transform: rotate(383.22581deg) translate3d(80px, 0, 0);
  transform: rotate(383.22581deg) translate3d(80px, 0, 0);
  animation-delay: 1.59677s;
}

i:nth-child(34) {
  -moz-transform: rotate(394.83871deg) translate3d(80px, 0, 0);
  -ms-transform: rotate(394.83871deg) translate3d(80px, 0, 0);
  -webkit-transform: rotate(394.83871deg) translate3d(80px, 0, 0);
  transform: rotate(394.83871deg) translate3d(80px, 0, 0);
  animation-delay: 1.64516s;
}

i:nth-child(35) {
  -moz-transform: rotate(406.45161deg) translate3d(80px, 0, 0);
  -ms-transform: rotate(406.45161deg) translate3d(80px, 0, 0);
  -webkit-transform: rotate(406.45161deg) translate3d(80px, 0, 0);
  transform: rotate(406.45161deg) translate3d(80px, 0, 0);
  animation-delay: 1.69355s;
}

i:nth-child(36) {
  -moz-transform: rotate(418.06452deg) translate3d(80px, 0, 0);
  -ms-transform: rotate(418.06452deg) translate3d(80px, 0, 0);
  -webkit-transform: rotate(418.06452deg) translate3d(80px, 0, 0);
  transform: rotate(418.06452deg) translate3d(80px, 0, 0);
  animation-delay: 1.74194s;
}

i:nth-child(37) {
  -moz-transform: rotate(429.67742deg) translate3d(80px, 0, 0);
  -ms-transform: rotate(429.67742deg) translate3d(80px, 0, 0);
  -webkit-transform: rotate(429.67742deg) translate3d(80px, 0, 0);
  transform: rotate(429.67742deg) translate3d(80px, 0, 0);
  animation-delay: 1.79032s;
}

i:nth-child(38) {
  -moz-transform: rotate(441.29032deg) translate3d(80px, 0, 0);
  -ms-transform: rotate(441.29032deg) translate3d(80px, 0, 0);
  -webkit-transform: rotate(441.29032deg) translate3d(80px, 0, 0);
  transform: rotate(441.29032deg) translate3d(80px, 0, 0);
  animation-delay: 1.83871s;
}

i:nth-child(39) {
  -moz-transform: rotate(452.90323deg) translate3d(80px, 0, 0);
  -ms-transform: rotate(452.90323deg) translate3d(80px, 0, 0);
  -webkit-transform: rotate(452.90323deg) translate3d(80px, 0, 0);
  transform: rotate(452.90323deg) translate3d(80px, 0, 0);
  animation-delay: 1.8871s;
}

i:nth-child(40) {
  -moz-transform: rotate(464.51613deg) translate3d(80px, 0, 0);
  -ms-transform: rotate(464.51613deg) translate3d(80px, 0, 0);
  -webkit-transform: rotate(464.51613deg) translate3d(80px, 0, 0);
  transform: rotate(464.51613deg) translate3d(80px, 0, 0);
  animation-delay: 1.93548s;
}

i:nth-child(41) {
  -moz-transform: rotate(476.12903deg) translate3d(80px, 0, 0);
  -ms-transform: rotate(476.12903deg) translate3d(80px, 0, 0);
  -webkit-transform: rotate(476.12903deg) translate3d(80px, 0, 0);
  transform: rotate(476.12903deg) translate3d(80px, 0, 0);
  animation-delay: 1.98387s;
}

i:nth-child(42) {
  -moz-transform: rotate(487.74194deg) translate3d(80px, 0, 0);
  -ms-transform: rotate(487.74194deg) translate3d(80px, 0, 0);
  -webkit-transform: rotate(487.74194deg) translate3d(80px, 0, 0);
  transform: rotate(487.74194deg) translate3d(80px, 0, 0);
  animation-delay: 2.03226s;
}

i:nth-child(43) {
  -moz-transform: rotate(499.35484deg) translate3d(80px, 0, 0);
  -ms-transform: rotate(499.35484deg) translate3d(80px, 0, 0);
  -webkit-transform: rotate(499.35484deg) translate3d(80px, 0, 0);
  transform: rotate(499.35484deg) translate3d(80px, 0, 0);
  animation-delay: 2.08065s;
}

i:nth-child(44) {
  -moz-transform: rotate(510.96774deg) translate3d(80px, 0, 0);
  -ms-transform: rotate(510.96774deg) translate3d(80px, 0, 0);
  -webkit-transform: rotate(510.96774deg) translate3d(80px, 0, 0);
  transform: rotate(510.96774deg) translate3d(80px, 0, 0);
  animation-delay: 2.12903s;
}

i:nth-child(45) {
  -moz-transform: rotate(522.58065deg) translate3d(80px, 0, 0);
  -ms-transform: rotate(522.58065deg) translate3d(80px, 0, 0);
  -webkit-transform: rotate(522.58065deg) translate3d(80px, 0, 0);
  transform: rotate(522.58065deg) translate3d(80px, 0, 0);
  animation-delay: 2.17742s;
}

i:nth-child(46) {
  -moz-transform: rotate(534.19355deg) translate3d(80px, 0, 0);
  -ms-transform: rotate(534.19355deg) translate3d(80px, 0, 0);
  -webkit-transform: rotate(534.19355deg) translate3d(80px, 0, 0);
  transform: rotate(534.19355deg) translate3d(80px, 0, 0);
  animation-delay: 2.22581s;
}

i:nth-child(47) {
  -moz-transform: rotate(545.80645deg) translate3d(80px, 0, 0);
  -ms-transform: rotate(545.80645deg) translate3d(80px, 0, 0);
  -webkit-transform: rotate(545.80645deg) translate3d(80px, 0, 0);
  transform: rotate(545.80645deg) translate3d(80px, 0, 0);
  animation-delay: 2.27419s;
}

i:nth-child(48) {
  -moz-transform: rotate(557.41935deg) translate3d(80px, 0, 0);
  -ms-transform: rotate(557.41935deg) translate3d(80px, 0, 0);
  -webkit-transform: rotate(557.41935deg) translate3d(80px, 0, 0);
  transform: rotate(557.41935deg) translate3d(80px, 0, 0);
  animation-delay: 2.32258s;
}

i:nth-child(49) {
  -moz-transform: rotate(569.03226deg) translate3d(80px, 0, 0);
  -ms-transform: rotate(569.03226deg) translate3d(80px, 0, 0);
  -webkit-transform: rotate(569.03226deg) translate3d(80px, 0, 0);
  transform: rotate(569.03226deg) translate3d(80px, 0, 0);
  animation-delay: 2.37097s;
}

i:nth-child(50) {
  -moz-transform: rotate(580.64516deg) translate3d(80px, 0, 0);
  -ms-transform: rotate(580.64516deg) translate3d(80px, 0, 0);
  -webkit-transform: rotate(580.64516deg) translate3d(80px, 0, 0);
  transform: rotate(580.64516deg) translate3d(80px, 0, 0);
  animation-delay: 2.41935s;
}

i:nth-child(51) {
  -moz-transform: rotate(592.25806deg) translate3d(80px, 0, 0);
  -ms-transform: rotate(592.25806deg) translate3d(80px, 0, 0);
  -webkit-transform: rotate(592.25806deg) translate3d(80px, 0, 0);
  transform: rotate(592.25806deg) translate3d(80px, 0, 0);
  animation-delay: 2.46774s;
}

i:nth-child(52) {
  -moz-transform: rotate(603.87097deg) translate3d(80px, 0, 0);
  -ms-transform: rotate(603.87097deg) translate3d(80px, 0, 0);
  -webkit-transform: rotate(603.87097deg) translate3d(80px, 0, 0);
  transform: rotate(603.87097deg) translate3d(80px, 0, 0);
  animation-delay: 2.51613s;
}

i:nth-child(53) {
  -moz-transform: rotate(615.48387deg) translate3d(80px, 0, 0);
  -ms-transform: rotate(615.48387deg) translate3d(80px, 0, 0);
  -webkit-transform: rotate(615.48387deg) translate3d(80px, 0, 0);
  transform: rotate(615.48387deg) translate3d(80px, 0, 0);
  animation-delay: 2.56452s;
}

i:nth-child(54) {
  -moz-transform: rotate(627.09677deg) translate3d(80px, 0, 0);
  -ms-transform: rotate(627.09677deg) translate3d(80px, 0, 0);
  -webkit-transform: rotate(627.09677deg) translate3d(80px, 0, 0);
  transform: rotate(627.09677deg) translate3d(80px, 0, 0);
  animation-delay: 2.6129s;
}

i:nth-child(55) {
  -moz-transform: rotate(638.70968deg) translate3d(80px, 0, 0);
  -ms-transform: rotate(638.70968deg) translate3d(80px, 0, 0);
  -webkit-transform: rotate(638.70968deg) translate3d(80px, 0, 0);
  transform: rotate(638.70968deg) translate3d(80px, 0, 0);
  animation-delay: 2.66129s;
}

i:nth-child(56) {
  -moz-transform: rotate(650.32258deg) translate3d(80px, 0, 0);
  -ms-transform: rotate(650.32258deg) translate3d(80px, 0, 0);
  -webkit-transform: rotate(650.32258deg) translate3d(80px, 0, 0);
  transform: rotate(650.32258deg) translate3d(80px, 0, 0);
  animation-delay: 2.70968s;
}

i:nth-child(57) {
  -moz-transform: rotate(661.93548deg) translate3d(80px, 0, 0);
  -ms-transform: rotate(661.93548deg) translate3d(80px, 0, 0);
  -webkit-transform: rotate(661.93548deg) translate3d(80px, 0, 0);
  transform: rotate(661.93548deg) translate3d(80px, 0, 0);
  animation-delay: 2.75806s;
}

i:nth-child(58) {
  -moz-transform: rotate(673.54839deg) translate3d(80px, 0, 0);
  -ms-transform: rotate(673.54839deg) translate3d(80px, 0, 0);
  -webkit-transform: rotate(673.54839deg) translate3d(80px, 0, 0);
  transform: rotate(673.54839deg) translate3d(80px, 0, 0);
  animation-delay: 2.80645s;
}

i:nth-child(59) {
  -moz-transform: rotate(685.16129deg) translate3d(80px, 0, 0);
  -ms-transform: rotate(685.16129deg) translate3d(80px, 0, 0);
  -webkit-transform: rotate(685.16129deg) translate3d(80px, 0, 0);
  transform: rotate(685.16129deg) translate3d(80px, 0, 0);
  animation-delay: 2.85484s;
}

i:nth-child(60) {
  -moz-transform: rotate(696.77419deg) translate3d(80px, 0, 0);
  -ms-transform: rotate(696.77419deg) translate3d(80px, 0, 0);
  -webkit-transform: rotate(696.77419deg) translate3d(80px, 0, 0);
  transform: rotate(696.77419deg) translate3d(80px, 0, 0);
  animation-delay: 2.90323s;
}

i:nth-child(61) {
  -moz-transform: rotate(708.3871deg) translate3d(80px, 0, 0);
  -ms-transform: rotate(708.3871deg) translate3d(80px, 0, 0);
  -webkit-transform: rotate(708.3871deg) translate3d(80px, 0, 0);
  transform: rotate(708.3871deg) translate3d(80px, 0, 0);
  animation-delay: 2.95161s;
}

i:nth-child(62) {
  -moz-transform: rotate(720deg) translate3d(80px, 0, 0);
  -ms-transform: rotate(720deg) translate3d(80px, 0, 0);
  -webkit-transform: rotate(720deg) translate3d(80px, 0, 0);
  transform: rotate(720deg) translate3d(80px, 0, 0);
  animation-delay: 3s;
}

@keyframes spin {
  from {
    opacity: 0.0;
  }

  to {
    opacity: 0.6;
    transform: translate3d(-4px, -4px, 570px);
  }
}
#black {
  position: absolute;
  left: 10px;
  bottom: 10px;
  color: rgba(255, 255, 255, 0.6);
  text-decoration: none;
}
#black:after {
  content: 'Black & white';
}

#black:target {
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1;
  background: #111;
  cursor: default;
}
#black:target:after {
  content: '';
}

</style>
    <script src="js/prefixfree.min.js"></script>

</head>
<body>
    <div style="text-align:center;clear:both;">
<script src="/gg_bd_ad_720x90.js" type="text/javascript"></script>
<script src="/follow.js" type="text/javascript"></script>
</div>
  <div class='wrapper'>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
</div>

  <script src="js/index.js"></script>
    <div id="title" style="font-family:monoton, cursive; margins: auto; margin-top: 100px;text-align: center" class="animate one">
        <span style="color: white">S</span><span style="color: white">c</span><span style="color: white">o</span><span style="color: white">t</span><span style="color: white">t</span><span style="color: white">I</span><span style="color: white">M</span>
  </div>

<div id="login">
	<form action="/Pages/CreateAccount.php" method="post">
	    <br>
		<p><input class="Escherichia" type="text" name="first" id="first" style="border-radius: 20px" placeholder="first name"></p>
		<p><input class="Escherichia" type="text" name="last" id="last" style="border-radius: 20px" placeholder="last name"></p>
		<p><input class="Escherichia" type="text" name="email" id="email" style="border-radius: 20px" placeholder="oakland email"></p>
		<p><input class="Escherichia" type="text" name="user" id="user" style="border-radius: 20px" placeholder="username"></p>
		<p><input class="Escherichia" type="password" name="passw0rd" id="passw0rd" style="border-radius: 20px" placeholder="password"></p>
		<p><input class="Escherichia" type="password" name="passw0rd2" id="passw0rd2" style="border-radius: 20px" placeholder="confirm password"></p>
                <p><td><input type="submit" id="submit" style="background: #CC6FA2" value="SUBMIT"><label>
         
                  
              
                
	</form>
</div>
<div style="text-align:center;">
</div>
 <script>
$(function(){
	$('.repeat').click(function(){
    	var classes =  $(this).parent().attr('class');
        $(this).parent().attr('class', 'animate');
        var indicator = $(this);
        setTimeout(function(){ 
        	$(indicator).parent().addClass(classes);
        }, 20);
    });
});
</script>

<div style="text-align:center;margin:50px 0; font:normal 14px/24px 'MicroSoft YaHei';">
</div>
</body>
</html>
