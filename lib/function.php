<?php

require_once ("xajax_core/xajax.inc.php");
$xajax = new xajax();
$xajax->registerFunction("menu");
$xajax->registerFunction("menu_position");
$xajax->registerFunction("menu_excel");
$xajax->registerFunction("menu_ceping");
function menu($mo_id)
{

	
	$objResponse = new xajaxResponse();

	$result=mysql_query("select * from project_list where group_id ='$mo_id' order by project_id DESC");
	$a='';
	while ($row=mysql_fetch_array($result)){
	
	$a= "<option value=\"".$row[project_id]."\">"."$row[project_name]"."</option>".$a;
	
	}
	$a="<option  ></option>".$a;
	$objResponse->assign("project_name", "innerHTML", "$a");

	return $objResponse;

}

function menu_position($mo_id)
{

	
	$objResponse = new xajaxResponse();

	$result=mysql_query("select * from position_list where project_id ='$mo_id' order by position_id DESC");
	$a='';
	while ($row=mysql_fetch_array($result)){
	
	$a= "<option value=\"".$row[position_id]."\">"."$row[display_name]"."</option>".$a;
	
	}
	$a="<option  ></option>".$a;
	$objResponse->assign("position_name", "innerHTML", "$a");

	return $objResponse;

}


function menu_excel($mo_id)
{

	
	$objResponse = new xajaxResponse();

		
	$a='<font><a  href="exportExcel.php?id='.$mo_id.'" class="xblue">下载岗位模板数据</a></font>';
	$objResponse->assign("exporttemplate", "innerHTML", "$a");

	return $objResponse;

}
function menu_ceping($mo_id)
{

	
	$objResponse = new xajaxResponse();

		
	$a='<font><a  href="exporttemplate.php?id='.$mo_id.'" class="xblue">下载岗位模板数据</a></font>';
	$objResponse->assign("exporttemplate", "innerHTML", "$a");

	return $objResponse;

}


$xajax->processRequest();
?>
