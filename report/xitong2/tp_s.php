<?php 	include("conn.php"); ?>
<chart>
	<axis_category   size='12'  />
	<axis_value  min='0' size='11'  steps='5' max='10'  />
	
	<chart_border  top_thickness='0' bottom_thickness='2' left_thickness='1' right_thickness='0' />
	   <chart_data>
      <row>
         <null/>
         	<string>管理执行与优先次序&#x0A;Prioritize & Manage Execution</string>
			<string>发展内部客户满意&#x0A;Develop Internal Customer Satisfaction</string>
      </row>
      <row>
         <string>Region A</string>
     	    <number><?php 
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=58");
			$row_score=mysql_fetch_array($result_score);
			echo $row_score[score];
			?></number>
			<number><?php 
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=59");
			$row_score=mysql_fetch_array($result_score);
			echo $row_score[score];
			?></number>
      </row>
   </chart_data>
	<chart_grid_h alpha='50' thickness='1' type='dashed' />
	<chart_label color='ffffff'  size='14' position='middle' />
	
	<chart_rect    x='50' y='150' width='650' height='250' />





	<draw>
		<text  alpha='100' size='15' x='300' y='50' width='300' height='10' h_aligh='center' font="楷体"  color='000000'  v_align='borrom'  shadow1='shadow1'  bevel='bevel2'  >流程管理胜任力得分</text>
		<text  alpha='100' size='15' x='280' y='70' width='300' height='10' h_aligh='center' font="arial"  color='000000'  v_align='borrom'>Score of Managing Process</text>
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
			<text  alpha='80' size='12' x='155' y='405' width='150' height='10' h_aligh='center' font="楷体"  color='000000'  v_align='borrom' >管理执行与优先次序</text>
			<text  alpha='80' size='12' x='490' y='405' width='150' height='10' h_aligh='center' font="楷体"  color='000000'  v_align='borrom' >发展内部客户满意</text>

	</draw>

	
	<legend shadow='low' x='975' y='27' width='360' height='0' margin='5' fill_color='000066' fill_alpha='0' line_alpha='0' line_thickness='0' size='12' color='ffffff'  />

	<series_color>
		<color>95B3D7</color>	
		<color>95B3D7</color>	
		<color>95B3D7</color>	
	</series_color>
	<series set_gap='80' bar_gap='70' transfer='true' />
	
</chart>

 
