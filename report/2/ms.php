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
			<string>忠诚度</string>
			<string>时间管理</string>
			<string>说服力</string>
			<string>自我学习\r与发展</string>
			<string>形象礼仪</string>
			<string>责任心</string>
			<string>团队合作</string>
			<string>稳定性</string>
			<string>坚韧性</string>
			<string>注重细节</string>
			<string>灵活性</string>
		
		
		</row>
		<row>
			<string>个人</string>
		    <number><?php echo $row[忠诚度];?></number>
			<number><?php echo $row[时间管理];?></number>
			<number><?php echo $row[说服力];?></number>
			<number><?php echo $row[自我学习];?></number>
			<number><?php echo $row[形象与礼仪];?></number>
			<number><?php echo $row[责任心];?></number>
			<number><?php echo $row[团队合作];?></number>
			<number><?php echo $row[稳定性];?></number>
			<number><?php echo $row[坚韧性];?></number>
			<number><?php echo $row[注重细节];?></number>
		    <number><?php echo $row[灵活性];?></number>
		</row>
		<row>
			<string>全国平均</string>
			 <number>
	<?php 
   
	$sql_avg ="select avg(`忠诚度`) as average from report";
	$result_avg=mysql_query($sql_avg);
	$row_avg=mysql_fetch_array($result_avg);

	echo $row_avg[average];


   ?>
   </number>
			<number>
	<?php 
   
	$sql_avg ="select avg(`时间管理`) as average from report";
	$result_avg=mysql_query($sql_avg);
	$row_avg=mysql_fetch_array($result_avg);

	echo $row_avg[average];


   ?></number>
			<number>
	<?php 
   
	$sql_avg ="select avg(`说服力`) as average from report";
	$result_avg=mysql_query($sql_avg);
	$row_avg=mysql_fetch_array($result_avg);

	echo $row_avg[average];


   ?>		
			
			
			</number>
			<number>
	<?php 
   
	$sql_avg ="select avg(`自我学习`) as average from report";
	$result_avg=mysql_query($sql_avg);
	$row_avg=mysql_fetch_array($result_avg);

	echo $row_avg[average];


   ?>		
			
			
			</number>
			<number>
			
	<?php 
   
	$sql_avg ="select avg(`形象与礼仪`) as average from report";
	$result_avg=mysql_query($sql_avg);
	$row_avg=mysql_fetch_array($result_avg);

	echo $row_avg[average];


   ?>		
			</number>
			<number>
	<?php 
   
	$sql_avg ="select avg(`责任心`) as average from report";
	$result_avg=mysql_query($sql_avg);
	$row_avg=mysql_fetch_array($result_avg);

	echo $row_avg[average];


   ?>		
   </number>
			<number>
		<?php 
   
	$sql_avg ="select avg(`团队合作`) as average from report";
	$result_avg=mysql_query($sql_avg);
	$row_avg=mysql_fetch_array($result_avg);

	echo $row_avg[average];


   ?>
			
			
			</number>
			<number>
	<?php 
   
	$sql_avg ="select avg(`稳定性`) as average from report";
	$result_avg=mysql_query($sql_avg);
	$row_avg=mysql_fetch_array($result_avg);

	echo $row_avg[average];


   ?>
			</number>
			<number>
	<?php 
   
	$sql_avg ="select avg(`坚韧性`) as average from report";
	$result_avg=mysql_query($sql_avg);
	$row_avg=mysql_fetch_array($result_avg);

	echo $row_avg[average];


   ?>
   </number>
			<number>
	<?php 
   
	$sql_avg ="select avg(`注重细节`) as average from report";
	$result_avg=mysql_query($sql_avg);
	$row_avg=mysql_fetch_array($result_avg);

	echo $row_avg[average];


   ?>		
			</number>
			<number>
	<?php 
   
	$sql_avg ="select avg(`灵活性`) as average from report";
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

	$sql_max ="select * from report  order by  `忠诚度` desc limit 1";
	$result_max=mysql_query($sql_max);
	$row_max=mysql_fetch_array($result_max);

	echo $row_max[忠诚度];

   ?>
   </number>
			<number>	
	<?php

	$sql_max ="select * from report  order by  `时间管理` desc limit 1";
	$result_max=mysql_query($sql_max);
	$row_max=mysql_fetch_array($result_max);

	echo $row_max[时间管理];

   ?>
   </number>
			<number>
	<?php

	$sql_max ="select * from report  order by  `说服力` desc limit 1";
	$result_max=mysql_query($sql_max);
	$row_max=mysql_fetch_array($result_max);

	echo $row_max[说服力];

   ?>
   </number>
			<number>
	<?php

	$sql_max ="select * from report  order by  `自我学习` desc limit 1";
	$result_max=mysql_query($sql_max);
	$row_max=mysql_fetch_array($result_max);

	echo $row_max[自我学习];

   ?>		
			
			</number>
			<number>
	<?php

	$sql_max ="select * from report  order by  `形象与礼仪` desc limit 1";
	$result_max=mysql_query($sql_max);
	$row_max=mysql_fetch_array($result_max);

	echo $row_max[形象与礼仪];

   ?>	
			
			</number>
			<number>
	<?php

	$sql_max ="select * from report  order by  `责任心` desc limit 1";
	$result_max=mysql_query($sql_max);
	$row_max=mysql_fetch_array($result_max);

	echo $row_max[责任心];

   ?>			
			
			
			
			</number>
			<number>
	<?php

	$sql_max ="select * from report  order by  `团队合作` desc limit 1";
	$result_max=mysql_query($sql_max);
	$row_max=mysql_fetch_array($result_max);

	echo $row_max[团队合作];

   ?>			
					
			
			
			</number>
			<number>
	<?php

	$sql_max ="select * from report  order by  `稳定性` desc limit 1";
	$result_max=mysql_query($sql_max);
	$row_max=mysql_fetch_array($result_max);

	echo $row_max[稳定性];

   ?>	
			</number>
			<number>
	<?php

	$sql_max ="select * from report  order by  `坚韧性` desc limit 1";
	$result_max=mysql_query($sql_max);
	$row_max=mysql_fetch_array($result_max);

	echo $row_max[坚韧性];

   ?>	
			</number>
			<number>
	<?php

	$sql_max ="select * from report  order by  `注重细节` desc limit 1";
	$result_max=mysql_query($sql_max);
	$row_max=mysql_fetch_array($result_max);

	echo $row_max[注重细节];

   ?>			
			</number>
			<number>
	<?php

	$sql_max ="select * from report  order by  `灵活性` desc limit 1";
	$result_max=mysql_query($sql_max);
	$row_max=mysql_fetch_array($result_max);

	echo $row_max[灵活性];

   ?>		
			
			
			</number>
			
			
		</row>


	</chart_data>
	<chart_grid_h alpha='30' color='000000' thickness='1' type='dashed'  />
	<chart_grid_v alpha='10' color='000000' thickness='20' type='solid'  />
	<chart_pref point_shape='circle' point_size='0' fill_shape='true' grid='circular' type='line'  />


<chart_rect bevel='bg' shadow='high' x='235' y='130' width='270' height='270'  positive_color='5e5e5e' positive_alpha='10' />
	
	<chart_type>polar</chart_type>
	
	<draw>
	<text shadow='high'  alpha='100' size='22' x='170' y='-25' width='400' height='75' h_align='center' v_align='bottom'  font="宋体" color="557392">自我管理
</text>
	

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

 
