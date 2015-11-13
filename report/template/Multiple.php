<?php 
include("conn.php");
include("function.php");


$size=count($_POST[answer]);

for($i=0;$i<$size;$i++)
{

$_GET[id]=$_POST[answer][$i];


$result = mysql_query("select * from user_profile where user_id='$_GET[id]'");
$row=mysql_fetch_array($result);
require("body.php");
$f_img_s=$f_img_a=$f_img_w='';
}

?>