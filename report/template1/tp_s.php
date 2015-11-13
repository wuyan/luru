<?php 	
include("conn.php"); 
ini_set("display_errors","Off");

?>
<chart>
	<axis_category  size='12'  font='楷体'/>
	<axis_value  min='0' size='11'  steps='5' max='10'  />
	
	<chart_border  top_thickness='0' bottom_thickness='2' left_thickness='1' right_thickness='0' />
	   <chart_data>
      <row>
         <null/>
		 <?php 
			$sql_position = "select * from user_profile where user_id=$_COOKIE[user_id]";
			$result_position =mysql_query($sql_position);
			$row_position=mysql_fetch_array($result_position);
			$sql_sub_n = "select * from report_position_display where position_id='$row_position[position_id]' and page_id='$_GET[pageid]'";
			$result_sub_n =mysql_query($sql_sub_n);
			$row_sub_n=mysql_fetch_array($result_sub_n);
			$tree = explode(',',$row_sub_n[subcompetency_id]); 
			for($index=0;$index<count($tree);$index++){ 
				$sql_sub_n1 = "select * from sub_competency_list where sub_competency_id=$tree[$index]";
				$result_sub_n1 =mysql_query($sql_sub_n1);
				$row_sub_n1=mysql_fetch_array($result_sub_n1);
		
				echo "<string>".$row_sub_n1[sub_competency_name]."</string>";
			}

		 ?>


      </row>
      <row>
         <string>Region A</string>
		
	
	
		 <?php 
	
			for($index=0;$index<count($tree);$index++){ 
				$result_score = mysql_query("select * from score where user_id='$_COOKIE[user_id]' and sub_competency_id=$tree[$index]");
				$row_score=mysql_fetch_array($result_score);
				echo "<number>".$row_score[score]."</number>";

			}
		 ?>
      </row>
   </chart_data>
	<chart_grid_h alpha='50' thickness='1' type='dashed' />
	<chart_label color='ffffff'  size='14' position='middle' />
	
	<chart_rect    x='50' y='150' width='650' height='250' />





	<draw>
		<text  alpha='100' size='15' x='<?php 
		$number=mb_strlen($row_sub_n[title], 'utf8');
		$total=320-$number*10;
		echo $total;
		?>' y='50' width='300' height='10' h_aligh='center' font="楷体"  color='000000'  v_align='borrom'  shadow1='shadow1'  bevel='bevel2'  ><?php  echo $row_sub_n[title];?>胜任力得分</text>
		 <line 
         
           x1='52' 
           y1='250' 
           x2='700'  
           y2='250' 
           line_color='00B050' 
           line_alpha='100'
           line_thickness='3'
           />

			<line 
         
           x1='52' 
           y1='275' 
           x2='700'  
           y2='275' 
           line_color='FF0000' 
           line_alpha='100'
           line_thickness='3'
           />
	</draw>

	
	<legend shadow='low' x='975' y='27' width='360' height='0' margin='5' fill_color='000066' fill_alpha='0' line_alpha='0' line_thickness='0' size='12' color='ffffff'  />

	<series_color>
		<color>95B3D7</color>	
		<color>95B3D7</color>	
		<color>95B3D7</color>	
		<color>95B3D7</color>	
		<color>95B3D7</color>	
	</series_color>
	<series set_gap='70' bar_gap='70' transfer='true' />
	
</chart>

 
