<?php
include('configure/conn.php');
include('lib/function.php');
include('cookie.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>睿晶咨询</title>
	<?php $xajax->printJavascript('lib'); ?> 
    <link href="css/style3.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="script/jqwidgets/styles/jqx.base.css" type="text/css" />
    <link rel="stylesheet" href="script/jqwidgets/styles/jqx.classic.css" type="text/css" />
	<link rel="stylesheet" href="script/jqwidgets/styles/jqx.arctic.css" type="text/css" />
	<script type="text/javascript" language="javascript" src="script/lytebox.js"></script>
		<script type="text/javascript" language="javascript">
		function myAfterEnd(){
			  window.location.reload(); 

            }
	</script>
	<link rel="stylesheet" href="css/lytebox.css" type="text/css" media="screen">
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
	<script type="text/javascript" src="script/jqwidgets/jqxgrid.pager.js"></script>	
	<script type="text/javascript" src="script/jqwidgets/jqxgrid.filter.js"></script>
	<script type="text/javascript" src="script/jqwidgets/jqxgrid.sort.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            // prepare the data
            var data = {};
			var theme = 'arctic';
            var source =
            {
                 datatype: "json",
				 datafields: [
					 { name: 'Xuhao', type: 'string'},
					 { name: 'user_name', type: 'string'},
					 { name: 'content', type: 'string'},
					 { name: 'operation_time', type: 'string'},
					 { name: 'type', type: 'string'},
					 { name: 'project', type: 'string'},
					 { name: 'position', type: 'string'},
					 { name: 'user', type: 'string'},
					 { name: 'sub_competency', type: 'string'},
					 { name: 'change_before', type: 'string'},
					 { name: 'change_after', type: 'string'},
					 { name: 'restore', type: 'string'},
                ],
				cache: false,
				id: 'EmployeeID',
                url: 'log1.php'           
            };
			var dataAdapter = new $.jqx.dataAdapter(source);
            // initialize jqxGrid
            $("#jqxgrid").jqxGrid(
            {
                width: 1000,
                height: 400,
				selectionmode: 'singlecell',
                source: dataAdapter,
                theme: theme,
				filterable: true,
				sortable: true,
                columns: [
					  { text: '序号', datafield: 'Xuhao', width: 40 , cellsalign: 'center', align: 'center'},
                      { text: '操作员', editable: false, datafield: 'user_name', width: 70 , cellsalign: 'center', align: 'center'},
					  { text: '操作时间', editable: false, datafield: 'operation_time', width: 130, cellsalign: 'center', align: 'center' },
                      { text: '操作类型', editable: false, datafield: 'type', width: 100, cellsalign: 'center', align: 'center' },
					  { text: '相关项目', editable: false, datafield: 'project', width: 100, cellsalign: 'center', align: 'center' },
					  { text: '相关岗位', editable: false, datafield: 'position', width: 100, cellsalign: 'center', align: 'center' },
					  { text: '参试者', editable: false, datafield: 'user', width: 100, cellsalign: 'center', align: 'center' },
					  { text: '胜任力名称', editable: false, datafield: 'sub_competency', width: 100, cellsalign: 'center', align: 'center' },
					  { text: '变更前条数', editable: false, datafield: 'change_before', width: 100, cellsalign: 'center', align: 'center' },
					  { text: '变更后条数', editable: false, datafield: 'change_after', width: 100, cellsalign: 'center', align: 'center' },
					  { text: '操作选项', editable: false, datafield: 'restore', width: 60, cellsalign: 'center', align: 'center' },
                  ],
            });

        });
    </script>

</head>

<body>
<?php
	//调取NAV栏
    include("nav.php");
?>
    <div class="container" >
		<div id="jqxgrid"></div>
        <div class="clear"></div>
    </div>

</body>

</html>


