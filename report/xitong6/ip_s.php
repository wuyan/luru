<?php 	include("conn.php"); ?>
<chart>
	<axis_category   size='12' font='楷体'/>
	<axis_value  min='0' size='11'  steps='5' max='10'  />
	
	<chart_border  top_thickness='0' bottom_thickness='2' left_thickness='1' right_thickness='0' />
	   <chart_data>
      <row>
         <null/>
         	<string>激发个人与团队</string>
			<string>绩效管理</string>
			<string>培训/辅导/发展他人</string>
			<string>促进双向沟通</string>
			<string>发展肯定机制</string>
      </row>
      <row>
         <string>Region A</string>
     	    <number></number>
			<number></number>
			<number></number>
			<number></number>
			<number></number>
      </row>
   </chart_data>
	<chart_grid_h alpha='50' thickness='1' type='dashed' />
	<chart_label color='ffffff'  size='14' position='middle' />
	
	<chart_rect    x='50' y='150' width='650' height='250' />





	<draw>
		<text  alpha='100' size='15' x='300' y='50' width='300' height='10' h_aligh='center' font="楷体"  color='000000'  v_align='borrom'  shadow1='shadow1'  bevel='bevel2'  >人员激励胜任力得分</text>
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

	
	<legend shadow='low' x='975' y='27' width='360' height='0' margin='5' fill_color='000066' fill_alpha='0' line_alpha='0' line_thickness='0' size='15' color='ffffff'  />

	<series_color>
		<color>95B3D7</color>	
		<color>95B3D7</color>	
		<color>95B3D7</color>	
		<color>95B3D7</color>	
		<color>95B3D7</color>	
	</series_color>
	<series set_gap='70' bar_gap='70' transfer='true' />
	
</chart>

 
