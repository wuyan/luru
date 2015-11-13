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

$person="select * from user_profile where user_id=$_GET[user_id]";
$result_person = mysql_query($person);
$row_person   = mysql_fetch_array($result_person);



echo " <script type='text/javascript'>
        $(document).ready(function () {
            // prepare the data
            var source =
            {
                datatype: 'json',
                datafields: [
                    { name: '用户ID', type: 'String'},";
//通过岗位ID得到项目ID
$sql_position    = "select * from position_list where position_id='$row_person[position_id]'";
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
//读取用户胜任力信息
$sql_competency = "select * from position_competency where position_id='$row_person[position_id]'  order by cixun";
$result_competency =mysql_query($sql_competency);
while ($row_competency = mysql_fetch_array($result_competency)) {
	$sql_competency_name = "select * from competency_list where competency_id=$row_competency[competency_id]";
	$result_competency_name =mysql_query($sql_competency_name);
	$row_competency_name=mysql_fetch_array($result_competency_name);
    //获取胜任力名称
    echo "{ name: '" . $row_competency_name[competency_name] . "', type: 'String'},";
    //向数组添加子胜任力
    $sql_subcompetency    = "select * from position_sub_competency where position_id='$row_person[position_id]' and competency_id=$row_competency[competency_id] order by cixun";
    $result_subcompetency = mysql_query($sql_subcompetency);
    while ($row_subcompetency = mysql_fetch_array($result_subcompetency)) {
        $sql_name    = "select * from sub_competency_list where sub_competency_id=$row_subcompetency[sub_competency_id]";
        $result_name = mysql_query($sql_name);
        $row_name    = mysql_fetch_array($result_name);
        echo "{ name: '" . $row_name[sub_competency_name] . "', type: 'String'},";
    }
}
echo "{ name: 'shenghe', type: 'bool' },";
echo "	
                ],
                url: 'person_infor1.php?user_id=".$_GET[user_id]."&position_id=" . $row_person[position_id] . "',
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
				selectionmode: 'multiplerowsextended',
				showfilterrow: true,
				filterable: true,
				width: '84%',
                height: '600',
                source: dataAdapter,
                columns: [
                  { text: '用户ID', datafield: '用户ID', width: 100, hidden: true },";
//通过岗位ID得到项目ID
$sql_position    = "select * from position_list where position_id='$row_person[position_id]'";
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
//读取用户胜任力信息
$sql_competency = "select * from position_competency where position_id='$row_person[position_id]'  order by cixun";
$result_competency =mysql_query($sql_competency);
while ($row_competency = mysql_fetch_array($result_competency)) {
	$sql_competency_name = "select * from competency_list where competency_id=$row_competency[competency_id]";
	$result_competency_name =mysql_query($sql_competency_name);
	$row_competency_name=mysql_fetch_array($result_competency_name);
	if($row_competency[display]=="true"){
    //获取胜任力名称
    echo " { text: '" . $row_competency_name[competency_name] . "平均分', datafield: '" . $row_competency_name[competency_name] . "', width: 150,cellsalign: 'center', align: 'center',editable: false,},";
	}
    //向数组添加子胜任力
    $sql_subcompetency    = "select * from position_sub_competency where position_id='$row_person[position_id]' and competency_id=$row_competency[competency_id] order by cixun";
    $result_subcompetency = mysql_query($sql_subcompetency);
    while ($row_subcompetency = mysql_fetch_array($result_subcompetency)) {
        $sql_name    = "select * from sub_competency_list where sub_competency_id=$row_subcompetency[sub_competency_id]";
        $result_name = mysql_query($sql_name);
        $row_name    = mysql_fetch_array($result_name);
        echo " { text: '" . $row_name[sub_competency_name] . "', datafield: '" . $row_name[sub_competency_name] . "', width: 150, cellsalign: 'center', align: 'center',},";
    }
}
echo "{ text: '审核', datafield: 'shenghe',  columntype: 'checkbox', width: 70,hidden: true  }";
echo "
              ]
            });        ";
echo " 
            $('#excelExport').click(function () {
                $('#jqxgrid').jqxGrid('exportdata', 'xls', 'jqxGrid');           
            })";
// delete row.
echo "	
	$('#deleteRows').click(function () {
                var rowIndexes = $('#jqxgrid').jqxGrid('getselectedrowindexes');
                var rowIds = new Array();
                for (var i = 0; i < rowIndexes.length; i++) {
                    var currentId = $('#jqxgrid').jqxGrid('getrowid', rowIndexes[i]);
                    rowIds.push(currentId);
                };
                $('#jqxgrid').jqxGrid('deleterow', rowIds);
                $('#jqxgrid').jqxGrid('clearselection');
            });
				       var listSource = [";
			
//通过岗位ID得到项目ID
$sql_position    = "select * from position_list where position_id='$row_person[position_id]'";
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
	 echo " { label: '".$user_profile_name."', value: '".$user_profile_name."', checked: true},";
}
		//读取用户胜任力信息
		$sql_competency    = "select * from position_competency where position_id='$row_person[position_id]'  order by cixun";
		$result_competency = mysql_query($sql_competency);
		while ($row_competency = mysql_fetch_array($result_competency)) {
			$sql_competency_name    = "select * from competency_list where competency_id=$row_competency[competency_id]";
			$result_competency_name = mysql_query($sql_competency_name);
			$row_competency_name    = mysql_fetch_array($result_competency_name);
			//获取胜任力名称
			 echo " { label: '".$row_competency_name[competency_name]."', value: '".$row_competency_name[competency_name]."', checked: true},";
			//向数组添加子胜任力
			$sql_subcompetency    = "select * from position_sub_competency where position_id='$row_person[position_id]' and competency_id=$row_competency[competency_id]";
			$result_subcompetency = mysql_query($sql_subcompetency);
			while ($row_subcompetency = mysql_fetch_array($result_subcompetency)) {
				$sql_name    = "select * from sub_competency_list where sub_competency_id=$row_subcompetency[sub_competency_id]";
				$result_name = mysql_query($sql_name);
				$row_name    = mysql_fetch_array($result_name);
				echo " { label: '".$row_name[sub_competency_name]."', value: '".$row_name[sub_competency_name]."', checked: true},";
			}
}

		echo "];

           $('#jqxlistbox').jqxListBox({ source: listSource, width: 200, height: 600,  checkboxes: true });
           $('#jqxlistbox').on('checkChange', function (event) {
                $('#jqxgrid').jqxGrid('beginupdate');
                if (event.args.checked) {
                    $('#jqxgrid').jqxGrid('showcolumn', event.args.value);
                }
                else {
                    $('#jqxgrid').jqxGrid('hidecolumn', event.args.value);
                }
                $('#jqxgrid').jqxGrid('endupdate');
            });

      });


            // trigger the columnreordered event.
            $('#jqxgrid').on('columnreordered', function (event) {
                var column = event.args.columntext;
                var newindex = event.args.newindex
                var oldindex = event.args.oldindex;
                $('#eventlog').text('Column: ' + column + ', ' + 'New Index: ' + newindex + ', Old Index: ' + oldindex);
            });
			

function saveState() {  
var theURL = \"save.php\"; 
var getState = $(\"#jqxgrid\").jqxGrid('savestate');  	  	  	
  var stateToSave = JSON.stringify(getState);
// YOU ARE SAVING A STRING
  	
  $.ajax({
  	type: \"POST\",										
	url: theURL,		
	data: { state_save: stateToSave },		 
	success: function(response) {


	}
});	
};


function loadState() {
        var theURL = \"load.php\";

        $.ajax({
                type: \"GET\", 
                url: theURL,
                data: {
                    what: 'ever-you-need'
                },
                success: function(response) {
                    if (response != \"\") {

                        response = JSON.parse(response);

                        $(\"#jqxgrid\").jqxGrid('loadstate', response);
                     }
                 }
               });
        }

    </script>";
?>
    </head>

 <div style="float: left;" id="jqxlistbox"></div>
 <div id="jqxgrid" style="margin-top:0px;margin-left:0px;float: left;"></div>
		 <div style="margin-top: 10px;margin-left:220px;"><input type="button" value="Export to Excel" id='excelExport' />    
		 <button class="hide" id="savestate" type="button" onclick="saveState();">保存布局</button>
		 <button class="hide" id="loadState" type="button" onclick="loadState();">加载布局</button>
 </div>
	    
  

</body>
</html>
