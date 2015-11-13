  <meta http-equiv="Content-Type" content="text/html; chaRset=UTF-8">
<?php
	include('configure/conn.php');
	if(isset($_POST['submit'])){
	$sql="INSERT INTO sub_competency_list (sub_competency_name,competency_id,`name_en`,`feature`,`feature_en`,`describe`,`describe_en`,`summary1`,`summary1_en`,`summary2`,`summary2_en`,`summary3`,`summary3_en`,`summary4`,`summary4_en`,`summary5`,`summary5_en`,`summary6`,`summary6_en`,`summary7`,`summary7_en`,`summary8`,`summary8_en`,`summary9`,`summary9_en`,`summary10`,`summary10_en`) VALUES ('$_POST[sub_competency_name]','$_POST[competency_id]','$_POST[name_en]','$_POST[feature]','$_POST[feature_en]','$_POST[describe]','$_POST[describe_en]','$_POST[summary1]','$_POST[summary1_en]','$_POST[summary2]','$_POST[summary2_en]','$_POST[summary3]','$_POST[summary3_en]','$_POST[summary4]','$_POST[summary4_en]','$_POST[summary5]','$_POST[summary5_en]','$_POST[summary6]','$_POST[summary6_en]','$_POST[summary7]','$_POST[summary7_en]','$_POST[summary8]','$_POST[summary8_en]','$_POST[summary9]','$_POST[summary9_en]','$_POST[summary10]','$_POST[summary10_en]')";

	mysql_query($sql);
	mysql_close($con);

	echo "<script>window.location='competency.php'</script>";
	}


?>

