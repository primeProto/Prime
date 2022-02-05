<!--#include virtual="/includes/Top2.asp"-->
<!--#include virtual="/includes/Bottom2.asp" -->
<!--#include virtual="/includes/DBConn_wErr.asp"-->	
<!--#include virtual="/includes/security_include.asp" -->

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>

<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" >
<script type="text/javascript">
try {document.execCommand("BackgroundImageCache", false, true);} catch(err) {}
var GB_ROOT_DIR = "/Reporting/EIS/DMSWiki/inc/";
</script>
<!--<link rel="stylesheet" type="text/css" href="/inc/jquery-ui-1.10.4/css/ui-lightness/jquery-ui-1.10.4.css" /> -->
<link rel="stylesheet" type="text/css" href="/prime/inc/jquery-ui-themes-1.11.0/themes/smoothness/jquery-ui.css">


  <script type="text/javascript" src="/prime/inc/jquery-ui-1.10.4/js/jquery-1.10.2.js"></script>
  <script type="text/javascript" src="/prime/inc/jquery-ui-1.10.4/js/jquery-1.10.4.js"></script>
  <script type="text/javascript" src="/prime/inc/jquery-ui-1.11.0/jquery-ui.js"></script>


<link rel="stylesheet" type="text/css" href="inc/prime5.css" />
 <script src="inc/prime5.js" type="text/javascript"></script> 

<link rel="stylesheet" type="text/css" href="inc/new.css" />
<link rel="stylesheet" type="text/css" href="inc/new3.css" />


<link rel="stylesheet" type="text/css" href="inc/onlineHelpNew.css" />



<script type="text/javaScript">
//ie6 force background cache
//try {document.execCommand("BackgroundImageCache", false, true);} catch(err) {}

</script>
</head>





<body style="padding:0;margin:0; _padding:0 0px;	_height:100%;    _overflow:hidden;overflow:hidden;">


<table style="display:inline;">
	<tr>
		<td><div style="width:300px;margin-left:40px;"> User Name <input  ID="userName" type="input"  />
	</div>
	</tr>
    <TR>
         <td>  
			<!--<div style="width:300px;margin-left:50px;">Password <input style="" id="Password" type="input" /><input id="hidCidade" type="hidden" />-->
      <label for="">Password</label>
      <input type="password" name="password" id="password" value="" class="text ui-widget-content ui-corner-all">
			<input value="Enter" style="width:50px;" onclick="userVerification();" class="home" type="button"/></div>
		</td>

	</tr>	
</table>
<span><div style="margin-bottom:10px;" id="Div_content" >&nbsp;
		</div></span>
<!--<image class="helpDesk" src="img/exampleHd.jpg"/>-->
<div class="pageContainer">


</div>	

</body>

</html>