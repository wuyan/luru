<?php
error_reporting(0);
session_start();

include('../configure/conn.php');
require_once '../lib//excel_reader2.php';
require_once '../lib/PHPExcel.php';
 
    $phpExcel = new PHPExcel();
	
	//写excel表头
	   $phpExcel->setActiveSheetIndex(0)
	        ->setCellValue('A1', "id")
			->setCellValue('B1', "姓名")
			->setCellValue('C1', "部门")
			->setCellValue('D1', "网络代码")
			->setCellValue('E1', "岗位")
			->setCellValue('F1', "测评日期");
    $sql = 'select * from `user_profile`';
    $result = mysql_query($sql);
    $i = 2;
    while (($row=mysql_fetch_assoc($result)) != null){
        // 将值填充到cell中

		$sql_name = "select * from  user_basic where user_id =$row[user_id] and user_info_id=1";
		$result_name =mysql_query($sql_name);
		$row_name=mysql_fetch_array($result_name);


		$sql_position = "select * from  user_basic where user_id =$row[user_id] and user_info_id=2";
		$result_position =mysql_query($sql_position);
		$row_position=mysql_fetch_array($result_position);


		$sql_position = "select * from  user_basic where user_id =$row[user_id] and user_info_id=2";
		$result_position =mysql_query($sql_position);
		$row_position=mysql_fetch_array($result_position);
        $phpExcel->setActiveSheetIndex(0)
			->setCellValue('A'.$i, $row[user_id])
			->setCellValue('B'.$i, $row_name[user_info_value])
			->setCellValue('C'.$i, $row_position[user_info_value]);

        $i++;
    }
 
$objWriter = PHPExcel_IOFactory::createWriter($phpExcel, 'Excel5');
$objWriter->save(str_replace('.php', '.xls', __FILE__));



$data = new Spreadsheet_Excel_Reader("manager.xls",true,"utf-8"); 


?>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>

<style>
table.excel {
	border-style:ridge;
	border-width:1;
	border-collapse:collapse;
	font-family:sans-serif;
	font-size:12px;
}
table.excel thead th, table.excel tbody th {
	background:#CCCCCC;
	border-style:ridge;
	border-width:1;
	text-align: center;
	vertical-align:bottom;
}
table.excel tbody th {
	text-align:center;
	width:20px;
}
table.excel tbody td {
	vertical-align:bottom;
}
table.excel tbody td {
    padding: 0 3px;
	border: 1px solid #EEEEEE;
}
</style>
</head>

<body>
<form method="post" action="xitong6/multiple.php" >
	

<?php echo $data->dump(true,true); ?>
<br><br>
<input type="submit" value="提交">
</form>
</body>
</html>
