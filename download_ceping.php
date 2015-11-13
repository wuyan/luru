<?php
/**
 * PHPExcel
 *
 * Copyright (C) 2006 - 2014 PHPExcel
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * @category   PHPExcel
 * @package    PHPExcel
 * @copyright  Copyright (c) 2006 - 2014 PHPExcel (http://www.codeplex.com/PHPExcel)
 * @license    http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt	LGPL
 * @version    1.8.0, 2014-03-02
 */

/** Error reporting */
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
date_default_timezone_set('Europe/London');
include('configure/conn.php');

if (PHP_SAPI == 'cli')
    die('This example should only be run from a Web Browser');

/** Include PHPExcel */
require_once('lib/PHPExcel.php');


// Create new PHPExcel object
$objPHPExcel = new PHPExcel();

// Set document properties
$objPHPExcel->getProperties()->setCreator("JAMES")->setLastModifiedBy("JAMES")->setTitle("Office 2007 XLSX Test Document")->setSubject("Office 2007 XLSX Test Document")->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")->setKeywords("office 2007 openxml php")->setCategory("Test result file");

//新建数组
$rowArray        = array();
//通过岗位ID得到项目ID
$sql_position    = "select * from position_list where position_id='$_POST[position_id]'";
$result_position = mysql_query($sql_position);
$row_position    = mysql_fetch_array($result_position);


//通过项目ID获取到用户字段信息
$sql    = "select * from project_profile where project_id='$row_position[project_id]' order by cixun";
$result = mysql_query($sql);
while ($row = mysql_fetch_array($result)) {
    $sql_name    = "select * from user_profile_list where user_profile_id=$row[user_profile_id]";
    $result_name = mysql_query($sql_name);
    $row_name    = mysql_fetch_array($result_name);
    //向数组添加用户字段信息
	$customers[0][$row_name[user_profile_name]]=$row_name[user_profile_name];
}

//获取岗位下的胜任力与子胜任力
$sql_competency    = "select * from position_competency where position_id='$_POST[position_id]'  order by cixun";
$result_competency = mysql_query($sql_competency);
while ($row_competency = mysql_fetch_array($result_competency)) {
    if ($row_competency[display] == "true") {
        //向数组添加胜任力
        $sql_competency_name    = "select * from competency_list where competency_id=$row_competency[competency_id]";
        $result_competency_name = mysql_query($sql_competency_name);
        $row_competency_name    = mysql_fetch_array($result_competency_name);
		$customers[0][$row_competency_name[competency_name]]=$row_competency_name[competency_name];
    }
    //向数组添加子胜任力
    $sql    = "select * from position_sub_competency where position_id='$_POST[position_id]' and competency_id=$row_competency[competency_id] order by cixun";
    $result = mysql_query($sql);
    while ($row = mysql_fetch_array($result)) {
        
        $sql_name    = "select * from sub_competency_list where sub_competency_id=$row[sub_competency_id]";
        $result_name = mysql_query($sql_name);
        $row_name    = mysql_fetch_array($result_name);
        
		$customers[0][$row_name[sub_competency_name]]=$row_name[sub_competency_name];
    }
}





//通过岗位ID得到项目ID
$sql_position = "select project_id from position_list where position_id='$_POST[position_id]'";
$result_position = mysql_query($sql_position);
$row_position = mysql_fetch_array($result_position);
//拼接MYSQL语句读取用户基本信息
$mysql_init = "select ";
$sql = "select * from project_profile where project_id='$row_position[project_id]' order by cixun";
$result = mysql_query($sql);
while ($row = mysql_fetch_array($result)) {
	$sql_name = "select * from user_profile_list where user_profile_id=$row[user_profile_id]";
	$result_name = mysql_query($sql_name);
	$row_name = mysql_fetch_array($result_name);
	$mysql = 'max(if(user_basic_ceping.user_info_id=' . $row[user_profile_id] . ',user_basic_ceping.user_info_value,null)) ' . $row_name[user_profile_name] . ',';
	$mysql_init = $mysql_init . $mysql;
}
$i = 1;
$mysql_init = $mysql_init . "user_profile_ceping.user_id from user_basic_ceping,user_profile_ceping where user_profile_ceping.position_id=$_POST[position_id]  and 
user_profile_ceping.user_id=user_basic_ceping.user_id and user_profile_ceping.shenhe=1  group by user_id ";
$result_name = mysql_query($mysql_init);

while ($row_name = mysql_fetch_array($result_name)) {

		//通过项目ID获取到用户字段信息
	$sql_profile     = "select * from project_profile where project_id='$row_position[project_id]' order by cixun";
	$result_profile  = mysql_query($sql_profile);
	while ($row_profile = mysql_fetch_array($result_profile)) {
		$sql_name1          = "select * from user_profile_list where user_profile_id=$row_profile[user_profile_id]";
		$result_name1       = mysql_query($sql_name1);
		$row_name1          = mysql_fetch_array($result_name1);
		$user_profile_name = $row_name1['user_profile_name'];
	

		 if($row_profile[user_profile_id]==2){
			$sql_position_name = "select * from position_list where position_id='$row_name[$user_profile_name]'";
			$result_position_name = mysql_query($sql_position_name);	
			$row_posititon_name= mysql_fetch_array($result_position_name);
			$customers[$i][$user_profile_name] = $row_posititon_name['position_name'];
		}else{

		$customers[$i][$user_profile_name]=$row_name[$user_profile_name];
		}
		}
	$i++;
}    

$mysql_init2 = "select ";
$sql_competency = "select * from position_competency where position_id='$_POST[position_id]'  order by cixun";
$result_competency = mysql_query($sql_competency);
while ($row_competency = mysql_fetch_array($result_competency)) {
	$sql_name = "select * from competency_list where competency_id=$row_competency[competency_id]";
	$result_name = mysql_query($sql_name);
	$row_name = mysql_fetch_array($result_name);
	$mysql2 = 'max(if(score_competency_ceping.competency_id=' . $row_competency[competency_id] . ',score_competency_ceping.score,null)) \'' . $row_name[competency_name] . '\',';
	$mysql_init2 = $mysql_init2 . $mysql2;
}
$i = 1;
$mysql_init2 = $mysql_init2 . "user_profile_ceping.user_id from score_competency_ceping,user_profile_ceping where user_profile_ceping.position_id=$_POST[position_id] group by user_id ";
$result_name = mysql_query($mysql_init2);
while ($row_name = mysql_fetch_array($result_name)) {
	//读取用户胜任力信息
	$sql_competency = "select * from position_competency where position_id='$_POST[position_id]'  order by cixun";
	$result_competency = mysql_query($sql_competency);
	while ($row_competency = mysql_fetch_array($result_competency)) {

			$sql_name1 = "select * from competency_list where competency_id=$row_competency[competency_id]";
			$result_name1 = mysql_query($sql_name1);
			$row_name1 = mysql_fetch_array($result_name1);
			$customers[$i][$row_name1[competency_name]] = round($row_name[$row_name1[competency_name]],2);

	   
	}
	$i++;
}

$mysql_init1 = "select ";
$sql_competency = "select * from position_sub_competency where position_id='$_POST[position_id]'  order by cixun";
$result_competency = mysql_query($sql_competency);
while ($row_competency = mysql_fetch_array($result_competency)) {
	$sql_name = "select * from sub_competency_list where sub_competency_id=$row_competency[sub_competency_id]";
	$result_name = mysql_query($sql_name);
	$row_name = mysql_fetch_array($result_name);
	$mysql1 = 'max(if(score_ceping.sub_competency_id=' . $row_competency[sub_competency_id] . ',score_ceping.score,null)) \'' . $row_name[sub_competency_name] . '\',';
	$mysql_init1 = $mysql_init1 . $mysql1;
}
$i = 1;
$mysql_init1 = $mysql_init1 . "user_profile_ceping.user_id from score_ceping,user_profile_ceping where user_profile_ceping.position_id=$_POST[position_id] and user_profile_ceping.user_id=score_ceping.user_id and user_profile_ceping.shenhe=1  group by user_id ";
$result_name = mysql_query($mysql_init1);
while ($row_name = mysql_fetch_array($result_name)) {
	//读取用户胜任力信息
	$sql_competency = "select * from position_competency where position_id='$_POST[position_id]'  order by cixun";
	$result_competency = mysql_query($sql_competency);
	while ($row_competency = mysql_fetch_array($result_competency)) {
		//向数组添加子胜任力
		$sql_subcompetency = "select * from position_sub_competency where position_id='$_POST[position_id]' and competency_id=$row_competency[competency_id] order by cixun";
		$result_subcompetency = mysql_query($sql_subcompetency);
		while ($row_subcompetency = mysql_fetch_array($result_subcompetency)) {
			$sql_name1 = "select * from sub_competency_list where sub_competency_id=$row_subcompetency[sub_competency_id]";
			$result_name1 = mysql_query($sql_name1);
			$row_name1 = mysql_fetch_array($result_name1);
			$customers[$i][$row_name1[sub_competency_name]] = round($row_name[$row_name1[sub_competency_name]],2);
		}
	}
	$i++;
}



$first_names = array_column($customers, '姓名');
print_r($first_names);

$objPHPExcel->getActiveSheet()->fromArray($customers, // The data to set
    NULL, // Array values with this value will not be set
    'A1' // Top left coordinate of the worksheet range where
    
//    we want to set these values (default is A1)
    );

// Rename worksheet
$objPHPExcel->getActiveSheet()->setTitle('Template');


// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);


// Redirect output to a client’s web browser (Excel5)
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="Template.xls"');
header('Cache-Control: max-age=0');
// If you're serving to IE 9, then the following may be needed
header('Cache-Control: max-age=1');

// If you're serving to IE over SSL, then the following may be needed
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
header('Pragma: public'); // HTTP/1.0

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('php://output');
exit;
?>
