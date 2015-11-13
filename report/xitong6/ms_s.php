<?php 	include("conn.php"); ?>
<chart>
	<axis_category   size='12' font='楷体' />
	<axis_value  min='0' size='11'  steps='5' max='10'  />
	
	<chart_border  top_thickness='0' bottom_thickness='2' left_thickness='1' right_thickness='0' />
	   <chart_data>
      <row>
         <null/>
         	<string>高附加值&#x000A;的员工</string>
			<string>自我学习&#x000A;和发展</string>
			<string>战略思考力</string>
			<string>时间管理</string>
			<string>团队精神</string>
			<string>影响力</string>
			<string>责任感</string>
			<string>稳定性</string>
			<string>坚韧性</string>

      </row>
      <row>
         <string>Region A</string>
			<number></number>
			<number></number>
			<number></number>
			<number></number>
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
		<text  alpha='100' size='15' x='300' y='50' width='300' height='10' h_aligh='center' font="楷体"  color='000000'  v_align='borrom'  shadow1='shadow1'  bevel='bevel2'  >自我管理胜任力得分</text>
		<rect layer='background' x='0' y='0' width='750' height='450' fill_color='ffffff' />
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

	
	<legend layout='hide'  />

	<series_color>
		<color>95B3D7</color>	
		<color>95B3D7</color>	
		<color>95B3D7</color>	
		<color>95B3D7</color>
		<color>95B3D7</color>	
		<color>95B3D7</color>
		<color>95B3D7</color>	
		<color>95B3D7</color>	
		<color>95B3D7</color>	
		<color>95B3D7</color>	
	</series_color>
	<series set_gap='60' bar_gap='70' transfer='true' />
	
</chart>

 
