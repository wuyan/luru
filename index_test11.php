<!DOCTYPE html>
<html lang="en">
<head>
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
	<script type="text/javascript" src="script/jqwidgets/jqxgrid.pager.js"></script>
	<script type="text/javascript" src="script/jqwidgets/jqxgrid.sort.js"></script>	
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

//显示姓名,岗位，测评时间，测评师，测评结果5项必要字段
for ($user_profile_id = 1; $user_profile_id < 6; $user_profile_id++) {
    $sql_name    = "select * from  user_profile_list where user_profile_id=$user_profile_id";
    $result_name = mysql_query($sql_name);
    $row_name    = mysql_fetch_array($result_name);
    echo "{ name: '" . $row_name[user_profile_name] . "', type: 'String'},";
}


//读取用户胜任力信息
$sql_competency    = "select * from position_competency where position_id='$_POST[position_id]'  order by cixun";
$result_competency = mysql_query($sql_competency);
while ($row_competency = mysql_fetch_array($result_competency)) {
    $sql_competency_name    = "select * from competency_list where competency_id=$row_competency[competency_id]";
    $result_competency_name = mysql_query($sql_competency_name);
    $row_competency_name    = mysql_fetch_array($result_competency_name);
    //获取胜任力名称
    echo "{ name: '" . $row_competency_name[competency_name] . "', type: 'number'},";
    //向数组添加子胜任力
    $sql_subcompetency    = "select * from position_sub_competency where position_id='$_POST[position_id]' and competency_id=$row_competency[competency_id] order by cixun";
    $result_subcompetency = mysql_query($sql_subcompetency);
    while ($row_subcompetency = mysql_fetch_array($result_subcompetency)) {
        $sql_name    = "select * from sub_competency_list where sub_competency_id=$row_subcompetency[sub_competency_id]";
        $result_name = mysql_query($sql_name);
        $row_name    = mysql_fetch_array($result_name);
        echo "{ name: '" . $row_name[sub_competency_name] . "', type: 'number'},";
    }
}

echo "	
                ],
                url: 'data1test.php?position_id=" . $_POST[position_id] . "&shenhe=" . $_POST[shenhe] . ";',
				cache: false,
				id: '用户ID',
                deleterow: function (rowid, commit) {
                     var data = \"delete=true&id=\"+rowid;
				       $.ajax({
                            dataType: 'json',
                            url: 'data1test.php',
							cache: false,
                            data: data,
                            success: function (data, status, xhr) {
							   // delete command is executed.
							   commit(true);
							   alert('审核成功');
					
							},
							error: function(jqXHR, textStatus, errorThrown)
							{
								commit(false);
					
							}
						});							
			   },
				  updaterow: function (rowid, rowdata, commit) {
			        // synchronize with the server - send update command
                    var data = \"update=true&\" + $.param(rowdata);

					$.ajax({
							dataType: 'json',
							url: 'data1test.php',
							data: data,
							success: function (data, status, xhr) {
								// update command is executed.
								 commit(true);
							
							}
						});		
                }
            };

			function deletelol(rowid, commit) {
                     var data = \"add=true&id=\"+rowid;
				       $.ajax({
                            dataType: 'json',
                            url: 'data1test.php',
							cache: false,
                            data: data,
                            success: function (data, status, xhr) {
							   // delete command is executed.
							   alert('删除成功');
							},
							error: function(jqXHR, textStatus, errorThrown)
							{
								
								return false;
							}
			});		
			}
			// set rows details.
            $('#jqxgrid').bind('bindingcomplete', function (event) {
                if (event.target.id == 'jqxgrid') {
                    $('#jqxgrid').jqxGrid('beginupdate');
                    var datainformation = $('#jqxgrid').jqxGrid('getdatainformation');
                    for (i = 0; i < datainformation.rowscount; i++) {
                        $('#jqxgrid').jqxGrid('setrowdetails', i, \"<div id='grid\" + i + \"' style='margin-left:29px;margin-top:20px;'></div>\", 230, true);
                    }
                    $('#jqxgrid').jqxGrid('resumeupdate');
                }
            });


var initrowdetails = function (index, parentElement, gridElement) {      
				var row = index;
				var id = $('#jqxgrid').jqxGrid('getrowdata', row)['用户ID'];
			    var grid = $($(parentElement).children()[0]);
            
				var source =
				{
					url: 'data2.php',
					dataType: 'json',
					data: {id: id},
					datafields: [
                    { name: '用户ID', type: 'String'},";

for ($user_profile_id = 1; $user_profile_id < 6; $user_profile_id++) {
    $sql_name    = "select * from  user_profile_list where user_profile_id=$user_profile_id";
    $result_name = mysql_query($sql_name);
    $row_name    = mysql_fetch_array($result_name);
    echo "{ name: '" . $row_name[user_profile_name] . "', type: 'String'},";
    
}

//读取用户胜任力信息
$sql_competency    = "select * from position_competency where position_id='$_POST[position_id]'  order by cixun";
$result_competency = mysql_query($sql_competency);
while ($row_competency = mysql_fetch_array($result_competency)) {
    $sql_competency_name    = "select * from competency_list where competency_id=$row_competency[competency_id]";
    $result_competency_name = mysql_query($sql_competency_name);
    $row_competency_name    = mysql_fetch_array($result_competency_name);
    //获取胜任力名称
    echo "{ name: '" . $row_competency_name[competency_name] . "', type: 'String'},";
    //向数组添加子胜任力
    $sql_subcompetency    = "select * from position_sub_competency where position_id='$_POST[position_id]' and competency_id=$row_competency[competency_id] order by cixun";
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
 				};
				var adapter = new $.jqx.dataAdapter(source);

				// init Orders Grid
				grid.jqxGrid(
				{
					virtualmode: true,
					height: 190,
					width: '100%',
					sortable: true,
					source: adapter,
					theme: 'classic',
					rendergridrows: function (obj) {
						return obj.data;
					},
                columns: [
                  { text: '用户ID', datafield: '用户ID', width: 100, hidden: true },";


for ($user_profile_id = 1; $user_profile_id < 6; $user_profile_id++) {
    $sql_name    = "select * from  user_profile_list where user_profile_id=$user_profile_id";
    $result_name = mysql_query($sql_name);
    $row_name    = mysql_fetch_array($result_name);
    echo " { text: '" . $row_name[user_profile_name] . "', datafield: '" . $row_name[user_profile_name] . "', width: 100,cellsalign: 'center', align: 'center',editable: false,},";
    
}


//读取用户胜任力信息
$sql_competency    = "select * from position_competency where position_id='$_POST[position_id]'  order by cixun";
$result_competency = mysql_query($sql_competency);
while ($row_competency = mysql_fetch_array($result_competency)) {
    $sql_competency_name    = "select * from competency_list where competency_id=$row_competency[competency_id]";
    $result_competency_name = mysql_query($sql_competency_name);
    $row_competency_name    = mysql_fetch_array($result_competency_name);
    //获取胜任力名称
    echo " { text: '" . $row_competency_name[competency_name] . "', datafield: '" . $row_competency_name[competency_name] . "', width: 150,cellsalign: 'center', align: 'center',editable: false,
	
	
	},";
    //向数组添加子胜任力
    $sql_subcompetency    = "select * from position_sub_competency where position_id='$_POST[position_id]' and competency_id=$row_competency[competency_id] order by cixun";
    $result_subcompetency = mysql_query($sql_subcompetency);
    while ($row_subcompetency = mysql_fetch_array($result_subcompetency)) {
        $sql_name    = "select * from sub_competency_list where sub_competency_id=$row_subcompetency[sub_competency_id]";
        $result_name = mysql_query($sql_name);
        $row_name    = mysql_fetch_array($result_name);
        echo " { text: '" . $row_name[sub_competency_name] . "', datafield: '" . $row_name[sub_competency_name] . "', width: 150, cellsalign: 'center', align: 'center',   },";
    }
}
echo "{ text: '审核', datafield: 'shenghe',  columntype: 'checkbox', width: 70,hidden: true  }";
echo "
              ]
				});					
			};


			var cellclass = function (row, columnfield, value) {
				if (value == '通过') {
						return 'green';
				}
				else if (value=='替换') {
						return 'red';
				}
				else if (value=='进一步观察') {
						return 'yellow';
				}
				
			}


            var dataAdapter = new $.jqx.dataAdapter(source);
	
			$('#jqxgrid').jqxGrid(
            {
	
			
				theme: 'bootstrap',
				sortable: true,
				showstatusbar: true,
                statusbarheight: 50,
                showaggregates: true,
                rendergridrows: function () {
                    return dataAdapter.records;
                },			
				selectionmode: 'checkbox',
			
				filterable: true,
				editable: true,
				editmode: 'click',
				width: '84%',
                height: '600',
                source: dataAdapter,
                columns: [
                  { text: '用户ID', datafield: '用户ID', width: 100, hidden: true },";

for ($user_profile_id = 1; $user_profile_id < 6; $user_profile_id++) {
    $sql_name    = "select * from  user_profile_list where user_profile_id=$user_profile_id";
    $result_name = mysql_query($sql_name);
    $row_name    = mysql_fetch_array($result_name);
	    echo " { text: '" . $row_name[user_profile_name] . "', datafield: '" . $row_name[user_profile_name] . "', width: 100, pinned: true,cellsalign: 'center', align: 'center', editable: false,cellclassname:cellclass
	
	},";
    
}
//读取用户胜任力信息
$sql_competency    = "select * from position_competency where position_id='$_POST[position_id]'  order by cixun";
$result_competency = mysql_query($sql_competency);
while ($row_competency = mysql_fetch_array($result_competency)) {
    $sql_competency_name    = "select * from competency_list where competency_id=$row_competency[competency_id]";
    $result_competency_name = mysql_query($sql_competency_name);
    $row_competency_name    = mysql_fetch_array($result_competency_name);
	if($row_competency[display]=="true"){
    //获取胜任力名称
    echo " { text: '" . $row_competency_name[competency_name] . "平均分', datafield: '" . $row_competency_name[competency_name] . "', width: 150,cellsalign: 'center', align: 'center',editable: false,
		aggregates: [{ '已审核平均分':
                          function () {
                          
                              return ";
    //获取子胜任力平均分
    $sql_avg    = "select AVG(score_competency.score) as average from user_profile,score_competency where score_competency.user_id=user_profile.user_id and user_profile.shenhe=1 and user_profile.position_id=$_POST[position_id] and score_competency.competency_id=$row_competency_name[competency_id]";
    $result_avg = mysql_query($sql_avg);
    $row_avg    = mysql_fetch_array($result_avg);
    echo number_format($row_avg[average], 1);
    
    echo "          ;}
                      },
           { '待审核平均分':
                          function () {
                          
                              return ";
    //获取子胜任力平均分
    $sql_avg_shenhe    = "select AVG(score_competency.score) as average from user_profile,score_competency where score_competency.user_id=user_profile.user_id and user_profile.shenhe=0 and user_profile.position_id=$_POST[position_id] and score_competency.competency_id=$row_competency_name[competency_id]";
    $result_avg_shenhe = mysql_query($sql_avg_shenhe);
    $row_avg_shenhe    = mysql_fetch_array($result_avg_shenhe);
    echo number_format($row_avg_shenhe[average], 1);
    
    echo "          ;}
                      }
                     ]
	
	
	},";
	}
    //向数组添加子胜任力
    $sql_subcompetency    = "select * from position_sub_competency where position_id='$_POST[position_id]' and competency_id=$row_competency[competency_id] order by cixun";
    $result_subcompetency = mysql_query($sql_subcompetency);
    while ($row_subcompetency = mysql_fetch_array($result_subcompetency)) {
        $sql_name    = "select * from sub_competency_list where sub_competency_id=$row_subcompetency[sub_competency_id]";
        $result_name = mysql_query($sql_name);
        $row_name    = mysql_fetch_array($result_name);
        echo " { text: '" . $row_name[sub_competency_name] . "', datafield: '" . $row_name[sub_competency_name] . "', width: 150, cellsalign: 'center', align: 'center',
				aggregates: [{ '已审核平均分':
                          function () {
                          
                              return ";
        //获取子胜任力平均分
        $sql_avg    = "select AVG(score.score) as average from user_profile,score where score.user_id=user_profile.user_id and user_profile.shenhe=1 and user_profile.position_id=$_POST[position_id] and score.sub_competency_id=$row_subcompetency[sub_competency_id]";
        $result_avg = mysql_query($sql_avg);
        $row_avg    = mysql_fetch_array($result_avg);
        echo number_format($row_avg[average], 1);
        
        echo "          ;}
                      },
           { '待审核平均分':
                          function () {
                          
                              return ";
        //获取子胜任力平均分
        $sql_avg_shenhe    = "select AVG(score.score) as average from user_profile,score where score.user_id=user_profile.user_id and user_profile.shenhe=0 and user_profile.position_id=$_POST[position_id] and score.sub_competency_id=$row_subcompetency[sub_competency_id]";
        $result_avg_shenhe = mysql_query($sql_avg_shenhe);
        $row_avg_shenhe    = mysql_fetch_array($result_avg_shenhe);
        echo number_format($row_avg_shenhe[average], 1);
        
        echo "          ;}
                      }
                     ]
					  
					  
					      },";
    }
}

echo "{ text: '审核', datafield: 'shenghe',  columntype: 'checkbox', width: 70,hidden: true  }";
echo "
              ]
            });        ";
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
		$('#deleteRows1').click(function () {
                var rowIndexes = $('#jqxgrid').jqxGrid('getselectedrowindexes');
                var rowIds = new Array();
                for (var i = 0; i < rowIndexes.length; i++) {
                    var currentId = $('#jqxgrid').jqxGrid('getrowid', rowIndexes[i]);
                    rowIds.push(currentId);
                };
                deletelol(rowIds);
                $('#jqxgrid').jqxGrid('clearselection');
            });
	       var listSource = [";
			
		for ($user_profile_id = 1; $user_profile_id < 6; $user_profile_id++) {
				$sql_name    = "select * from  user_profile_list where user_profile_id=$user_profile_id";
				$result_name = mysql_query($sql_name);
				$row_name    = mysql_fetch_array($result_name);
				 echo " { label: '".$row_name[user_profile_name]."', value: '".$row_name[user_profile_name]."', checked: true},";
		}
		//读取用户胜任力信息
		$sql_competency    = "select * from position_competency where position_id='$_POST[position_id]'  order by cixun";
		$result_competency = mysql_query($sql_competency);
		while ($row_competency = mysql_fetch_array($result_competency)) {
			$sql_competency_name    = "select * from competency_list where competency_id=$row_competency[competency_id]";
			$result_competency_name = mysql_query($sql_competency_name);
			$row_competency_name    = mysql_fetch_array($result_competency_name);
			//获取胜任力名称
			 echo " { label: '".$row_competency_name[competency_name]."', value: '".$row_competency_name[competency_name]."', checked: true},";
			//向数组添加子胜任力
			$sql_subcompetency    = "select * from position_sub_competency where position_id='$_POST[position_id]' and competency_id=$row_competency[competency_id] order by cixun";
			$result_subcompetency = mysql_query($sql_subcompetency);
			while ($row_subcompetency = mysql_fetch_array($result_subcompetency)) {
				$sql_name    = "select * from sub_competency_list where sub_competency_id=$row_subcompetency[sub_competency_id]";
				$result_name = mysql_query($sql_name);
				$row_name    = mysql_fetch_array($result_name);
				echo " { label: '".$row_name[sub_competency_name]."', value: '".$row_name[sub_competency_name]."', checked: true},";
			}
}

		echo "];
			$(\"#updaterowbutton\").on('click', function () {
					
							var selectedrowindex = $(\"#jqxgrid\").jqxGrid('getselectedrowindex');
							var rowscount = $(\"#jqxgrid\").jqxGrid('getdatainformation').rowscount;
							if (selectedrowindex >= 0 && selectedrowindex < rowscount) {
							
								$(\"#jqxgrid\").jqxGrid('updatebounddata','cells');
								$(\"#jqxgrid\").jqxGrid('ensurerowvisible', selectedrowindex);
							}
						});
			//点击隐藏
			$('#test').click(function(){
				$('#jqxlistbox').hide();
				$('#jqxgrid').jqxGrid('width', '100%');
			});
			$('#showbar').click(function(){
				$('#jqxlistbox').show();
				$('#jqxgrid').jqxGrid('width', '84%');
			});
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

	  
function saveState() {  
var theURL = \"save.php\"; 
var getState = $(\"#jqxgrid\").jqxGrid('savestate');  	  	  	
  var stateToSave = JSON.stringify(getState);
  	
  $.ajax({
  	type: \"POST\",										
	url: theURL,		
	data: { state_save: stateToSave },		 
	success: function(response) {
	

	}
});	
};
$(\"#savestate\").on('click', function () {
	saveState();
});

</script>";

?>
    </head>
     <style>     
        .green {
            color: black\9;
            background-color: #339966;
        }
        .yellow {
            color: black\9;
            background-color: #FFFFCC;
        }
        .red {
            color: black\9;
            background-color: #993300;
        }

        .green:not(.jqx-grid-cell-hover):not(.jqx-grid-cell-selected), .jqx-widget .green:not(.jqx-grid-cell-hover):not(.jqx-grid-cell-selected) {
            color: black;
            background-color: #339966;
        }
        .yellow:not(.jqx-grid-cell-hover):not(.jqx-grid-cell-selected), .jqx-widget .yellow:not(.jqx-grid-cell-hover):not(.jqx-grid-cell-selected) {
            color: black;
            background-color: #FFFFCC;
        }
        .red:not(.jqx-grid-cell-hover):not(.jqx-grid-cell-selected), .jqx-widget .red:not(.jqx-grid-cell-hover):not(.jqx-grid-cell-selected) {
            color: black;
            background-color: #993300;
        }
  </style>

   <div style="float: left;" id="jqxlistbox"></div>
   <div id="jqxgrid" style="margin-left:auto;margin-right:auto;float: left;"></div>
			 
   <div style="margin-top: 10px;margin-left:220px;">
	   <button id="deleteRows">审核选中数据</button>
	   <button id="deleteRows1">删除选中数据</button>
	   <button class="hide" id="showbar" type="button">显示选择栏</button>
	   <button class="hide" id="test" type="button">隐藏选择栏</button>
	   <button class="hide" id="updaterowbutton" type="button">更新选中栏</button>
	   <button class="hide" id="savestate" type="button">保存布局</button>
   </div>
			   

</body>
</html>
