<?php
include ('configure/conn.php');
$sql_template = "select * from report_position where report_id='$_GET[report_id]'";
$result_template = mysql_query($sql_template);
$row_template = mysql_fetch_array($result_template);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title id='Description'>胜任力权限组</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<div id='content'>
<form class="form" id="form"  method="post" action="report_display_sub1.php" style="font-size: 13px; font-family: Verdana;">
<h2>胜任力权限组设置</h2>




<?php
$sql_content    = "select * from report_position_display where position_id=$_GET[position_id] order by page_id";
$result_content = mysql_query($sql_content);
while ($row_content = mysql_fetch_array($result_content)) {
	echo "<h4>".$row_content[title]."</h4>";
	echo "<div class='addsrname1'>";
	echo "<div><p>";
    $tree = explode(',', $row_content[subcompetency_id]);
    for ($index = 0; $index < count($tree); $index++) {
        
        $sql_sub_n    = "select * from sub_competency_list where sub_competency_id=$tree[$index]";
        $result_sub_n = mysql_query($sql_sub_n);
        $row_sub_n    = mysql_fetch_array($result_sub_n);
        echo $row_sub_n[sub_competency_name];
		echo ";";
    }
	echo "</p></div>";
	echo "</div>";
}

?>


 <input type="hidden" value="<?php echo $_GET['report_id'] ?>"  name="id"/>
 <input type="hidden" value="<?php echo $_GET['position_id'] ?>"  name="position_id"/>
 <input style="margin-top: 0px;" type="submit" value="进入到修改子胜任力组界面" id="sendButton" />
 </form>

 </div>
</body>
</html>
