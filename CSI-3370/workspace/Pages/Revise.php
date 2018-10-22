 <!DOCTYPE html>
 <html xmlns="http://www.w3.org/1999/xhtml">
 <head>
     <?php
     session_start();
     ?>
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
 <title>reset_password</title>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <link href="../css/adminStyle.css" rel="stylesheet" type="text/css" />
 <style type="text/css">
      a {
   position:absolute;
   left:360px;
   top:215px;
 /*  border-bottom: 2px solid #ccc;*/
 }
 </style>
 </head>
 <body>
  <form action="/Pages/UpdatePass.php" method="post">
  <div class="wrap">
   <div class="page-title">
     <span class="modular fl"><i class="user"></i><em>reset_password</em></span>
   </div>
   <table class="noborder">
    
           <tr>
     <td width="15%" style="text-align:right;">ID：</td>
     <td><input name="id" type="text" class="textBox length-middle" value="<?php echo $user; ?>" readonly="true"/></td>
    </tr>
    <tr>
     <td width="15%" style="text-align:right;">Name：</td>
     <?php
        include "config.php";
        $sql = "SELECT * FROM USER WHERE U_ID = '$user'";
        $result = $db->query($sql);
        $row = $result->fetch_assoc();
        $username = $row["U_UNAME"];
     ?>
     <td><input name="userName" type="text" class="textBox length-middle" value="<?php echo $username; ?>" readonly="true"/></td>
    </tr>
    <tr>
     <td style="text-align:right;">new_password：</td>
     <td><input name="password" type="password" class="textBox length-middle"/></td>
    </tr>
    <tr>
     <td style="text-align:right;">confirm_password：</td>
     <td><input name="password1" type="password" class="textBox length-middle"/></td>
    </tr>
    <tr>
     <td style="text-align:right;"></td>
     <td><input type="submit" class="tdBtn" value="save"/>
     </td>
    </tr>
   </table>
  </div>
  </form>
    <a href="/Pages/Profile.php"><input type="submit" class="tdBtn" value="back"/></a>
 </body>
 </html>
