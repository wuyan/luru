<?php
include('configure/conn.php');
include('lib/function.php');

$sql="select * from competency_list where competency_id='$_GET[id]'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
?>

<body>
<form  method="post" action="editcompetency.php">
<p class="inputdiv0">胜任力名称：<input name="competency_name"  value="<?php echo $row[competency_name]; ?>" type="text" class="int0" /></p>
<input name="id" type="hidden" value="<?php echo $_GET['id'];?>">
<p class="submitdiv"><input name="submit" type="submit" class="bt04" value="修 改" />
</p>
</form>
</body>
</html>

<?php
	if(isset($_POST['submit'])){
		 mysql_query("update competency_list set `competency_name`='$_POST[competency_name]' where `competency_id`='$_POST[id]'");
		 echo "<script>window.location='competency.php'</script>";
	
	}
?>