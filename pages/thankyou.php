<?php
require_once '../ajax/check.inc';
      $hour=date("H");
      $min = date("i");
      $time = $hour.':'.$min;
      $today=date("l dS M Y");	 
      $subject = "CONTACT from (soundadvice.ie) Web Site";
      $msge="The following message was sent from the website at ".$time." on ".$today;
      $details = strlen($tel)?'telephone : '.$tel:''; 
	  $email   = strlen($email)?$email:'undisclosed email';
	  $name   = strlen($name)?$name:'undisclosed name';
      mail("jim@soundadvice.ie", "$subject" , " $msge\n\n  $text\n\n From :  $name\n\n $details\n\n Reply Email-Adresse:  $email","From: $email\nReply-To: $email\n");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Sound Advice : Contact</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	background-color: #330000;
}
body,td,th {
	font-family: Times New Roman, Times, serif;
	color: #003333;
	font-size: 12px;
}
a {
	font-family: Times New Roman, Times, serif;
	color: #CCCC66;
}
a:visited {
	color: #CC9966;
}
.style4 {	font-size: 10px;
	font-family: "Times New Roman", Times, serif;
}
.style8 {font-size: 14px}
.style9 {font-size: 12px; font-family: "Times New Roman", Times, serif; }
-->
</style>




<script language="JavaScript" type="text/JavaScript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_nbGroup(event, grpName) { //v6.0
  var i,img,nbArr,args=MM_nbGroup.arguments;
  if (event == "init" && args.length > 2) {
    if ((img = MM_findObj(args[2])) != null && !img.MM_init) {
      img.MM_init = true; img.MM_up = args[3]; img.MM_dn = img.src;
      if ((nbArr = document[grpName]) == null) nbArr = document[grpName] = new Array();
      nbArr[nbArr.length] = img;
      for (i=4; i < args.length-1; i+=2) if ((img = MM_findObj(args[i])) != null) {
        if (!img.MM_up) img.MM_up = img.src;
        img.src = img.MM_dn = args[i+1];
        nbArr[nbArr.length] = img;
    } }
  } else if (event == "over") {
    document.MM_nbOver = nbArr = new Array();
    for (i=1; i < args.length-1; i+=3) if ((img = MM_findObj(args[i])) != null) {
      if (!img.MM_up) img.MM_up = img.src;
      img.src = (img.MM_dn && args[i+2]) ? args[i+2] : ((args[i+1])? args[i+1] : img.MM_up);
      nbArr[nbArr.length] = img;
    }
  } else if (event == "out" ) {
    for (i=0; i < document.MM_nbOver.length; i++) {
      img = document.MM_nbOver[i]; img.src = (img.MM_dn) ? img.MM_dn : img.MM_up; }
  } else if (event == "down") {
    nbArr = document[grpName];
    if (nbArr)
      for (i=0; i < nbArr.length; i++) { img=nbArr[i]; img.src = img.MM_up; img.MM_dn = 0; }
    document[grpName] = nbArr = new Array();
    for (i=2; i < args.length-1; i+=2) if ((img = MM_findObj(args[i])) != null) {
      if (!img.MM_up) img.MM_up = img.src;
      img.src = img.MM_dn = (args[i+1])? args[i+1] : img.MM_up;
      nbArr[nbArr.length] = img;
  } }
}
//-->
</script>
</head>

<body onLoad="MM_preloadImages('../images/who_over.jpg','../images/gen%20nav/what_over.jpg','../images/gen%20nav/what_up.jpg','../images/gen%20nav/how_over.jpg','../images/gen%20nav/how_up.jpg','../images/gen%20nav/where_over.jpg','../images/gen%20nav/where_up.jpg','../images/gen%20nav/why_over.jpg','../images/gen%20nav/why_up.jpg','../images/gen%20nav/who_over.jpg','../images/gen%20nav/who_up.jpg','../images/gen%20nav/home_over.jpg','../images/gen%20nav/home_up.jpg','../images/gen%20nav/contact_over.jpg','../images/gen%20nav/contact_up.jpg','../images/gen nav/what_over.jpg','../images/gen nav/what_over_down.jpg','../images/gen nav/how_over_down.jpg','../images/gen nav/how_over.jpg','../images/gen nav/where_over_down.jpg','../images/gen nav/where_over.jpg','../images/gen nav/why_over_down.jpg','../images/gen nav/why_over.jpg','../images/gen nav/who_over_down.jpg','../images/gen nav/who_over.jpg','../images/gen nav/home_over_down.jpg','../images/gen nav/home_over.jpg','../images/gen nav/contact_over_down.jpg','../images/gen nav/contact_over.jpg','../images/gen nav/contact_up.jpg')">
<table width="600" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="100" valign="top" background="../images/GEN_NAV_top.gif">&nbsp;</td>
  </tr>
</table>
<table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><a href="what.htm" target="_top" onClick="MM_nbGroup('down','group1','what','../images/gen nav/what_over_down.jpg',1)" onMouseOver="MM_nbGroup('over','what','../images/gen nav/what_over.jpg','../images/gen nav/what_over_down.jpg',1)" onMouseOut="MM_nbGroup('out')"><img src="../images/gen nav/what_up.jpg" alt="" name="what" border="0" onload=""></a><a href="how.htm" target="_top" onClick="MM_nbGroup('down','group1','how','../images/gen nav/how_over_down.jpg',1)" onMouseOver="MM_nbGroup('over','how','../images/gen nav/how_over.jpg','../images/gen nav/how_over_down.jpg',1)" onMouseOut="MM_nbGroup('out')"><img src="../images/gen nav/how_up.jpg" alt="" name="how" width="74" height="50" border="0" onload=""></a><a href="where.htm" target="_top" onClick="MM_nbGroup('down','group1','where','../images/gen nav/where_over_down.jpg',1)" onMouseOver="MM_nbGroup('over','where','../images/gen nav/where_over.jpg','../images/gen nav/where_over_down.jpg',1)" onMouseOut="MM_nbGroup('out')"><img src="../images/gen nav/where_up.jpg" alt="" name="where" width="94" height="50" border="0" onload=""></a><a href="why.htm" target="_top" onClick="MM_nbGroup('down','group1','why','../images/gen nav/why_over_down.jpg',1)" onMouseOver="MM_nbGroup('over','why','../images/gen nav/why_over.jpg','../images/gen nav/why_over_down.jpg',1)" onMouseOut="MM_nbGroup('out')"><img src="../images/gen nav/why_up.jpg" alt="" name="why" width="73" height="50" border="0" onload=""></a><a href="who.htm" target="_top" onClick="MM_nbGroup('down','group1','who','../images/gen nav/who_over_down.jpg',1)" onMouseOver="MM_nbGroup('over','who','../images/gen nav/who_over.jpg','../images/gen nav/who_over_down.jpg',1)" onMouseOut="MM_nbGroup('out')"><img src="../images/gen nav/who_up.jpg" alt="" name="who" width="73" height="50" border="0" onload=""></a><a href="../index.htm" target="_top" onClick="MM_nbGroup('down','group1','home','../images/gen nav/home_over_down.jpg',1)" onMouseOver="MM_nbGroup('over','home','../images/gen nav/home_over.jpg','../images/gen nav/home_over_down.jpg',1)" onMouseOut="MM_nbGroup('out')"><img src="../images/gen nav/home_up.jpg" alt="" name="home" width="84" height="50" border="0" onload=""></a><a href="contact.htm" target="_top" onClick="MM_nbGroup('down','group1','contact','../images/gen nav/contact_over_down.jpg',1)" onMouseOver="MM_nbGroup('over','contact','../images/gen nav/contact_over.jpg','../images/gen nav/contact_over_down.jpg',1)" onMouseOut="MM_nbGroup('out')"><img src="../images/gen nav/contact_over_down.jpg" alt="" name="contact" border="0" onload="MM_nbGroup('init','group1','contact','../images/gen nav/contact_up.jpg',1)"></a></td>
  </tr>
</table>
<table width="600" height="31" border="0" align="center" cellpadding="0" cellspacing="0" background="../images/table_head.jpg">
  <tr>
    <td height="48"><div align="center" class="style8">
      <p> THANK YOU - YOUR MESSAGE HAS BEEN SENT </p>
      </div></td>
  </tr>
</table>	
<table width="600"  border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#E7D5BA">
  <tr>

    <td  align="center" valign="top"><p align="center"><strong>
	<br><br>
	We aim to respond to all enquiries within 24 hours.<br><br><br><br>
    </strong></p>

      </td>

  </tr>

</table>
<table width="600" height="85" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#E7D5BA">
  <tr>
    <td width="20">&nbsp;</td>
    <td width="260" valign="top"><p align="center"><strong>BY TELEPHONE:</strong><br>
    </p>
      <p align="center">086 358 8822<br>
      </p></td>
    <td width="9">&nbsp;</td>
    <td width="291" valign="top"><p align="center"><strong>BY REGISTERED POST:<br>
    </strong>Jim Buckley <br>
        <strong>Keep Farming On</strong> <br>
        <span class="style9"><a href="http://www.internationalcorporatecentre.com/">93 St Stephen's Green, Dublin 2, Ireland.</a></span></p>
    </td>
    <td width="20">&nbsp;</td>
  </tr>
</table>
<table width="600" height="27" border="0" align="center" cellpadding="3" cellspacing="0" background="../images/table_head.jpg">
  <tr>
    <td height="30" colspan="6" align="right" valign="middle" background="images/table_head.jpg"><div align="right" class="style4"><strong>WWW.KEEPFARMINGON.IE</strong></div></td>
    <td width="425" height="30" align="right" valign="middle" background="images/table_head.jpg"><span class="style9"><strong>Keep Farming On</strong>, 93 St Stephen's Green, Dublin 2, Ireland. </span></td>
    <td width="20" align="right" valign="middle" background="images/table_head.jpg">&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-1377116-15";
urchinTracker();
</script>
</body>
</html>
