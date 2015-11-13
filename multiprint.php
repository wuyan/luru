<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="script/jqwidgets/styles/jqx.base.css" type="text/css" />
    <link rel="stylesheet" href="script/jqwidgets/styles/jqx.bootstrap.css" type="text/css" />
    <script type="text/javascript" src="script/jquery-1.10.2.min.js"></script> 
	<script type="text/javascript" src="script/jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="script/jqwidgets/jqxbuttons.js"></script>
    <script type="text/javascript" src="script/jqwidgets/jqxscrollbar.js"></script>
    <script type="text/javascript" src="script/jqwidgets/jqxmenu.js"></script>
    <script type="text/javascript" src="script/jqwidgets/jqxcheckbox.js"></script>
    <script type="text/javascript" src="script/jqwidgets/jqxlistbox.js"></script>
    <script type="text/javascript" src="script/jqwidgets/jqxdropdownlist.js"></script>
    <script type="text/javascript" src="script/jqwidgets/jqxgrid.js"></script>
    <script type="text/javascript" src="script/jqwidgets/jqxdata.js"></script>
    <script type="text/javascript" src="script/jqwidgets/jqxgrid.selection.js"></script>
    <script type="text/javascript" src="script/jqwidgets/jqxgrid.edit.js"></script>
	<script type="text/javascript" src="script/jqwidgets/jqxgrid.aggregates.js"></script> 
	<script type="text/javascript" src="script/jqwidgets/jqxgrid.filter.js"></script>
	<script type="text/javascript" src="script/jqwidgets/jqxdata.export.js"></script> 
    <script type="text/javascript" src="script/jqwidgets/jqxgrid.export.js"></script> 
	<script type="text/javascript" src="script/jqwidgets/jqxgrid.columnsresize.js"></script>
	<script type="text/javascript" src="script/jqwidgets/jqxgrid.columnsreorder.js"></script> 
	<script type="text/javascript" src="script/jqwidgets/jqxgrid.pager.js"></script>
	<script type="text/javascript" src="script/jqwidgets/jqxgrid.storage.js"></script>
<?php
include('configure/conn.php');
echo " <script type='text/javascript'>
        $(document).ready(function () {
            // prepare the data
            var source =
            {
                datatype: 'json',
                datafields: [
                    { name: '用户ID', type: 'String'},";

					//通过岗位ID得到项目ID
					$sql_position    = "select * from position_list where position_id='$_GET[position_id]'";
					$result_position = mysql_query($sql_position);
					$row_position    = mysql_fetch_array($result_position);
					//通过项目ID获取到用户字段信息
					$sql_profile     = "select * from project_profile where project_id='$row_position[project_id]' order by cixun";
					$result_profile  = mysql_query($sql_profile);
					//读取用户字段信息
					while ($row_profile = mysql_fetch_array($result_profile)) {
						$sql_name          = "select * from user_profile_list where user_profile_id=$row_profile[user_profile_id]";
						$result_name       = mysql_query($sql_name);
						$row_name          = mysql_fetch_array($result_name);
						$user_profile_name = $row_name['user_profile_name'];
						echo "{ name: '" . $user_profile_name . "', type: 'String'},";
					}

					echo "{ name: 'shenghe', type: 'bool' },";
				echo "	
                ],
                url: 'data3test.php?position_id=" . $_GET[position_id] . "&shenhe=" . $_POST[shenhe] . "&;',
				cache: false,
				id: '用户ID',
				pagesize: 20,
				root: 'Rows',

				}


            var dataAdapter = new $.jqx.dataAdapter(source);
			
			$('#jqxgrid').jqxGrid(
            {
				theme: 'bootstrap',
				columnsresize: true,
				columnsreorder: true,
				selectionmode: 'checkbox',
				showfilterrow: true,
				filterable: true,
				width: '100%',
                height: '600',
                source: dataAdapter,
                columns: [
                  { text: '用户ID', datafield: '用户ID', width: 100, hidden: true },";
					//通过岗位ID得到项目ID
					$sql_position    = "select * from position_list where position_id='$_GET[position_id]'";
					$result_position = mysql_query($sql_position);
					$row_position    = mysql_fetch_array($result_position);
					//通过项目ID获取到用户字段信息
					$sql_profile     = "select * from project_profile where project_id='$row_position[project_id]' order by cixun";
					$result_profile  = mysql_query($sql_profile);
					while ($row_profile = mysql_fetch_array($result_profile)) {
						$sql_name          = "select * from user_profile_list where user_profile_id=$row_profile[user_profile_id]";
						$result_name       = mysql_query($sql_name);
						$row_name          = mysql_fetch_array($result_name);
						$user_profile_name = $row_name['user_profile_name'];
						echo " { text: '" . $user_profile_name . "', datafield: '" . $user_profile_name . "', width: 100, cellsalign: 'center', align: 'center', 
						
						},";
					}
					echo "{ text: '审核', datafield: 'shenghe',  columntype: 'checkbox', width: 70,hidden: true  }";
					echo "
								  ]
					});        ";

echo "	

		$('#deleteRows').click(function () {
			 var rowIndexes = $('#jqxgrid').jqxGrid('getselectedrowindexes');
             var rowIds = new Array();
              for (var i = 0; i < rowIndexes.length; i++) {
                    var currentId = $('#jqxgrid').jqxGrid('getrowid', rowIndexes[i]);
                    rowIds.push(currentId);
               };
			
			$('#jiahe').val(rowIds);
		
		
            });

      });
    </script>";
?>
 </head>
 <form action="report/<?php echo  $_GET[report_id]?>/r.php" method="post" id="formId">
 <div id="jqxgrid" style="margin-top:0px;margin-left:0px;"></div>
 <input type="hidden" id="jiahe" name="jiahe"/>
 <button id="deleteRows">打印选中数据</button>
 </form>
</body>
</html>