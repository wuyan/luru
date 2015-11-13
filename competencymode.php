<?php
include('configure/conn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title id='Description'>胜任力模型应用</title>

</head>
<body class='default' style="background-color:#FFF;">
    <form class="form" id="form" method="post" action="applycompetencymode.php" style="font-size: 13px; font-family: Verdana; width: 400px;">
		<div id='home' style="margin-left:auto;margin-right:auto;font-size:11pt;"><b>
					胜任力模型名称:
		</b></div>
		<input type="hidden" name="position_id" value="<?php echo $_GET[id] ?>" />
		<select name="group_id" size="1" class="selectdiv" style="width:230px;margin-top:50px;margin-left:80px;font-size:11pt;">
		<?php
				$sql = "select * from competency_group";
				$result =mysql_query($sql);
				while ($row=mysql_fetch_array($result)){
							
				echo "<option value=\"".$row[group_id]."\">"."$row[competency_group]"."</option>";
																	}
		?>
		</select>
   

        <input type="submit" name="submit" style="background-image:url(images/u23.png);width:101px;height:31px;border:0px solid black;margin-top:20px;margin-left:150px;"  value="提交"  alt="text">
    </form>


</body>
</html>
