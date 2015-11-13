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
					{ name: 'project', type: 'string' },
                    { name: 'position', type: 'string' },
                    { name: 'change_before', type: 'string' },
                    { name: 'change_after', type: 'string' },
                ],
				cache: false,
				id: 'EmployeeID',
                url: 'log_position1.php?log_id=<?php echo $_GET[log_id] ?>'         
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
                  { text: '相关项目', columngroup: 'ProductDetails', datafield: 'project',cellsalign: 'center',align: 'center', width: 150 },
                  { text: '相关岗位', columngroup: 'ProductDetails', datafield: 'position', cellsalign: 'center', align: 'center', width: 150 },
                  { text: '变更前条数', columngroup: 'ProductDetails', datafield: 'change_before', align: 'center', cellsalign: 'center', width: 100 },
                  { text: '变更后条数', columngroup: 'ProductDetails',datafield: 'change_after',align: 'center', cellsalign: 'center',  width: 100 },
                ],
                columngroups: [
                    { text: '详细信息', align: 'center', name: 'ProductDetails' }
                ]
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


