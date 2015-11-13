<?php
include('configure/conn.php');
include('lib/function.php');

$sql="select * from project_list where project_id='$_GET[id]'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
?>

<body>
<form  method="post" action="editproject.php">
<p class="inputdiv0">项目名称：<input name="project_name"  value="<?php echo $row[project_name]; ?>" type="text" class="int0" /></p>
<input name="id" type="hidden" value="<?php echo $_GET['id'];?>">
<p class="submitdiv"><input name="submit" type="submit" class="bt04" value="修 改" />
</p>
</form>
</body>
</html>

<?php
	if(isset($_POST['submit'])){
		  mysql_query("update project_list set `project_name`='$_POST[project_name]' where `project_id`='$_POST[id]'");
		 echo "<script>window.location='positionmanager.php'</script>";
	
	}
?>