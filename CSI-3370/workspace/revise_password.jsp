<%@page import="PO.Info"%>
<%@page import="java.util.ArrayList"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<%@taglib prefix="s" uri="/struts-tags" %>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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
 <form action="updatePassword" method="post">
 <div class="wrap">
  <div class="page-title">
    <span class="modular fl"><i class="user"></i><em>reset_password</em></span>
  </div>
  <table class="noborder">
      <%
          ArrayList list=(ArrayList)session.getAttribute("oneInfo");
          Info info=(Info)list.get(0);
          %>
          <tr>
    <td width="15%" style="text-align:right;">ID：</td>
    <td><input name="id" type="text" class="textBox length-middle" value="<%=info.getId()%>" readonly="true"/></td>
   </tr>
   <tr>
    <td width="15%" style="text-align:right;">Name：</td>
    <td><input name="userName" type="text" class="textBox length-middle" value="<%=info.getUserName()%>"/></td>
   </tr>
   <tr>
    <td style="text-align:right;">new_password：</td>
    <td><input name="password" type="text" class="textBox length-middle" value="<%=info.getPassword()%>"/></td>
   </tr>
   <tr>
    <td style="text-align:right;">confirm_password：</td>
    <td><input name="password1" type="text" class="textBox length-middle"/></td>
   </tr>
   <tr>
    <td style="text-align:right;"></td>
    <td><input type="submit" class="tdBtn" value="save"/>
    </td>
   </tr>
  </table>
 </div>
 </form>
   <a href="right.jsp"><input type="submit" class="tdBtn" value="back"/></a>
</body>
</html>
