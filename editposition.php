
<?php
include('configure/conn.php');
include('lib/function.php');

						$sql="select * from position_list where position_id='$_GET[id]'";
						$result=mysql_query($sql);
						$row=mysql_fetch_array($result);
?>

<body>
<form  method="post" action="editposition.php">
<p class="inputdiv0" style="height:50px;">岗位名称：<input name="position_name"  value="<?php echo $row[position_name]; ?>" type="text" class="int0" /></p>
<input name="id" type="hidden" value="<?php echo $_GET['id'];?>">
<p class="inputdiv0" style="padding-top:0px;height:50px;">显示名称：<input name="display_name"  value="<?php echo $row[display_name]; ?>" type="text" class="int0" /></p>
<input name="id" type="hidden" value="<?php echo $_GET['id'];?>">
<p class="submitdiv"><input name="submit" type="submit" class="bt04" value="修 改" />
</p>
</form>
</body>
</html>

<?php
	if(isset($_POST['submit'])){
		  mysql_query("update position_list set `position_name`='$_POST[position_name]',`display_name`='$_POST[display_name]'  where `position_id`='$_POST[id]'");
		 echo "<script>window.location='positionmanager.php'</script>";
	
	}
?>