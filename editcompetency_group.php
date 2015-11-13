<?php
include('configure/conn.php');
include('lib/function.php');

$sql="select * from competency_group where group_id='$_GET[id]'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
?>

<body>
<form  method="post" action="editcompetency_group.php">
<p class="inputdiv0">模型名称：<input name="competency_group"  value="<?php echo $row[competency_group]; ?>" type="text" class="int0" /></p>
<input name="id" type="hidden" value="<?php echo $_GET['id'];?>">
<p class="submitdiv"><input name="submit" type="submit" class="bt04" value="修 改" />
</p>
</form>
</body>
</html>

<?php
	if(isset($_POST['submit'])){
		  mysql_query("update competency_group set `competency_group`='$_POST[competency_group]' where `group_id`='$_POST[id]'");
		 echo "<script>window.location='competencygroup.php'</script>";
	
	}

?>
