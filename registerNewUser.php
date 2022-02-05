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

function newUser()
{
//alert("hey");
var myRand = parseInt(Math.random()*999999999999999);
var asyncObj=new returnXMLObj();
var username = document.getElementById("username").value;
var password = document.getElementById("password").value;
var email = document.getElementById("email").value;
// var type0 = document.getElementById("type0").value;
asyncObj.onreadystatechange=function()
	  {
	  if (asyncObj.readyState==4)
		{
		alert(asyncObj.responseText);
		//document.getElementById("div_content").innerHTML=asyncObj.responseText;
		document.getElementById("new_user").innerHTML=asyncObj.responseText;
		//uiManager.resizeFrame();
		}
	  }
asyncObj.open("GET","registerNewUser_post.PHP?username="+username+"&password="+password+"&email="+email+"&nocache="+myRand,true);
//asyncObj.open("GET","prime/prime5.PHP?userName="+userName+"&Password="+Password+"&nocache="+myRand,true);
asyncObj.send();



}

</script>

<style>
p.applabel{
	color:#307081;
	font-size:16px;
	
	padding:0px 18px;
	margin-top:15px;
	display:block;
	-webkit-font-smoothing: antialiased;
text-shadow:0 -1px 0 #000;
}


label.applabelSmaller{
	color:#307081;
	font-size:18px;
	display:inline;
	padding:0px 18px;
	margin-top:15px;
	
	-webkit-font-smoothing: antialiased;
text-shadow:0 -1px 0 #000;
}

p.applabelSmaller{
	color:#307081;
	font-size:18px;
	display:inline;
	padding:0px 18px;
	margin-top:15px;
	
	-webkit-font-smoothing: antialiased;
text-shadow:0 -1px 0 #000;
}
#submit{
	background-color:#307081;
	

  background: #307081 url("img/keyLessMaster3.ico") no-repeat 0px center;
  
/*
nice yellow ff9900 background:#292931;
*/


}

</style>
<body style="background:#292931;">

<img align="" style="margin-left:49%;margin-top:170px;position:absolute;" src="img/prime5.ico"/>
<!--insert into login (username,password,email) value ('admin',md5('yourpasswordhere'),'youremailhere');-->
<p style="margin-left:30%;" class="applabelSmaller">To register as a new user please enter the following information.</p>
<img align="" style="margin-left:50%;margin-top:175px;position:absolute;" src="img/prime5.ico"/>
<form style="margin-left:35%;margin-top:15%;" id="login-form" name="form" action="registerNewUser_post.php" method="post">


	<div style="margin-left:2%;color:#FFFFFF;height:;width:400px;background:#292931;" id="block">
		<label class="applabelSmaller" id="user" for="name">User Name</label>
		<input style="margin-bottom:1px;" type="text" name="username" id="username" class="ui-widget-content ui-corner-all" placeholder="User Name" required/>
		<br /><label class="applabelSmaller" style="margin-left:12px;" id="pass" for="pass">Password</label>
		<input style="margin-bottom:1px;" type="password" name="password" id="password" class="ui-widget-content ui-corner-all" placeholder="Password" required />
		<br /><label class="applabelSmaller" style="margin-left:-22px;" for="email">Email Address</label>
		<input type="text" name="email" id="email" class="ui-widget-content ui-corner-all" placeholder="Email Address" required />
		<input style="height:20px;width:20px;" type="submit" id="submit" name="submit" onclick="" value="">
		
	</div>

<div id="new_user">&nbsp;</div>
</form>

</body>