<meta http-equiv="Content-Type" content="text/html; chaRset=UTF-8">
<?php

include("configure/conn.php");
$user_id      = $_POST["user_id"];



$update_query = "UPDATE `user` set `user`='$_POST[user]',`password`='$_POST[password]', `manager`='$_POST[manager]',`authority_id`='$_POST[authority_id]' where id='$user_id'"; 

$result = mysql_query($update_query) or die("SQL Error 1: " . mysql_error());
echo "<script>alert('更改成功');window.location='changepassword.php?user_id=".$user_id."'</script>";

?>