
<meta http-equiv="Content-Type" content="text/html; chaRset=UTF-8">

<?php

	include('configure/conn.php');
	
	$result = mysql_query("delete from report_list where report_id=$_GET[id]");
	
	

	
	
	echo "<script>
			alert ('删除成功');
			window.location='report_manager.php';
		</script>"

?>