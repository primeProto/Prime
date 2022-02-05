<!--userVarify.PHP  -->




<?PHP

$userName=$_GET['userName']; 
$Password=$_GET['Password']; 
// $Email=$_GET['Email']; 
// $type=$_GET['type0']; 


IF ($userName . $Password ==""){
?><p style="color:#990000;">NO User Name or Password has been Entered</p>
<?php
}else if ($userName ==""){
?><p style="color:#990000;">Missing User Name</p>
<?php

}else if ($Password ==""){
?><p style="color:#990000;">Missing Password</p>
<?php
}

//$id=$_GET['id']; 
// echo $userName;
 echo $Password;

//&laquo;
//&raquo;



$con=mysqli_connect("localhost", "user", "password", "dave");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


$result = mysqli_query($con,"SELECT user_id,user_name,password FROM i_my_we where user_name= '$userName' and password = '$Password'");
		

	while($row = mysqli_fetch_array($result)) {
	

$userID = $row['user_id'];
echo "" . $row['user_name'] . "";
echo "" . $row['password'] . "";
	}

		mysqli_close($con);



	 // echo $userID;
	 // echo $Password;
IF ($row['user_name'].$row['password'] === $userName . $Password ){
?><p style="color:#990000;">Incorrect User Name or Password</p>
<p style="color:#990000;">Please try again.</p>
<?php
}else if ($row['user_name']===$userName){
?><p style="color:#990000;">Incorrect User Name</p>
<p style="color:#990000;">Please try again.</p>
<?php
$password = hash("sha256",md5($password).$row->user_salt);
}else if ($row['password']===$Password){
?><p style="color:#990000;">Incorrect Password</p>
<p style="color:#990000;">Please try again.</p>
<?php
}
?>
<br />
<br />





