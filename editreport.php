<?php
include('configure/conn.php');
include('lib/function.php');

$sql="select * from report_list where report_id='$_GET[id]'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
?>

<body>
<form  method="post" action="editreport.php">
<p class="inputdiv0">报告名称：<input name="report_name"  value="<?php echo $row[report_name]; ?>" type="text" class="int0" /></p>
<input name="id" type="hidden" value="<?php echo $_GET['id'];?>">
<p class="submitdiv"><input name="submit" type="submit" class="bt04" value="修 改" />
</p>
</form>
</body>
</html>

<?php
	if(isset($_POST['submit'])){
		 mysql_query("update report_list set `report_name`='$_POST[report_name]' where `report_id`='$_POST[id]'");
		 echo "<script>window.location='report_manager.php'</script>";
	
	}
?>