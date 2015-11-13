<meta http-equiv="Content-Type" content="text/html; chaRset=UTF-8">
<?php

include('configure/conn.php');

$delete="delete  from  formula where position_id=$_POST[position_id] and set_id=$_POST[set_id]";
mysql_query($delete);

$sql="INSERT INTO formula (`position_id`,`set_id`,`user_profile_id`,`result`) VALUES ('$_POST[position_id]','$_POST[set_id]','$_POST[user_profile_id]','$_POST[result]')";
mysql_query($sql);
$set_id=$_POST[set_id]+1;
echo "<script>window.location='definefunction.php?position_id=".$_POST[position_id]."&set_id=".$set_id."';</script>";
?>