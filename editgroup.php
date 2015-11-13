<?php
include('configure/conn.php');
include('lib/function.php');

$sql="select * from group_list where group_id='$_GET[id]'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
?>

<body>
<form  method="post" action="editgroup.php">
<p class="inputdiv0">客户名称：<input name="group_name"  value="<?php echo $row[group_name]; ?>" type="text" class="int0" /></p>
<input name="id" type="hidden" value="<?php echo $_GET['id'];?>">
<p class="submitdiv"><input name="submit" type="submit" class="bt04" value="修 改" />
</p>
</form>
</body>
</html>

<?php
	if(isset($_POST['submit'])){
		 mysql_query("update group_list set `group_name`='$_POST[group_name]' where `group_id`='$_POST[id]'");
		 echo "<script>window.location='positionmanager.php'</script>";
	
	}
?>