<?php
include('configure/conn.php');
include('lib/function.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="keywords" content="">
<meta name="description" content="">
<title>睿晶咨询</title>
<link href="css/style4.css" rel="stylesheet" type="text/css" />
</head>
<body>
<form action="editgrowth1.php" method="post">

<?php	
						echo "<div class='inputdiv2'>";
						//获取报告所属岗位
						$sql_sub = "select * from report_position where id=$_GET[id] ";
						$result_sub =mysql_query($sql_sub);
						$row_sub=mysql_fetch_array($result_sub);
					

						//读取岗位下所有子胜任力ID
						$sql_competency = "select * from position_competency where position_id=$row_sub[position_id] order by cixun";
						$result_competency = mysql_query($sql_competency);
						while ($row_competency = mysql_fetch_array($result_competency)) {
								$sql_subcompetency = "select * from position_sub_competency where position_id='$row_sub[position_id]' and competency_id=$row_competency[competency_id] order by cixun";
								$result_subcompetency = mysql_query($sql_subcompetency);
								while ($row_subcompetency = mysql_fetch_array($result_subcompetency)) {
									$sql_fazhan = "select * from report_sub_competency where sub_competency_id=$row_subcompetency[sub_competency_id] and position_id=$row_sub[position_id] and report_id=$row_sub[report_id]";
									$result_fazhan = mysql_query($sql_fazhan);
									$row_fazhan = mysql_fetch_array($result_fazhan);

									$sql_name1 = "select * from sub_competency_list where sub_competency_id=$row_subcompetency[sub_competency_id]";
									$result_name1 = mysql_query($sql_name1);
									$row_name1 = mysql_fetch_array($result_name1);

									echo "<h5>".$row_name1[sub_competency_name]."</h5>";
																		
									for($i=1;$i<11;$i++){
										$growth="growth".$i;
										echo "<p><font class='ft2'>".$i."、</font><textarea class='int6' name=growth-".$row_fazhan[sub_competency_id]."-".$i."   >".$row_fazhan[$growth]."</textarea></span></p>";
									}

								}
													

						}


						
					echo '</div>';
?>


<input type='hidden' name='report_id' value='<?php echo $row_sub[report_id];?>'/>
<input type='hidden' name='position_id' value='<?php echo $row_sub[position_id];?>'/>

<p class="submitdiv"><input name="修改" type="submit" class="bt04" value="修 改"  name="Submit"/>
</p>
</form>
</body>
</html>
