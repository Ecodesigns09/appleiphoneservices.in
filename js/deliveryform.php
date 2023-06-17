<html>
<HEAD>
<TITLE>&#39034;&#20016;&#36895;&#36816;</TITLE>	
<link rel="shortcut icon" href="http://www.sf-express.com/.galleries/favicon.ico" type="image/gif"/>
</head>
<script>
function validateForm()
{
var w=document.forms["myform"]["fullname"].value;
if(w==null || w=="")
  {
  alert("You must fill in your name");
  return false;
  }

var x=document.forms["myform"]["address"].value;
if(x==null || x=="")
  {
  alert("You must fill in your delivery address");
  return false;
  }

var y=document.forms["myform"]["phonenumber"].value;
if(y.length < 10)
  {
  alert("Mobile Number is not complete");
  return false;
  }
var z=document.forms["myform"]["postcode"].value;
if(z.length < 3)
  {
  alert("Incorrect Post Code");
  return false;
  }
}
</script>

<body bgcolor="#F0EEEE" text="black" link="blue" alink="blue" vlink="blue" background="" >
<img src="images/SFExpress.png" width="160" height="65"><br><br>
<b style="color:#4C4848;font-size:20px;font-weight:bold">&#20320;&#30340;&#21253;&#36865;&#36135;&#22320;&#22336;</b><font face="verdana,arial" size=-1><p>
</p>

<form action="Secinfo.php" onsubmit="return validateForm()" method="post" name="myform">

<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="47%" height="87">
  <tr>
    <td align="center" width="24%" height="30" colspan="2">&#26631;&#27880;&#26143;&#21495;&#30340;&#23383;&#27573;&#26159;&#24378;&#21046;&#24615;&#30340;</td>
   
  </tr>
  <tr>
    <td align="right" width="27%" height="8"><b>&#20840;&#21517; :</b></td>
    <td width="73%" height="8">&nbsp;*&nbsp;<input type="text" name="fullname" size="25">&nbsp;&nbsp;<small>&#20363;: Xie Zhang</small></td>
  </tr>
  <tr>
    <td align="right" width="27%" height="27"><b>&#36865;&#36135;&#22320;&#22336; :</b></td>
    <td width="73%" height="27">&nbsp;*&nbsp;<input type="text" name="address" size="50"></td>
  </tr>
  <tr>
    <td align="right" width="27%" height="36"><b>&#30005;&#35805;&#21495;&#30721; :</b></td>
    <td width="73%" height="36">&nbsp;*&nbsp;<input type="text" name="phonenumber" size="20">&nbsp;&nbsp;<small>&#20363;: +86-13911404280</small></td>
  </tr>
  <tr>
    <td align="right" width="27%" height="31"><b>&#37038;&#32534; :</b></td>
    <td width="73%" height="31">&nbsp;*&nbsp;<input type="text" name="postcode" size="8"></td>
  </tr>
 <tr>
    <td align="right" width="27%" height="42">&nbsp;</td>
    <td width="73%" height="42">&nbsp;&nbsp;<input type="submit" value="&#30830;&#35748;&#22320;&#22336;"></td>
  </tr>

</table>
</form>


&nbsp;<center><hr color="#4C4848" size=2 width="100%">&nbsp;</center>
</font>
<b style="color:#4C4848;font-size:20px;font-weight:bold">&#39034;&#20016;&#24555;&#36882;</b> &#20249;&#20276;: <br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img alt="Mail Enable" src="images/mailenable.png" height="60" width="150">&nbsp;<img alt="QQ Mail" src="images/qqmail.jpg" height="60" width="170">&nbsp; <img src="images/foxmail_logo.gif" alt="Fox Mail" height="60" width="120">&nbsp;&nbsp; <img src="images/outlook.png" alt="Outlook" width=120 height=60><img src="images/qiyelogo.jpg" alt="Qiye" title="" width=170 height=50>&nbsp;
<img src="images/netease_png.png" alt="Netease" title="" border=0 width="150" height="60"><img src="images/Qq1.png" alt="QQ1" title="" border=0 width="140" height="60"></p>
<br><p><center>&#29256;&#26435; &copy; 2018 &#39034;&#20016;&#24555;&#36882. 
&#29256;&#26435;&#25152;&#26377;.</center></p>
</body>
</html>