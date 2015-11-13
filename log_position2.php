<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title id='Description'>详细信息</title>
    <link rel="stylesheet" href="script/jqwidgets/styles/jqx.base.css" type="text/css" />
    <link rel="stylesheet" href="script/jqwidgets/styles/jqx.classic.css" type="text/css" />
	<link rel="stylesheet" href="script/jqwidgets/styles/jqx.arctic.css" type="text/css" />
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
            var source =
            {
                datatype: "json",
                datafields: [
                    { name: 'project', type: 'string' },
                    { name: 'position', type: 'string' },
                    { name: 'change_before', type: 'string' },
                    { name: 'change_after', type: 'string' },
                ],
                root: "Products",
                record: "Product",
                id: 'ProductID',
                url: 'log_position1.php?log_id=<?php echo $_GET[log_id] ?>'  
            };
            var dataAdapter = new $.jqx.dataAdapter(source, {
                downloadComplete: function (data, status, xhr) { },
                loadComplete: function (data) { },
                loadError: function (xhr, status, error) { }
            });
            // initialize jqxGrid
            $("#jqxgrid").jqxGrid(
            {
                width: 500,
                source: dataAdapter,                
                pageable: true,
                autoheight: true,
                sortable: true,
                altrows: true,
                enabletooltips: true,
                editable: true,
                selectionmode: 'multiplecellsadvanced',
                columns: [
                  { text: '相关项目', columngroup: 'ProductDetails', datafield: 'project',align: 'center', width: 150 },
                  { text: '相关岗位', columngroup: 'ProductDetails', datafield: 'position', cellsalign: 'right', align: 'center', width: 150 },
                  { text: '变更前数据', columngroup: 'ProductDetails', datafield: 'change_before', align: 'center', cellsalign: 'right', width: 100 },
                  { text: '变更后数据', columngroup: 'ProductDetails',datafield: 'change_after',align: 'center', cellsalign: 'center',  width: 100 },
                ],
                columngroups: [
                    { text: '详细信息', align: 'center', name: 'ProductDetails' }
                ]
            });
        });
    </script>
</head>
<body class='default'>
    <div id='jqxWidget' style="font-size: 13px; font-family: Verdana; float: left;">
        <div id="jqxgrid">
        </div>
     </div>
</body>
</html>