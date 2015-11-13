<?php
include('configure/conn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title id='Description'>报告展现管理</title>
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
			$sql_sub_n = "select * from report_position_display where position_id=$_GET[position_id] and page_id=$_GET[page_id] ";
			$result_sub_n =mysql_query($sql_sub_n);
			$row_sub_n=mysql_fetch_array($result_sub_n);
			$tree = explode(',',$row_sub_n[subcompetency_id]); 
			for($index=0;$index<count($tree);$index++){ 
			echo "$('#jqxTree').jqxTree('checkItem', $('#s".$tree[$index]."')[0], true);";
			}
			

	?>
   
        });
    </script>
</head>
<body class='default' style="background-color:#FFF;width: 300px;">
    <form class="form" id="form"  method="post" action="relatetoposition.php" style="font-size: 13px; font-family: Verdana;">
        <div style='float: left;'>
            <div name="tree" id='jqxTree' style='float: left; margin-left: 20px;'>
			
                <ul>
				<h2><?php echo "第".$_GET[page_id]."胜任力组";?></h2>
                    <div id='home' style="margin-left:10px;font-size:10pt;margin-bottom:20px;margin-top:10px;">
					<b>
					页面标题:<input type="text" name="page_name"  value="<?php echo $row_sub_n[title] ?>" style="width:100px;"/>
					</b></div>
					<input type="hidden" name="position_id" value="<?php echo $_GET[position_id] ?>" />
					<input type="hidden" name="page_id" value="<?php echo $_GET[page_id] ?>" />
                    <?php
					$sql = "select * from position_competency where competency_id >1 and position_id=$_GET[position_id] ";
					$result =mysql_query($sql);
					while ($row=mysql_fetch_array($result)){

						$sql_sub_n = "select * from position_sub_competency where competency_id=$row[competency_id] and position_id=$_GET[position_id] and competency_id !=7";
						$result_sub_n =mysql_query($sql_sub_n);
						while ($row_sub_n=mysql_fetch_array($result_sub_n)){
							$sql_sub_compentecy = "select * from sub_competency_list where sub_competency_id=$row_sub_n[sub_competency_id] ";
							$result_sub_compentecy=mysql_query($sql_sub_compentecy);
							$row_sub_compentecy=mysql_fetch_array($result_sub_compentecy);
/*
							if($_GET[page_id]>1){
								$sql_sub_all = "select * from report_position_display where position_id=$_GET[id] ";
								$result_sub_all =mysql_query($sql_sub_all);
								while($row_sub_all=mysql_fetch_array($result_sub_all)){
										$sub_competency_all=$sub_competency_all.','.$row_sub_all[subcompetency_id];
								}
								$tree = explode(',',$sub_competency_all); 
							}
							if(!in_array($row_sub_compentecy[sub_competency_id],$tree)){
								*/
									echo "<li "."id=s".$row_sub_compentecy[sub_competency_id].">";						
									echo $row_sub_compentecy[sub_competency_name];
									echo "</li>";	
									/*
							}
							*/
						}
		
					}
					?>
                </ul>
            </div>
        </div>
        <div style="clear: both;" />
        <input style="margin-top: 20px;margin-left:130px;" type="submit" value="下一页" id="sendButton" />
    </form>
</body>
</html>
