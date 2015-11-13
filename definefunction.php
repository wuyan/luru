<?php
include ('configure/conn.php');
$sql_template = "select * from formula where position_id='$_GET[position_id]' and set_id='$_GET[set_id]'";
$result_template = mysql_query($sql_template);
$row_template = mysql_fetch_array($result_template);

//通过岗位ID得到项目ID
$sql_position    = "select * from position_list where position_id='$_GET[position_id]'";
$result_position = mysql_query($sql_position);
$row_position    = mysql_fetch_array($result_position);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title id='Description'>定义公式</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	 <link rel="stylesheet" href="script/jqwidgets/styles/jqx.base.css" type="text/css" />
    <script type="text/javascript" src="script/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="script/jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="script/jqwidgets/jqxdata.js"></script> 
    <script type="text/javascript" src="script/jqwidgets/jqxbuttons.js"></script>
    <script type="text/javascript" src="script/jqwidgets/jqxscrollbar.js"></script>
    <script type="text/javascript" src="script/jqwidgets/jqxmenu.js"></script>
    <script type="text/javascript" src="script/jqwidgets/jqxcheckbox.js"></script>
    <script type="text/javascript" src="script/jqwidgets/jqxlistbox.js"></script>
    <script type="text/javascript" src="script/jqwidgets/jqxdropdownlist.js"></script>
    <script type="text/javascript" src="script/jqwidgets/jqxgrid.js"></script>
    <script type="text/javascript" src="script/jqwidgets/jqxgrid.sort.js"></script> 
    <script type="text/javascript" src="script/jqwidgets/jqxgrid.pager.js"></script> 
    <script type="text/javascript" src="script/jqwidgets/jqxgrid.selection.js"></script> 
    <script type="text/javascript" src="script/jqwidgets/jqxgrid.edit.js"></script> 
	<script type="text/javascript">
        $(document).ready(function () {
            // prepare the data
            var source =
            {
                datatype: "json",
                datafields: [
                    { name: 'xiang', type: 'string' },
					{ name: "id", type: "string"},
                    { name: 'operator', type: 'string' },
                    { name: 'value', type: 'string' },
					{ name: 'character', type: 'string' },

                ],
                id: "id",
                url: "definedata.php?position_id=<?php echo $_GET[position_id]?>&set_id=<?php echo $_GET[set_id]?>", 
				root: 'Rows',
				addrow: function (rowid, rowdata, position, commit) {
                    // synchronize with the server - send insert command
					var data = "insert=true&" + $.param(rowdata);
					   $.ajax({
                            dataType: 'json',
                            url: "definedata.php?position_id=<?php echo $_GET[position_id]?>&set_id=<?php echo $_GET[set_id]?>",
                            data: data,
							cache: false,
                            success: function (data, status, xhr) {
	
								$("#jqxgrid").jqxGrid('updatebounddata','cells');
								commit(true);
							},
							error: function(jqXHR, textStatus, errorThrown)
							{
								
								commit(false);
							}
						});							
			    },
				deleterow: function (rowid, commit) {
                    // synchronize with the server - send delete command
            		   var data = "delete=true&" + $.param({id: rowid});
				       $.ajax({
                            dataType: 'json',
                            url: "definedata.php?position_id=<?php echo $_GET[position_id]?>&set_id=<?php echo $_GET[set_id]?>",
							cache: false,
                            data: data,
                            success: function (data, status, xhr) {
							   // delete command is executed.
							   commit(true);
							},
							error: function(jqXHR, textStatus, errorThrown)
							{
								commit(false);
							}
						});							
			   },
				updaterow: function (rowid, rowdata, commit) {
			        // synchronize with the server - send update command
            		   var data = "update=true&" + $.param(rowdata);
					      $.ajax({
                            dataType: 'json',
                            url: "definedata.php?position_id=<?php echo $_GET[position_id]?>&set_id=<?php echo $_GET[set_id]?>",
							cache: false,
                            data: data,
                            success: function (data, status, xhr) {
	
							  // update command is executed.
						 	  commit(true);
							},
							error: function(jqXHR, textStatus, errorThrown)
							{
							  commit(false);
							}							
						});		
                }

            };

            var dataAdapter = new $.jqx.dataAdapter(source, {
                downloadComplete: function (data, status, xhr) { },
                loadComplete: function (data) { },
                loadError: function (xhr, status, error) { }
            });
            // initialize jqxGrid
            $("#jqxgrid").jqxGrid(
            {
                width: 600,
                source: dataAdapter,                
                autoheight: true,
                sortable: true,
                altrows: true,
                enabletooltips: true,
                editable: true,
                selectionmode: 'singlerow',
				showtoolbar: true,
				showstatusbar: true,
				statusbarheight: 30,
                rendertoolbar: function (toolbar) {
					var me=this;
                    // appends buttons to the status bar.
                    var container = $("<div style='overflow: hidden; position: relative; margin: 3px;'></div>");
                    var addButton = $("<div style='float: left; margin-left: 5px;width:80px;'><img style='position: relative; margin-top: 1px;' src='images/add.png'/><span style='margin-left: 4px; position: relative; top: 0px;'>添加</span></div>");
					var deleteButton = $("<div style='float: left; margin-left: 2px;width:80px;'><img style='position: relative; margin-top: 1px;' src='images/close.png'/><span style='margin-left: 4px; position: relative; top: 0px;'>删除</span></div>");
					container.append(addButton);
					container.append(deleteButton);
					toolbar.append(container);
                    addButton.jqxButton({  width: 60, height: 20 });
					deleteButton.jqxButton({  width: 65, height: 20 });
		
                    addButton.click(function (event) {
						var lastid="<?php 
						$last_id=mysql_query('select max(id) as lastid from gongshi');
						$last=mysql_fetch_array($last_id);
						echo $last[lastid]+1;
						?>";
                        $("#jqxgrid").jqxGrid('addrow', lastid, {});
                    });
					deleteButton.click(function (event) {
                        var selectedrowindex = $("#jqxgrid").jqxGrid('getselectedrowindex');
                        var rowscount = $("#jqxgrid").jqxGrid('getdatainformation').rowscount;
                        var id = $("#jqxgrid").jqxGrid('getrowid', selectedrowindex);
                        $("#jqxgrid").jqxGrid('deleterow', id);
                    });
				},
                columns: [
                  { text: '计算项', datafield: 'xiang', width: 200, align: 'center', filtertype: 'checkedlist',columntype: 'dropdownlist', 
					       createeditor: function (row, column, editor) {
                            // assign a new data source to the dropdownlist.
                            var list = [
							<?php 
							
								//通过项目ID获取到用户字段信息
								$sql_profile     = "select * from project_profile where project_id='$row_position[project_id]' order by cixun";
								$result_profile  = mysql_query($sql_profile);
								while ($row_profile = mysql_fetch_array($result_profile)) {
									$sql_name          = "select * from user_profile_list where user_profile_id=$row_profile[user_profile_id]";
									$result_name       = mysql_query($sql_name);
									$row_name          = mysql_fetch_array($result_name);
									echo '\''.$row_name[user_profile_name].'\',';
								}
								$sql_profile     = "select * from position_competency where position_id='$_GET[position_id]' order by cixun";
								$result_profile  = mysql_query($sql_profile);
								while ($row_profile = mysql_fetch_array($result_profile)) {
									$sql_name          = "select * from competency_list where competency_id=$row_profile[competency_id]";
									$result_name       = mysql_query($sql_name);
									$row_name          = mysql_fetch_array($result_name);
									echo '\''.$row_name[competency_name].'\',';
								}
								$sql_profile     = "select * from position_sub_competency where position_id='$_GET[position_id]' order by cixun";
								$result_profile  = mysql_query($sql_profile);
								while ($row_profile = mysql_fetch_array($result_profile)) {
									$sql_name          = "select * from sub_competency_list where sub_competency_id=$row_profile[sub_competency_id]";
									$result_name       = mysql_query($sql_name);
									$row_name          = mysql_fetch_array($result_name);
									echo '\''.$row_name[sub_competency_name].'\',';
								}
							?>
							];
                            editor.jqxDropDownList({ autoDropDownHeight: true, source: list });
                        },	
				  },
                  { text: '运算符', datafield: 'operator', align: 'center',  filtertype: 'checkedlist',columntype: 'dropdownlist', 
							createeditor: function (row, column, editor) {
                            var list = [
							'>',
							'>=',
							'==',
							'<',
							'<='
							];
                            editor.jqxDropDownList({ autoDropDownHeight: true, source: list });
                        },	 
				  },
                  { text: '值', datafield: 'value', align: 'center',width: 150 },
				  { text: '连字符', datafield: 'character', align: 'center',  filtertype: 'checkedlist',columntype: 'dropdownlist', 
							createeditor: function (row, column, editor) {
                            var list = [
							'and',
							'or',
							];
                            editor.jqxDropDownList({ autoDropDownHeight: true, source: list });
                        },	 
				  },

                ],
            });
        });
    </script>
</head>
<body>
<div id='content'>
<h2>请选择用户字段</h2>
<form class="form" id="form"  method="post" action="definefunction1.php" style="font-size: 13px; font-family: Verdana;">
<select  size="1" class="selectdiv" style="width:200px;font-size:11pt;" name='user_profile_id' >
<?php
$sql = "select * from user_profile_list where user_profile_id=$row_template[user_profile_id]";
$result = mysql_query($sql);
while ($row = mysql_fetch_array($result)) {
    echo "<option value='" . $row[user_profile_id] . "'>" . $row[user_profile_name] . "</option>";
}

//通过项目ID获取到用户字段信息
$sql_profile     = "select * from project_profile where project_id='$row_position[project_id]' order by cixun";
$result_profile  = mysql_query($sql_profile);
while ($row_profile = mysql_fetch_array($result_profile)) {
    $sql_name          = "select * from user_profile_list where user_profile_id=$row_profile[user_profile_id]";
    $result_name       = mysql_query($sql_name);
    $row_name          = mysql_fetch_array($result_name);

     echo "<option value='" . $row_name[user_profile_id] . "'>" . $row_name[user_profile_name] . "</option>";
}
?>
</select>
<h2>请输入公式结果</h2>
<input type="input" value="<?php echo $row_template[result] ?>"  style="width:200px;font-size:11pt;" name="result"/>
<div id='content'>
<h2>请编辑公式内容</h2>
<div id='jqxWidget' style="font-size: 13px; font-family: Verdana; float: left;">
        <div id="jqxgrid">
        </div>
  </div>
 <input type="hidden" value="<?php
echo $_GET['set_id'] ?>"  name="set_id"/>
 <input type="hidden" value="<?php
echo $_GET['position_id'] ?>"  name="position_id"/>
 <input style="margin-top: 0px;" type="submit" value="下一页" id="sendButton" />
 </form>
 </div>
</body>
</html>