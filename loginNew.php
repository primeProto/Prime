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

function prime()
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
asyncObj.open("GET","prime/prime5.PHP?nocache="+myRand,true);
//asyncObj.open("GET","prime/prime5.PHP?userName="+userName+"&Password="+Password+"&nocache="+myRand,true);
asyncObj.send();



}

</script>

<?php

//$id=$_GET['id']; 
//echo $id;

//&laquo;
//&raquo;

		$u = strip_tags($_POST['username']);
		//echo $u;
		$p = md5(strip_tags($_POST['password']));
		//$p = md5($_POST['password']);

$con=mysqli_connect("localhost", "user", "password", "dave");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

///below strips extra potential tags // protection from injection
$sql = sprintf("SELECT loginid FROM login WHERE username = '%s' AND password = '%s' LIMIT 1;",
			mysql_real_escape_string($u), mysql_real_escape_string($p));


if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  
  //printf("Result set has %d rows.\n",$rowcount);
  // Free result set
 // mysqli_free_result($result);
  }
if ($rowcount != 0){

{ header( "location:/prime/prime5.php");    }
//include "prime5.php";
?>



<?php
}else{
include "loginform.php";
?>
<br />
<div style = "margin-left:42%;">
<p style="display:inline;color:#ff9900;">Un-Successful attempt:</p> <p style="display:inline;color:#990000;">Logged</p>
<p style="color:#990000;"> User Name or Password was incorrect.</p>
</div>
<?php	
//echo $sql;	
}




	
?>