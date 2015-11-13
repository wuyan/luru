<?php
include('configure/conn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title id='Description'>字段管理</title>
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
    <style type="text/css">
        .demo-iframe {
            border: none;
            width: 600px;
            height: 400px;
            clear: both;
        }
    </style>

	<?php 
			echo " <script type='text/javascript'>
			 $(document).ready(function () {
            // create jqxTree
            $('#jqxTree').jqxTree({  theme:'fresh',hasThreeStates: true,submitCheckedItems: true, checkboxes: true, width: '400px'});
            $('#sendButton').jqxButton({ width: 120});
            $('#jqxTree').jqxTree('expandAll');";
			$sql_sub_n = "select * from project_profile where project_id=$_GET[id]";
			$result_sub_n =mysql_query($sql_sub_n);
			while ($row_sub_n=mysql_fetch_array($result_sub_n)){
			
			echo "$('#jqxTree').jqxTree('checkItem', $('#s".$row_sub_n[user_profile_id]."')[0], true);";
			}


	?>
   

			
        });
    </script>
</head>
<body class='default' style="background-color:#FFF;width: 500px;">
    <form class="form" id="form" target="form-iframe" method="post" action="managerproject.php" style="font-size: 13px; font-family: Verdana; ">
        <div style='float: left;'>
            <div name="tree" id='jqxTree' style='float: left;'>
                <ul>
                    <div id='home' style="margin:0,auto;;font-size:14pt;margin-bottom:20px;margin-top:10px;margin-left:20px;width:300px;"><b>
					<?php
						$sql_position="select * from project_list where project_id='$_GET[id]'";
						$result_positon=mysql_query($sql_position);
						$row_position=mysql_fetch_array($result_positon);
						echo $row_position[project_name];
					?>
					</b></div>
					<input type="hidden" name="project_id" value="<?php echo $_GET[id] ?>" />
                    <?php
						$sql_sub_n = "select * from user_profile_list";
						$result_sub_n =mysql_query($sql_sub_n);
						while ($row_sub_n=mysql_fetch_array($result_sub_n)){
									echo "<li "."id=s".$row_sub_n[user_profile_id].">";						
									echo $row_sub_n[user_profile_name];
									
									$sql_sub_c = "select * from project_profile where user_profile_id='$row_sub_n[user_profile_id]' and project_id='$_GET[id]'";
									$result_sub_c =mysql_query($sql_sub_c);
									$row_sub_c=mysql_fetch_array($result_sub_c);
									echo "</br>序号：<input type='text' name='order".$row_sub_n[user_profile_id]."' value='$row_sub_c[cixun]'/>";

										$sql_search = "select * from project_list where project_id='$_GET[id]'";
										$result_search =mysql_query($sql_search);
										$row_search=mysql_fetch_array($result_search);

										if($row_search[search_id]==$row_sub_n[user_profile_id]){
										echo "</br>请选择搜索唯一项<input type=\"radio\" name='search' checked=true value=".$row_sub_n[user_profile_id]." />";
										
										}else{

										echo "</br>请选择搜索唯一项<input type=\"radio\" name='search' value=".$row_sub_n[user_profile_id]." />";
										}
						
									echo "</li>";	
						}
					?>


                </ul>
            </div>
        </div>
        <div style="clear: both;" />
        <input style="margin-top: 20px;margin-left:100px;" type="submit" value="提交" id="sendButton" />
    </form>
    <div style="font-size: 13px; font-family: Verdana;">
        <iframe id="form-iframe" name="form-iframe" class="demo-iframe" frameborder="0"></iframe>
    </div>
</body>
</html>
<!--tree.php
echo $_POST["tree"];
-->