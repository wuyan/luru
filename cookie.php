<?php
$curfile = basename($_SERVER['PHP_SELF']);
$authority_id=$_COOKIE['authority'];
$parent_name=mysql_query("select * from page_list where page_source='$curfile'");
$row_parent=mysql_fetch_array($parent_name);
$mysql1="select count(*) as total from user_authority where user_id=$authority_id and page_id='$row_parent[page_id]'";
$result1=mysql_query($mysql1);
$row1 = mysql_fetch_array($result1);
if($row1[total]==0)
{
		echo "<script>alert('请登陆');
		window.location='index.php';
		</script>";
}

?>