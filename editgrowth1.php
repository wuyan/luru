<meta http-equiv="Content-Type" content="text/html; chaRset=UTF-8">
<?php
//导入运行库
include ('configure/conn.php');

	$sql_sub = "select * from report_sub_competency where report_id=$_POST[report_id] and position_id=$_POST[position_id]";
	$result_sub =mysql_query($sql_sub);
	while ($row_sub=mysql_fetch_array($result_sub)){
	
		$growth1="growth-".$row_sub[sub_competency_id]."-1";
        $growth1=$_POST[$growth1];

		$growth2="growth-".$row_sub[sub_competency_id]."-2";
        $growth2=$_POST[$growth2];

		$growth3="growth-".$row_sub[sub_competency_id]."-3";
        $growth3=$_POST[$growth3];

		$growth4="growth-".$row_sub[sub_competency_id]."-4";
        $growth4=$_POST[$growth4];

		$growth5="growth-".$row_sub[sub_competency_id]."-5";
        $growth5=$_POST[$growth5];

		$growth6="growth-".$row_sub[sub_competency_id]."-6";
        $growth6=$_POST[$growth6];

		$growth7="growth-".$row_sub[sub_competency_id]."-7";
        $growth7=$_POST[$growth7];
		
		$growth8="growth-".$row_sub[sub_competency_id]."-8";
        $growth8=$_POST[$growth8];

		$growth9="growth-".$row_sub[sub_competency_id]."-9";
        $growth9=$_POST[$growth9];

		$growth10="growth-".$row_sub[sub_competency_id]."-10";
        $growth10=$_POST[$growth10];


	 $sql1="update report_sub_competency set `growth1`='$growth1', `growth2`='$growth2' ,`growth3`='$growth3' ,`growth4`='$growth4' , `growth5`='$growth5', `growth6`='$growth6' , `growth7`='$growth7' , `growth8`='$growth8' , `growth9`='$growth9' , `growth10`='$growth10'  where report_id='$_POST[report_id]' and sub_competency_id=$row_sub[sub_competency_id] and position_id='$_POST[position_id]'";
	 mysql_query($sql1);
	}
		echo "<script>
			alert ('修改成功');
			window.location='report_manager.php';
		</script>";
?>