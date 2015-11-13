<?php

	include("../conn.php");
	$result = mysql_query("select * from report where id='$_GET[user_id]'");
	$row=mysql_fetch_array($result);


?>
<chart>
	<axis_category shadow='shadow2' size='13' color='4e627c' alpha='85' font="宋体"    />
	<axis_ticks value_ticks='' category_ticks=''  />
	<axis_value  size='18' max='10' color='557392' alpha='100' steps='5'  min='0' line-thickness='0' />
	
	<chart_border bottom_thickness='0' left_thickness='0' />
	<chart_data>
		<row>
			<null/>
			<string>故障分析</string>
			<string>业务数据分析</string>
			<string>事故车处理</string>
			<string>突发事件处理</string>
		
		
		</row>
		<row>
			<string>个人</string>
			 <number><?php echo $row[故障分析];?></number>
			<number><?php echo $row[业务数据分析];?></number>
			<number><?php echo $row[事故车处理];?></number>
			<number><?php echo $row[突发事件处理];?></number>
		
		
		
		</row>
		<row>
			<string>全国平均</string>
			<number>
	 <?php 
   
	$sql_avg ="select avg(`故障分析`) as average from report";
	$result_avg=mysql_query($sql_avg);
	$row_avg=mysql_fetch_array($result_avg);

	echo $row_avg[average];


   ?>
			
			</number>
			<number>
	<?php 
   
	$sql_avg ="select avg(`业务数据分析`) as average from report";
	$result_avg=mysql_query($sql_avg);
	$row_avg=mysql_fetch_array($result_avg);

	echo $row_avg[average];


   ?>
			
			
			</number>
			<number>
	<?php 
   
	$sql_avg ="select avg(`事故车处理`) as average from report";
	$result_avg=mysql_query($sql_avg);
	$row_avg=mysql_fetch_array($result_avg);

	echo $row_avg[average];


   ?>
   </number>
			<number>
				<?php 
   
	$sql_avg ="select avg(`突发事件处理`) as average from report";
	$result_avg=mysql_query($sql_avg);
	$row_avg=mysql_fetch_array($result_avg);

	echo $row_avg[average];


   ?>
			</number>
		
			
			
		</row>
<row>
			<string>标杆</string>
			<number>
			   <?php

	$sql_max ="select * from report  order by  `故障分析` desc limit 1";
	$result_max=mysql_query($sql_max);
	$row_max=mysql_fetch_array($result_max);

	echo $row_max[故障分析];

   ?>
			
			</number>
			<number>
	 <?php

	$sql_max ="select * from report  order by  `业务数据分析` desc limit 1";
	$result_max=mysql_query($sql_max);
	$row_max=mysql_fetch_array($result_max);

	echo $row_max[业务数据分析];

   ?>
   </number>
			<number>

	 <?php

	$sql_max ="select * from report  order by  `事故车处理` desc limit 1";
	$result_max=mysql_query($sql_max);
	$row_max=mysql_fetch_array($result_max);

	echo $row_max[事故车处理];

   ?>			
			
			
			</number>
			<number>
			 <?php

	$sql_max ="select * from report  order by  `突发事件处理` desc limit 1";
	$result_max=mysql_query($sql_max);
	$row_max=mysql_fetch_array($result_max);

	echo $row_max[突发事件处理];

   ?>			</number>
		
			
			
		</row>


	</chart_data>
	<chart_grid_h alpha='30' color='000000' thickness='1' type='dashed'  />
	<chart_grid_v alpha='10' color='000000' thickness='20' type='solid'  />
	<chart_pref point_shape='circle' point_size='0' fill_shape='true' grid='circular' type='line'  />


<chart_rect bevel='bg' shadow='high' x='235' y='130' width='270' height='270'  positive_color='5e5e5e' positive_alpha='10' />
	
	<chart_type>polar</chart_type>
	
	<draw>
	<text shadow='high'   alpha='100' size='22' x='220' y='-25' width='300' height='75' h_align='center' v_align='bottom'  font="宋体" color="557392">工作技能</text>
	

	 <circle layer='background'
           
         
           x='370' 
           y='265' 
           radius='180'  
           fill_color='5e5e5e' 
           fill_alpha='0' 
           line_color='5e5e5e' 
           line_alpha='20'
           line_thickness='40'
         
           />



	</draw>
	
	
	<legend shadow='shadow2' x='230' y='470' width='300' height='40' margin='3' fill_alpha='0' layout='horizontal' bullet='square' size='12' color='4e627c' alpha='75'  font="宋体" />
	
	<series_color>
		<color>880000</color>
		<color>000000</color>
		<color>9BBB59</color>
	</series_color>
	
</chart>

 
