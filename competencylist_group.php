<?php
include('configure/conn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title id='Description'>胜任力模型管理</title>
    <link rel="stylesheet" href="script/jqwidgets/styles/jqx.base.css" type="text/css" />
	<link rel="stylesheet" href="script/jqwidgets/styles/jqx.fresh.css" type="text/css" />
    <script type="text/javascript" src="script/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="script/demos.js"></script>
    <script type="text/javascript" src="script/jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="script/jqwidgets/jqxbuttons.js"></script>
    <script type="text/javascript" src="script/jqwidgets/jqxscrollbar.js"></script>
    <script type="text/javascript" src="script/jqwidgets/jqxpanel.js"></script>
    <script type="text/javascript" src="script/jqwidgets/jqxtree.js"></script>
    <script type="text/javascript" src="script/jqwidgets/jqxradiobutton.js"></script>
    <script type="text/javascript" src="script/jqwidgets/jqxcheckbox.js"></script>

	<?php 
			echo " 
				<script type='text/javascript'>
					 $(document).ready(function () {
					// create jqxTree
					$('#jqxTree').jqxTree({ theme:'fresh',hasThreeStates: true,submitCheckedItems: true, checkboxes: true, width: '450px'});
					$('#sendButton').jqxButton({ width: 70});
					$('#jqxTree').jqxTree('expandAll');";
					$sql_sub_n = "select * from position_group_competency where group_id=$_GET[id]";
					$result_sub_n =mysql_query($sql_sub_n);
					while ($row_sub_n=mysql_fetch_array($result_sub_n)){
					echo "$('#jqxTree').jqxTree('checkItem', $('#s".$row_sub_n[competency_id]."')[0], true);";
			}
	?>		
        });
    </script>
</head>
<body class='default' style="background-color:#FFF;">
    <form class="form" id="form" target="form-iframe" method="post" action="positioncompetency_group.php" style="font-size: 13px; font-family: Verdana; width: 400px;">
        <div style='float: left;'>
            <div name="tree" id='jqxTree' style='float: left; margin-left: 20px;'>
                <ul>
                    <div id='home' style="margin-left:auto;margin-right:auto;font-size:14pt;margin-bottom:20px;margin-top:10px;"><b>
					<?php
						$sql_position="select * from competency_group where group_id='$_GET[id]'";
						$result_positon=mysql_query($sql_position);
						$row_position=mysql_fetch_array($result_positon);
						echo $row_position[competency_group];
					?>
					</b></div>
					<input type="hidden" name="group_id" value="<?php echo $_GET[id] ?>" />
                    <?php
						//不显示总胜任力
						$sql_sub_n = "select * from competency_list where competency_id ";
						$result_sub_n =mysql_query($sql_sub_n);
						while ($row_sub_n=mysql_fetch_array($result_sub_n)){
									echo "<li "."id=s".$row_sub_n[competency_id].">";						
									echo $row_sub_n[competency_name];
									
									$sql_sub_c = "select * from position_group_competency where competency_id='$row_sub_n[competency_id]' and group_id='$_GET[id]'";
									$result_sub_c =mysql_query($sql_sub_c);
									$row_sub_c=mysql_fetch_array($result_sub_c);
									echo "</br>序号：<input type='text' name='cixun".$row_sub_n[competency_id]."' value='$row_sub_c[cixun]'/>";
									if($row_sub_c[display]=='true'){
										
									echo "</br>是否显示：<input type='checkbox' name='display".$row_sub_n[competency_id]."' value='true' checked=true />";
									}else{
									echo "</br>是否显示：<input type='checkbox' name='display".$row_sub_n[competency_id]."' value='true'/>";
									}

									echo "</li>";	
						}
					?>


                </ul>
            </div>
        </div>
        <div style="clear: both;" />
        <input style="margin-top: 20px;margin-left:130px;" type="submit" value="提交" id="sendButton" />
    </form>
	 <div style="font-size: 13px; font-family: Verdana;">
        <iframe id="form-iframe" name="form-iframe" class="demo-iframe" frameborder="0"></iframe>
    </div>

</body>
</html>
<?php
echo $_POST["tree"];
?>