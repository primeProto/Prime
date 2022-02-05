<script type="text/javaScript">


function returnXMLObj()
{ 
var return_xmlHttp;
try
  {
  // Internet Explorer
  return_xmlHttp= ActiveXObject("Msxml2.XMLHTTP"); 
  }
catch (e)
  {
  // Firefox, Opera 8.0+, Safari
  try
    {
     return_xmlHttp=new XMLHttpRequest();	
	//alert(typeof(xmlHttp));
    }
  catch (e)
    {
    try
      {
	  return_xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
    catch (e)
      {
      alert("Your browser does not support AJAX!");
      return false;
      }
    }
  }

return return_xmlHttp;

}

function newUser2()
{
alert("hey");
var myRand = parseInt(Math.random()*999999999999999);
var asyncObj=new returnXMLObj();
// var userName = document.getElementById("userName").value;
// var Password = document.getElementById("Password").value;
// var Email = document.getElementById("Email").value;
// var type0 = document.getElementById("type0").value;
asyncObj.onreadystatechange=function()
	  {
	  if (asyncObj.readyState==4)
		{
		//alert(asyncObj.responseText);
		//document.getElementById("div_content").innerHTML=asyncObj.responseText;
		//document.getElementById("Div_content").innerHTML=asyncObj.responseText;
		//uiManager.resizeFrame();
		}
	  }
asyncObj.open("GET","registerNewUser.PHP?nocache="+myRand,true);
//asyncObj.open("GET","prime/prime5.PHP?userName="+userName+"&Password="+Password+"&nocache="+myRand,true);
asyncObj.send();



}

</script>

<link rel="stylesheet" type="text/css" href="/prime/inc/jquery-ui-themes-1.11.0/themes/smoothness/jquery-ui.css">


  <script type="text/javascript" src="/prime/inc/jquery-ui-1.10.4/js/jquery-1.10.2.js"></script>
  <script type="text/javascript" src="/prime/inc/jquery-ui-1.10.4/js/jquery-1.10.4.js"></script>
  <script type="text/javascript" src="/prime/inc/jquery-ui-1.11.0/jquery-ui.js"></script>


<link rel="stylesheet" type="text/css" href="inc/prime5.css" />
 <script src="inc/prime5.js" type="text/javascript"></script> 

<link rel="stylesheet" type="text/css" href="inc/new.css" />
<link rel="stylesheet" type="text/css" href="inc/new3.css" />


<link rel="stylesheet" type="text/css" href="inc/onlineHelpNew.css" />

<style>


body{
	background:#292931;
	/*background:#FFFFFF;*/
	font-family:'Open Sans';
}
label{
	font-family:icon;
	text-shadow:0 -1px 0 #999;
	-webkit-font-smoothing: antialiased; 
}
#block,#option{
	width:230px;
	height:90px;
	margin:auto;
}
#block{

	margin-top:200px;
}
#block:before{
	content:'';
	display:block;
	width:230px;
	height:3px;
		/* The rainbow*/
	background:linear-gradient(left, rgba(173,107,173,1) 0%, rgba(173,107,173,1) 1%, rgba(181,121,168,1) 1%, rgba(181,126,181,1) 2%, rgba(181,126,181,1) 2%, rgba(189,136,187,1) 3%, rgba(189,136,187,1) 3%, rgba(197,151,181,1) 4%, rgba(197,151,181,1) 5%, rgba(206,165,194,1) 5%, rgba(206,165,194,1) 6%, rgba(214,178,194,1) 6%, rgba(214,178,194,1) 7%, rgba(222,189,189,1) 7%, rgba(222,189,189,1) 8%, rgba(222,197,197,1) 8%, rgba(222,197,197,1) 9%, rgba(229,210,200,1) 9%, rgba(229,210,200,1) 10%, rgba(241,230,197,1) 11%, rgba(241,230,197,1) 12%, rgba(247,247,197,1) 12%, rgba(247,247,197,1) 15%, rgba(236,247,194,1) 15%, rgba(236,247,194,1) 16%, rgba(230,239,189,1) 17%, rgba(230,239,189,1) 18%, rgba(222,239,183,1) 19%, rgba(222,239,183,1) 20%, rgba(212,239,176,1) 20%, rgba(212,239,176,1) 22%, rgba(201,230,165,1) 22%, rgba(201,230,165,1) 25%, rgba(186,230,158,1) 26%, rgba(186,230,158,1) 27%, rgba(182,225,147,1) 27%, rgba(182,225,147,1) 30%, rgba(169,222,140,1) 30%, rgba(169,222,140,1) 32%, rgba(160,222,132,1) 32%, rgba(160,222,132,1) 36%, rgba(156,214,147,1) 36%, rgba(156,214,147,1) 39%, rgba(148,214,161,1) 40%, rgba(148,214,161,1) 43%, rgba(148,214,174,1) 43%, rgba(148,214,174,1) 45%, rgba(148,206,186,1) 46%, rgba(148,206,186,1) 48%, rgba(140,206,197,1) 49%, rgba(140,206,197,1) 52%, rgba(140,206,212,1) 52%, rgba(140,206,212,1) 55%, rgba(140,195,221,1) 55%, rgba(140,195,221,1) 58%, rgba(148,179,210,1) 59%, rgba(148,179,210,1) 60%, rgba(156,173,206,1) 61%, rgba(156,167,197,1) 61%, rgba(156,167,197,1) 63%, rgba(165,154,189,1) 63%, rgba(165,154,189,1) 64%, rgba(169,148,181,1) 65%, rgba(169,148,181,1) 66%, rgba(173,134,175,1) 66%, rgba(173,134,175,1) 67%, rgba(181,121,168,1) 67%, rgba(181,121,168,1) 69%, rgba(189,115,156,1) 69%, rgba(189,115,156,1) 70%, rgba(196,102,146,1) 71%, rgba(196,102,146,1) 72%, rgba(200,88,143,1) 73%, rgba(200,88,143,1) 74%, rgba(206,80,132,1) 74%, rgba(206,80,132,1) 76%, rgba(214,64,123,1) 76%, rgba(214,64,123,1) 78%, rgba(220,59,114,1) 78%, rgba(220,59,114,1) 79%, rgba(222,48,110,1) 79%, rgba(222,48,110,1) 80%, rgba(232,42,107,1) 80%, rgba(232,42,107,1) 81%, rgba(230,33,99,1) 81%, rgba(230,33,99,1) 83%, rgba(232,42,107,1) 83%, rgba(232,42,107,1) 84%, rgba(222,48,110,1) 85%, rgba(222,48,110,1) 86%, rgba(220,59,114,1) 87%, rgba(220,59,114,1) 88%, rgba(214,64,123,1) 88%, rgba(214,64,123,1) 89%, rgba(206,66,130,1) 90%, rgba(206,66,130,1) 92%, rgba(199,74,141,1) 92%, rgba(199,74,141,1) 94%, rgba(189,82,148,1) 95%, rgba(189,82,148,1) 96%, rgba(184,90,158,1) 97%, rgba(184,90,158,1) 99%, rgba(181,99,165,1) 99%, rgba(181,99,165,1) 100%);

}
/*#block:after{
	content:'';
	display:block;
	width:15px;
	height:15px;
	background:#FFFFFF;
	transform:rotate(-45deg);
	margin:10px 18px;
	position:absolute;
}*/
#block label, #submit{
	position:absolute;
	width:33px;
	height:27px;
	background:#307081;
	margin:14px;
	text-align:center;
	line-height:2.2;
	color:#FFFFFF;
	border-top-left-radius:2px;
	border-bottom-left-radius:2px;
}
#block label#pass{
	position:absolute;
	width:33px;
	height:27px;
	background:#307081;
	color:#FFFFFF;
	margin:-5px 14px;
}
#submit{
	border:0;
	margin:-22px 210px;
	border-top-left-radius:0px;
	border-bottom-left-radius:0px;
	border-top-right-radius:2px;
	border-bottom-right-radius:2px;
	font-family:verdana;
	background:#ae6cac;
	width:33px;
	height:26px;
	cursor:pointer;
	text-shadow:0 -1px 0 #333;
	box-shadow:-1px 0 1px 0px #5e5e5e;

	line-height:2.8;
	padding:0;
	height:27px;
	
	
}
#submit:hover{
	color:#fff;
}
#user, #pass{
	box-shadow:0.1px 0 2px #6c5B6d;
}
#block input[type=text],#block  input[type=password], #option p {
	font-family:'Open Sans';
	font-weight:300;

	-webkit-font-smoothing: antialiased;
}
#block input[type=text],#block  input[type=password]{
	width:227px;
	height:27px;
	margin:14px 15px;
	border:0;
	border-radius:2px;
	outline:0;
	display:block;
	font-size:18px;
border-style:solid;
border-width:1px;
border-color:#5e5e5e;
}
#block input[type=password]{
	width:227px;
	height:27px;
	margin:-5px 15px;
}
#submit{
	background-color:#307081;
	color:#ffffff;
	font-size:12px;font-weight:normal;
  background: #307081 url("img/keyBigger.ico") no-repeat 5px center;
/*
nice yellow ff9900
*/


}
#option{
	width:300px;
	height:40px;
	overflow:hidden;
	margin:auto;
}
#option p{
	color:#307081;
	font-size:24px;
	text-transform:uppercase;
	padding:0px 18px;
	margin-top:15px;
	display:block;
	float:left;
	-webkit-font-smoothing: antialiased;
text-shadow:0 -1px 0 #000;	
}
p.applabel{
	color:#307081;
	font-size:24px;
	text-transform:uppercase;
	padding:0px 18px;
	margin-top:15px;
	display:block;
	float:left;
	-webkit-font-smoothing: antialiased;
text-shadow:0 -1px 0 #000;
}


#option a{
	-webkit-font-smoothing: antialiased;
	color:#307081;
	/*text-shadow:0 -1px 0 #000;*/
	font-size:12px;
	width:300px;
	

}

input{padding-left:40px;}
#block:active > #block:before{
	background-position:100px 100px;
}

/* placeholder */
::-webkit-input-placeholder {
	-webkit-font-smoothing: antialiased;
	color:#5e5e5e;
	font-size:16px;
}
:-moz-input-placeholder {  
	color:#5e5e5e;
	font-size:16px;
}

/* Want to see the magic ? So open a webkit browser then remove the comments below ! 

/!\ YOU NEED TO PLACE THIS IN INPUTS /!\
*/
oninvalid="setCustomValidity('Custom Message')"


input::-webkit-validation-bubble-message {
	color:white;
	background: #e62163;
  border:0;
	border-radius:0;
	padding:0;
	width:55px;
	height:34px;
	position:absolute;
	float:left;
	margin:-33px 208px;
	text-align:center;
	line-height:2.7em;
	box-shadow:0 0 0;
}
input::-webkit-validation-bubble-message:before {
	content:"X";
	display:block;
	font-family:icon;
	color:white;
	background: #e62163;
  border:0;
	border-radius:0;
	padding:0;
	width:34px;
	height:34px;
	position:absolute;
	float:left;
	margin:0px -208px;
	text-align:center;
	line-height:2.7em;
	color: #fff;
	border-top-left-radius:2px;
	border-bottom-left-radius:2px;
	-webkit-font-smoothing: antialiased;

}
input::-webkit-validation-bubble-icon {
	display: none;
}
input::-webkit-validation-bubble-arrow {
	background: #e62163;
	border:0;
	width:10px;
	height:10px;
	position:absolute;
	margin:-23px 178px;
}


</style>


<!--
<form style="position:absolute;margin-top:100px;margin-left:160px;" name="login-form" id="login-form" method="post" action="loginNew.php">




  <dl>
	<dt>
	  <label title="Username">Username:
	  <input tabindex="1" accesskey="u" name="username" type="text" maxlength="50" id="username" class="text ui-widget-content ui-corner-all"/>
	  </label>
	</dt>
  </dl>
  <dl>
	<dt>
	  <label title="Password">&nbsp;Password:
	  <input tabindex="2" accesskey="p" name="password" type="password" maxlength="15" id="password" class="text ui-widget-content ui-corner-all"/>
	  </label>
	</dt>
  </dl>
  <dl>
	<dt>
	  <label style="margin-left:250px;" title="Submit">
	  <input tabindex="3" accesskey="l" type="submit" name="cmdlogin" value="Login" />
	  </label>
	</dt>
  </dl>
  <img src="img/login3.jpg"/><img src="img/prime.jpg"/>
  </form>
-->

	<img align="" style="margin-left:50%;margin-top:175px;position:absolute;" src="img/prime5.ico"/>



<form   id="login-form" name="form" action="loginNew.php" method="post">


	<div id="block">
		<label id="user" for="name"><image style="margin-top:3px;" src="img/keyLessMaster3.ico"></label>
		<input type="text" name="username" id="username" class="ui-widget-content ui-corner-all" placeholder="User Name" required/>
		<label id="pass" for="password"><image style="margin-top:5px;" src="img/lock-icon.ico"></label>
		<input type="password" name="password" id="password" class="ui-widget-content ui-corner-all" placeholder="Password" required />
		<input type="submit" id="submit" name="submit" onclick="" value="">
		
	</div>

<div style="background-color:#292931;" id="option"> 
<!--<div style="background:#CCCCCC;"  id="option"> -->


	<a style="margin-left:37px;" href="javascript:void(0)">Forgot?</a><a style="margin-left:175px;" href="registerNewUser.php" onclick="">Register</a>
</div>
</form>
