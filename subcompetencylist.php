<?php
include('configure/conn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title id='Description'>胜任力管理</title>
    <link rel="stylesheet" href="script/jqwidgets/styles/jqx.base.css" type="text/css" />
	<link rel="stylesheet" href="script/jqwidgets/styles/jqx.fresh.css" type="text/css" />
    <script type="text/javascript" src="script/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="script/jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="script/jqwidgets/jqxbuttons.js"></script>
    <script type="text/javascript" src="script/jqwidgets/jqxscrollbar.js"></script>
    <script type="text/javascript" src="script/jqwidgets/jqxpanel.js"></script>
    <script type="text/javascript" src="script/jqwidgets/jqxtree.js"></script>
    <script type="text/javascript" src="script/jqwidgets/jqxradiobutton.js"></script>
    <script type="text/javascript" src="script/jqwidgets/jqxcheckbox.js"></script>
    <style type="text/css">
        .demo-iframe {
            border: none;
            width: 400px;
            height: 400px;
            clear: both;
        }
    </style>

	<?php 
			echo " <script type='text/javascript'>
			 $(document).ready(function () {
            // create jqxTree
            $('#jqxTree').jqxTree({ theme:'fresh', hasThreeStates: true,submitCheckedItems: true, checkboxes: true, width: '330px'});
            $('#sendButton').jqxButton({ width: 70});
            $('#jqxTree').jqxTree('expandAll');";
			$sql_sub_n = "select * from position_sub_competency where position_id=$_GET[id]";
			$result_sub_n =mysql_query($sql_sub_n);
			while ($row_sub_n=mysql_fetch_array($result_sub_n)){
			
			echo "$('#jqxTree').jqxTree('checkItem', $('#s".$row_sub_n[sub_competency_id]."')[0], true);";
			}


	?>
   

			
        });
    </script>
</head>
<body class='default' style="background-color:#FFF;width: 300px;">
    <form class="form" id="form" target="form-iframe" method="post" action="tree.php" style="font-size: 13px; font-family: Verdana;">
        <div style='float: left;'>
            <div name="tree" id='jqxTree' style='float: left; margin-left: 20px;'>
                <ul>
                    <div id='home' style="margin-left:100px;font-size:14pt;margin-bottom:20px;margin-top:10px;"><b>
					<?php
						$sql_position="select * from position_list where position_id='$_GET[id]'";
						$result_positon=mysql_query($sql_position);
						$row_position=mysql_fetch_array($result_positon);
						echo $row_position[display_name];
					?>
					</b></div>
					<input type="hidden" name="position_id" value="<?php echo $_GET[id] ?>" />
                    <?php
					$sql = "select * from competency_list where competency_id >1 ";
					$result =mysql_query($sql);
					while ($row=mysql_fetch_array($result)){
						echo "<li "."id=c".$row[competency_id].">";
						echo $row[competency_name];
						echo "<ul>";
						$sql_sub_n = "select * from sub_competency_list where competency_id=$row[competency_id]";
						$result_sub_n =mysql_query($sql_sub_n);
						while ($row_sub_n=mysql_fetch_array($result_sub_n)){
									echo "<li "."id=s".$row_sub_n[sub_competency_id].">";						
									echo $row_sub_n[sub_competency_name];

									$sql_sub_c = "select * from position_sub_competency where sub_competency_id='$row_sub_n[sub_competency_id]' and position_id=$_GET[id]";
									$result_sub_c =mysql_query($sql_sub_c);
									$row_sub_c=mysql_fetch_array($result_sub_c);
									echo "</br>序号：<input type='text' name='weight".$row_sub_n[sub_competency_id]."' value='$row_sub_c[cixun]' />";
									echo "</li>";	
						}
						echo "</ul>";
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
<!--tree.php
echo $_POST["tree"];
-->