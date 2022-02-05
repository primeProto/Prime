<script type="text/javaScript">
function getTeam(display)
  {  
  var ui_viewMenuToggle = document.getElementById("teamVis");
  
  alert(ui_viewMenuToggle.firstChild.nodeName+" - "+ui_viewMenuToggle.firstChild.nodeValue);
  if(ui_viewMenuToggle.style.display=="none")
		{
			//add code to show div here
			ui_viewMenuToggle.style.display="block";
		}else{

			//add code to hide div here
			ui_viewMenuToggle.style.display="none";
		}
	}	


	
</script>
<style>

html, 
body {
padding:0;
margin:0;
	_padding:0 0px;
	_height:100%;
    _overflow:hidden;
overflow:hidden;
}

</style>
<?PHP
$user_id=$_GET['user_id']; 
//$user_id= 1;
//echo "". $user_id ."";



		$con=mysqli_connect("localhost", "user", "password", "dave");
		if (mysqli_connect_errno()) {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}

		//$result = mysqli_query($con,"SELECT * FROM ticket_control ");
		//$result = mysqli_query($con,"SELECT t.* FROM `ticketing_main` inner WHERE 1 ");
		$result = mysqli_query($con,"SELECT t.*,i.* FROM `ticketing_main` t inner join `i_my_we` i on t.last_updater_id = i.user_id WHERE i.user_id = '$user_id' order by reqest_type desc,request_date ");



//$d1=strtotime("3 days");
//$d2=ceil(($d1-time())/60/60/24);
//echo "<div style='float:right;'>";
//echo "There are " . $d2 ." days open";
//echo "</div>"

$d=strtotime("-3 Days");

//echo date("Y-m-d", $d) . "<br>";

//echo "". $d ."";

?>




<!--

<div style="display:inline;margin-left:180px;background-color:#ffffff;margin-bottom:1px;">
-->
<div style="height:100%;">
<?PHP

//echo "</div>"

	while($row = mysqli_fetch_array($result)) {




$d3 = $row['request_date'];
//echo date("Y-m-d", $d) . "<br>";

?>

<!--title="Summary: This service request is in the time frame."<div  style="width:80%;margin-left:245px;margin-bottom:1px;hight:100%;" class='dhtmlgoodies_answer_content_tomato' onmouseover="this.className='dhtmlgoodies_answer_contentHover';" onmouseout="this.className='dhtmlgoodies_answer_content_tomato';" >-->
<div  onclick="this.className='dhtmlgoodies_question_content2'" style="float:left;margin-left:3px;display:inline;width:90%;margin-bottom:1px;" class='dhtmlgoodies_answer_content' onmouseover="this.className='dhtmlgoodies_answer_contentHover';" onmouseout="this.className='dhtmlgoodies_answer_content';" >
<!--<div title="Summary: This service request needs attention" onclick="this.className='dhtmlgoodies_question_content_tomato2'" style="float:left;margin-left:3px;display:inline;width:90%;margin-bottom:1px;" class='dhtmlgoodies_answer_content_tomato' onmouseover="this.className='dhtmlgoodies_answer_contentHover';" onmouseout="this.className='dhtmlgoodies_answer_content_tomato';"  noteAsync("<?php echo "" . $row['autoid'] ."" ?>"); >-->


	<?php
		echo "<table colspan='6'>";
			echo "<tr style='color:#5e5e5e;'>";
		If ( date("Y-m-d", $d)<= $d3){
			?>
				<td style="width:10%;-moz-box-shadow:inset 0 0 8px #000000;-webkit-box-shadow:inset 0 0 8px #000000;box-shadow:inset 0 0 8px #000000;width:25px;background-color:green;"><img onclick="getTeam();" style='margin-top:4px;cursor:pointer;display:inline;' title="= <?php echo "" . $row['autoid'] ."" ?>"  src='img/plussIcon.png'></td><td ><img onclick="transferParentModal('addNote','<?php echo "" . $row['autoid'] ."" ?>'); " style='margin-left:10px;cursor:pointer;display:inline;'src='img/otherPage2.jpg'></span></td><td align="left" style="width:10%;"> <span style='margin-left:5ypx;color:#5e5e5e;margin-bottom:5px;display:inline;font-size:15px;font-type:veranda;'><?php echo "" . $row['autoid'] ."</td><td style='margin-left:20px;'>(" . $row['request_date'] ."</td><td>- ". $row['reqest_type'] ."</td><td>- Assigned to: ". $row['last_name'] .", </td><td>". $row['first_name'] ."</td><td>- ". $row['email'] .""?>)</td></span>
			
			<?php 
		} else if ( date("Y-m-d", $d)>= $d3){
			?>
				<td style="width:10%;-moz-box-shadow:inset 0 0 8px #000000;-webkit-box-shadow:inset 0 0 8px #000000;box-shadow:inset 0 0 8px #000000;width:25px;background-color:#990000;"><img onclick="getTeam();" style='margin-top:4px;cursor:pointer;display:inline;' title="= <?php echo "" . $row['autoid'] ."" ?>"  src='img/plussIcon.png'></td><td ><img onclick="transferParentModal('addNote','<?php echo "" . $row['autoid'] ."" ?>'); "  style='margin-left:10px;cursor:pointer;display:inline;'src='img/otherPage1.jpg'></span></td><td align="left" style="width:10%;"> <span style='margin-left:5ypx;color:#5e5e5e;margin-bottom:5px;display:inline;font-size:15px;font-type:veranda;'><?php echo "" . $row['autoid'] ."</td><td style='margin-left:20px;'>(" . $row['request_date'] ."</td><td>- ". $row['reqest_type'] ."</td><td>- Assigned to: ". $row['last_name'] .", </td><td>". $row['first_name'] ."</td><td>- ". $row['email'] .""?>)</td></span>
		
			
			<?php
		}
			echo "</tr>";
		echo "</table>";	
	
	?>
		

</div>
<!--<div class="dhtmlgoodies_a1nswer" style="height:50px;width:100%;background-color:#990000;">&nbsp;</div>-->

<?php

// move this above the div above and it will put out layers pyramids
	}
		mysqli_close($con);
	?>
</div>