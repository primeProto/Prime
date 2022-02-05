<!--userVarify.PHP  -->

<script type="text/javaScript">
//ie6 force background cache
//try {document.execCommand("BackgroundImageCache", false, true);} catch(err) {}
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

function TeamView(user_id)
{
alert("hey");
var myRand = parseInt(Math.random()*999999999999999);
var asyncObj=new returnXMLObj();
//var user_id = document.getElementById("user_id").value;
asyncObj.onreadystatechange=function()
	  {
	  if (asyncObj.readyState==4)
	  
		{
		//alert(asyncObj.responseText);
		document.getElementById("teamView").innerHTML=asyncObj.responseText;
		//uiManager.resizeFrame();
		}
		
	  }
asyncObj.open("GET","teamView.php?user_id="+user_id+"&nocache="+myRand,true);
asyncObj.send();

}


</script>
			<?php

		//$id=$_GET['id']; 
		//echo $id;

		$con=mysqli_connect("localhost", "user", "password", "dave");
		if (mysqli_connect_errno()) {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}

		//$result = mysqli_query($con,"SELECT * FROM ticket_control ");
		$result = mysqli_query($con,"SELECT * FROM i_my_we ");
?>
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

		

		
			<div id="menu" style="display:block;margin-top:5px;float:left;width:215px; ">
				<div id="div_navigationContainer" style="display:block;margin-top:2px;border-style:none;border-width:1px;border-color:#5e5e5e;width:190px;">
					
						<?PHP
							while($row = mysqli_fetch_array($result)) {
						?>
						
						<div  style="margin-bottom:1px;" onmouseup="this.className='dhtmlgoodies_answer_content2;" onclick="this.className='dhtmlgoodies_answer_contentHover3';" class='dhtmlgoodies_answer_content2' onmouseover="this.className='dhtmlgoodies_answer_contentHover2';" onmouseout="this.className='dhtmlgoodies_answer_content2';" ><?PHP
						//echo "<div class='dhtmlgoodies_answer_content' onmouseover='this.className='dhtmlgoodies_answer_contentHover';' onmouseout='this.className='dhtmlgoodies_answer_content';' >";
							echo "<table>";
								echo "<tr style='color:#5e5e5e;'>";
								?>
								  <td ><span style="" ><img style='cursor:pointer;display:inline;' onclick='TeamView("<?PHP  echo"" . $row['user_id'] .""?>");'  src='img/plussIcon.png'></span></td><td> <span  style='color:#5e5e5e;margin-bottom:5px;display:inline;font-size:15px;font-type:veranda;'><?php echo"" . $row['first_name'] .""?>  <?php echo"". $row['last_name'] .""?></td></span>
							  <?php
								echo "</tr>";
							echo "</table>";
						echo "</div>";
						?>
						
						<?php
								}
									mysqli_close($con);

									?>
						</div>
						<!--<div  class='viewMenu' onmouseover="this.className='menuView';" onmouseout="this.className='viewMenu';" style="">
							&nbsp;<img style="margin-left:38%;cursor:pointer;" src="img/collapseIcon.ico">&nbsp;<img style="margin-left:38%;cursor:pointer;" src="img/collapseIcon.ico">
						</div>-->
						
						<div   style="">
							
							<img id="image1" style="postion:absolute;cursor:pointer;margin-left:98%;" alt="image" src="img/CloseMenu.ico" onclick="maxContent2();">
							<!--<img id="image1" style="display:inline;float:right;margin-right:5px;margin-top:2px;" alt="image" src="img/fullScreen6.jpg" onclick="this.src='img/fullScreen6.jpg';maxContent();">-->
						</div>
				
				</div>
			</div>
		
<div id="teamView" style="height:621px;overflow-y:auto;width:90%;margin-left:225px;margin-top:19px;90%;float:left;display:inline;margin-bottom:1px;">&nbsp;</div>



</html>
