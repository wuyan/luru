<?php
include("conn.php");


function competency_ld($competency, $score){
	

	$sql= mysql_query("select * from sub_competency_list where sub_competency_id='$competency' ");
	$result = mysql_fetch_array($sql);


	if ( $score>=0 and $score <= 4){
	
		return $result['dec_w'];
	};
	if ( $score>=5 and $score < 7){
	
		return $result['dec_a'];
	};
	if ( $score>=7 and $score <= 10){
	
		return $result['dec_s'];
	};

}




function competency_zh($competency, $score){
	
	
	
	$sql= mysql_query("select * from sub_competency_list where sub_competency_id='$competency' ");
	$result = mysql_fetch_array($sql);


	if ( $score>=0 and $score <= 4){
	
		return $result['weakness'];
	};
	if ( $score>=5 and $score < 7){
	
		return $result['average'];
	};
	if ( $score>=7 and $score <= 10){
	
		return $result['strength'];
	};

}

function colorscore($score){
		

	if ( $score>=0 and $score <= 4){
	
		return "880000";
	};
	if ( $score>=5 and $score < 7){
	
		return "E1BD23";
	};
	if ( $score>=7 and $score <= 10){
	
		return "9BBB59";
	};

}


function sysSortArray
($ArrayData,$KeyName1,$SortOrder1 = "SORT_ASC",$SortType1 = "SORT_REGULAR") {     if(!is_array($ArrayData))     {         return $ArrayData;     }            $ArgCount = func_num_args();         for($I = 1;$I < $ArgCount;$I ++)     {         $Arg = func_get_arg($I);         if(!eregi("SORT",$Arg))         {             $KeyNameList[] = $Arg;             $SortRule[]    = '$'.$Arg;         }         else        {             $SortRule[]    = $Arg;         }     }          foreach($ArrayData AS $Key => $Info)     {         foreach($KeyNameList AS $KeyName)         {             ${$KeyName}[$Key] = $Info[$KeyName];         }     }          $EvalString = 'array_multisort('.join(",",$SortRule).',$ArrayData);';     eval ($EvalString);     return $ArrayData; } 


?>