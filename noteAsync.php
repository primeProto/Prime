
<?php
$nid = $_GET['noteAsyncId'];
//echo $nid;
$bod = $_GET['noteAsyncBody'];
//echo $bod;


$con=mysqli_connect("localhost", "user", "password", "dave");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
		$sql2 = "INSERT INTO ticket_reply (`autoid`,`reply_content`)
			   VALUES
			 ('".$_GET['noteAsyncId']."', '".$_GET['noteAsyncBody']."' )";

		$con->query($sql2)
		
?>

Success