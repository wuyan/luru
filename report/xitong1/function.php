<?php
include("conn.php");


function competency_ld($competency, $score){
	

	$sql= mysql_query("select * from sub_competency_list where sub_competency_id='$competency' ");
	$result = mysql_fetch_array($sql);


	if ( $score>0 and $score <=1){
	
		return $result['summary1'];
	};
	if ( $score>1 and $score <=2){
	
		return $result['summary2'];
	};
	if ( $score>2 and $score <=3){
	
		return $result['summary3'];
	};
	if ( $score>3 and $score <=4){
	
		return $result['summary4'];
	};
	if ( $score>4 and $score <=5){
	
		return $result['summary5'];
	};
	if ( $score>5 and $score <=6){
	
		return $result['summary6'];
	};
	if ( $score>6 and $score <=7){
	
		return $result['summary7'];
	};
	if ( $score>7 and $score <=8){
	
		return $result['summary8'];
	};
	if ( $score>8 and $score <=9){
	
		return $result['summary9'];
	};
	if ( $score>9 and $score <=10){
	
		return $result['summary10'];
	};


}




function competency_zh($competency, $score){
	
	
	
	$sql= mysql_query("select * from report_sub_competency where sub_competency_id='$competency' and report_id=3 ");
	$result = mysql_fetch_array($sql);


	if ( $score>0 and $score <=1){
	
		return $result['growth1'];
	};
	if ( $score>1 and $score <=2){
	
		return $result['growth2'];
	};
	if ( $score>2 and $score <=3){
	
		return $result['growth3'];
	};
	if ( $score>3 and $score <=4){
	
		return $result['growth4'];
	};
	if ( $score>4 and $score <=5){
	
		return $result['growth5'];
	};
	if ( $score>5 and $score <=6){
	
		return $result['growth6'];
	};
	if ( $score>6 and $score <=7){
	
		return $result['growth7'];
	};
	if ( $score>7 and $score <=8){
	
		return $result['growth8'];
	};
	if ( $score>8 and $score <=9){
	
		return $result['growth9'];
	};
	if ( $score>9 and $score <=10){
	
		return $result['growth10'];
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