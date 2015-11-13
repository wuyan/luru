<?php
include('configure/conn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title id='Description'>权限设置</title>
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
			$sql_sub_n = "select * from user_authority where user_id=$_GET[id]";
			$result_sub_n =mysql_query($sql_sub_n);
			while ($row_sub_n=mysql_fetch_array($result_sub_n)){
			
			echo "$('#jqxTree').jqxTree('checkItem', $('#s".$row_sub_n[page_id]."')[0], true);";
			}


	?>
   

			
        });
    </script>
</head>
<body class='default' style="background-color:#FFF;width: 300px;">
    <form class="form" id="form"  method="post" action="authority_set1.php" style="font-size: 13px; font-family: Verdana;">
        <div style='float: left;'>
            <div name="tree" id='jqxTree' style='float: left; margin-left: 20px;'>
                <ul>
                    <div id='home' style="margin-left:100px;font-size:14pt;margin-bottom:20px;margin-top:10px;"><b>
					<?php
						$sql_position="select * from authority_list where authority_id='$_GET[id]'";
						$result_positon=mysql_query($sql_position);
						$row_position=mysql_fetch_array($result_positon);
						echo $row_position[authority_name];
					?>
					</b></div>
					<input type="hidden" name="user_id" value="<?php echo $_GET[id] ?>" />
                    <?php
					$sql = "select * from mainpage_list";
					$result =mysql_query($sql);
					while ($row=mysql_fetch_array($result)){
						echo "<li "."id=c".$row[mainpage_id].">";
						echo $row[mainpage_name];
						echo "<ul>";
						$sql_sub_n = "select * from page_list where mainpage_id=$row[mainpage_id]";
						$result_sub_n =mysql_query($sql_sub_n);
						while ($row_sub_n=mysql_fetch_array($result_sub_n)){
									echo "<li "."id=s".$row_sub_n[page_id].">";						
									echo $row_sub_n[page_name];
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

</body>
</html>
