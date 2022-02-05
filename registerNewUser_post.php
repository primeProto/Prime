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
#submit{
	background-color:#307081;
	color:#ffffff;
	font-size:12px;font-weight:normal;
  background: #307081 url("img/keyLessMaster3.ico") no-repeat 0px center;
/*
nice yellow ff9900
background:#292931;
*/
}
 body{
	background:#292931;
	/*background:#FFFFFF;*/
	font-family:'Open Sans';
}
</style>

<?php

//$id=$_GET['id']; 
//echo $id;

//&laquo;
//&raquo;

		// $u = $_GET['username'];
		// //$p = md5($_GET['password']);
		// $p = $_GET['password'];
		// $e = $_GET['email'];
		// echo $u;
		// echo $p;
		// echo $e;
$u = strip_tags($_POST['username']);
$p = strip_tags(md5($_POST['password']));		
$e = strip_tags($_POST['email']);		
// echo $u;		
// echo $p;		
// echo $e;	

 if ($u ==""){
?><p style="color:#990000;">Missing User Name</p>
<?php
}else if ($p ==""){
?><p style="color:#990000;">Missing Password</p>
<?php
}

	
$con=mysqli_connect("localhost", "user", "password", "dave");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// $sql = sprintf("SELECT loginid FROM login WHERE username = '%s' AND password = '%s' AND email='%s' LIMIT 1;",
			// mysql_real_escape_string($u), mysql_real_escape_string($p),mysql_real_escape_string($p));


// if ($result=mysqli_query($con,$sql))
  // {
  // // Return the number of rows in result set
  // $rowcount=mysqli_num_rows($result);
  
  // printf("Result set has %d rows.\n",$rowcount);
  // // Free result set
  // mysqli_free_result($result);
  // }
// if ($rowcount != 0){


///below strips extra potential tags // protection from injection
$sql1 = sprintf("SELECT loginid FROM login WHERE username = '%s' AND password = '%s' And email = '%s' LIMIT 1;",
			mysql_real_escape_string($u), mysql_real_escape_string($p), mysql_real_escape_string($e));
	
	if ($result=mysqli_query($con,$sql1)){

  $rowcount=mysqli_num_rows($result);
  	 // Return the number of rows in result set
	   // printf("Result set has %d rows.\n",$rowcount);
 // Free result set
// mysqli_free_result($result);
  }
		if ($rowcount != 1){		
		$sql2 = "insert into  values ('$u',md5('$p'),'$e')";
		$sql2 = "INSERT INTO login (username,password,email)
			   VALUES
			 ('".$_POST['username']."', '".md5($_POST['password'])."','".$_POST['email']."' )";

		$con->query($sql2)

 
	
?>

<label style="margin-left:35%;margin-top:15%;" class="applabelSmaller" >User Registered Successfully.</label>

<?php
header( "refresh:5;url=loginform.php" );
 }else{
 ?>
<body>
<label style="margin-left:35%;margin-top:45%;" class="applabelSmaller" >Already Active or the Information Provided is Incorrect.</label>
 <?php
 //echo "Already Active or the Information Provided is Incorrect.";
 // include "registerNewUser.php";
 
 header( "refresh:3;url=registerNewUser.php" );
 // { header( "location:/prime/registerNewUser.php");    }
 }
//include "loginform.php";
?>
</body>