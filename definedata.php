<?php
ini_set("display_errors","Off");
#Include the connect.php file
include('configure/conn.php');
if (isset($_GET['insert']))
{


    $insert_query = "INSERT INTO `gongshi` (`position_id`,`set_id`) VALUES ('".$_GET[position_id]."','".$_GET[set_id]."')";
    $result = mysql_query($insert_query) or die("SQL Error 1: " . mysql_error());



    echo $result;
}
elseif(isset($_GET['delete'])){

	$delete_query = "DELETE FROM gongshi WHERE `id`='".$_GET['id']."'";	
	$result = mysql_query($delete_query) or die("SQL Error 1: " . mysql_error());

    echo $result;


}elseif (isset($_GET['update']))
{
	$xiang=mysql_real_escape_string($_GET['xiang']);


	$user_profile = "select count(*) as total from user_profile_list where user_profile_name='$xiang'";
	$result1 = mysql_query($user_profile ) or die("SQL Error 1: " . mysql_error());
	$row1 = mysql_fetch_array($result1);
	if($row1[total]>0){
			$mysql3="select * from user_profile_list where user_profile_name='$xiang'";
			$result3=mysql_query($mysql3);
			$row3 = mysql_fetch_array($result3);
			$xiang="u,".$row3[user_profile_id];
	}

	$user_profile = "select count(*) as total from competency_list where competency_name='$xiang'";
	$result1 = mysql_query($user_profile ) or die("SQL Error 1: " . mysql_error());
	$row1 = mysql_fetch_array($result1);
	if($row1[total]>0){
			$mysql3="select * from competency_list where competency_name='$xiang'";
			$result3=mysql_query($mysql3);
			$row3 = mysql_fetch_array($result3);
			$xiang="c,".$row3[competency_id];
	}
	
	$user_profile = "select count(*) as total from sub_competency_list where sub_competency_name='$xiang'";
	$result1 = mysql_query($user_profile ) or die("SQL Error 1: " . mysql_error());
	$row1 = mysql_fetch_array($result1);
	if($row1[total]>0){
			$mysql3="select * from sub_competency_list where sub_competency_name='$xiang'";
			$result3=mysql_query($mysql3);
			$row3 = mysql_fetch_array($result3);
			$xiang="s,".$row3[sub_competency_id];
	}

	
	// UPDATE COMMAND 
	$update_query = "UPDATE `gongshi` SET `value`='".mysql_real_escape_string($_GET['value'])."',`operator`='".mysql_real_escape_string($_GET['operator'])."',`character`='".mysql_real_escape_string($_GET['character'])."' ,`xiang`='".$xiang."' WHERE `id`='".mysql_real_escape_string($_GET['id'])."'";
	$result = mysql_query($update_query) or die("SQL Error 1: " . mysql_error());

	echo $result;

}else{

$query = "SELECT * FROM gongshi where position_id=".$_GET[position_id]." and set_id=".$_GET[set_id]." order by id asc";
$i = 0;
$result = mysql_query($query) or die("SQL Error 1: " . mysql_error());
while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
	$customers[$i]['Xuhao'] = $i+1;
	$customers[$i]['operator']=$row['operator'];
	$customers[$i]['value']=$row['value'];
	$customers[$i]['character']=$row['character'];
	$customers[$i]['id']=$row['id'];
	

	$arr = explode(",",$row['xiang']);
	if($arr[0]=='u'){
		$parent_mysql=mysql_query("select * from user_profile_list where user_profile_id ='$arr[1]'");
		$row_parent=mysql_fetch_array($parent_mysql);
		$customers[$i]['xiang']=$row_parent[user_profile_name];
	}
	if($arr[0]=='c'){
		$parent_mysql=mysql_query("select * from competency_list where competency_id ='$arr[1]'");
		$row_parent=mysql_fetch_array($parent_mysql);
		$customers[$i]['xiang']=$row_parent[competency_name];
	}
	if($arr[0]=='s'){
		$parent_mysql=mysql_query("select * from sub_competency_list where sub_competency_id ='$arr[1]'");
		$row_parent=mysql_fetch_array($parent_mysql);
		$customers[$i]['xiang']=$row_parent[sub_competency_name];
	}

	$i++;



}
echo json_encode($customers);
}
?>