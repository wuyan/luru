<?php
include('configure/conn.php');
include('lib/function.php');

$sql="select * from authority_list where authority_id='$_GET[id]'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
?>

<body>
<form  method="post" action="editauthorityname.php">
<p class="inputdiv0">权限组名称：<input name="authority_name"  value="<?php echo $row[authority_name]; ?>" type="text" class="int0" /></p>
<input name="id" type="hidden" value="<?php echo $_GET['id'];?>">
<p class="submitdiv"><input name="submit" type="submit" class="bt04" value="修 改" />
</p>
</form>
</body>
</html>

<?php
	if(isset($_POST['submit'])){
		 mysql_query("update authority_list set `authority_name`='$_POST[authority_name]' where `authority_id`='$_POST[id]'");
		 echo "<script>window.location='authority.php'</script>";
	
	}
?>