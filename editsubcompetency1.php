  <meta http-equiv="Content-Type" content="text/html; chaRset=UTF-8">
<?php

	include('configure/conn.php');
	if(isset($_POST['submit'])){

	$sql=" update sub_competency_list set competency_id= '$_POST[competency_id]' , sub_competency_name = '$_POST[sub_competency_name]', name_en = '$_POST[name_en]', `feature` = '$_POST[feature]', `feature_en` = '$_POST[feature_en]',`describe` = '$_POST[describe]',`describe_en` = '$_POST[describe_en]', summary1= '$_POST[summary1]',summary2= '$_POST[summary2]',summary3= '$_POST[summary3]',summary4= '$_POST[summary4]',summary5= '$_POST[summary5]',summary6= '$_POST[summary6]',summary7= '$_POST[summary7]',summary8= '$_POST[summary8]',summary9= '$_POST[summary9]',summary10= '$_POST[summary10]', `summary1_en`= '$_POST[summary1_en]', `summary2_en`='$_POST[summary2_en]', `summary3_en`='$_POST[summary3_en]', `summary4_en`='$_POST[summary4_en]' , `summary5_en`='$_POST[summary5_en]', `summary6_en`='$_POST[summary6_en]' , `summary7_en`='$_POST[summary7_en]', `summary8_en`='$_POST[summary8_en]', `summary9_en`='$_POST[summary9_en]', `summary10_en`='$_POST[summary10_en]' where sub_competency_id='$_POST[id]'";
	mysql_query($sql);
	mysql_close($con);
		
	}

	echo "<script>
			alert ('修改成功');
			window.location='editsubcompetency.php?id=".$_POST[id]."';
		
		</script>"




?>
