<?php
include('configure/conn.php');
include('lib/function.php');

$sql="select * from user_profile_list where user_profile_id='$_GET[id]'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
?>

<body>
<form  method="post" action="editinfo.php">
<p class="inputdiv0">字段名称：<input name="user_profile_name"  value="<?php echo $row[user_profile_name]; ?>" type="text" class="int0" /></p>
<input name="id" type="hidden" value="<?php echo $_GET['id'];?>">
<p class="submitdiv"><input name="submit" type="submit" class="bt04" value="修 改" />
</p>
</form>
</body>
</html>

<?php
	if(isset($_POST['submit'])){
		  mysql_query("update user_profile_list set `user_profile_name`='$_POST[user_profile_name]' where `user_profile_id`='$_POST[id]'");
		 echo "<script>window.location='userprofilemanager.php'</script>";
	
	}

?>
