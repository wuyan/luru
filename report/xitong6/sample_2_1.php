﻿<?php

	include("../conn.php");
	$result = mysql_query("select * from report where id='$_GET[user_id]'");
	$row=mysql_fetch_array($result);



?>
<chart> 
	<axis_category size='12'  color='557392' skip='0' orientation='horizontal' alpha='90' margin='false'/><!--横标字体-->
	<axis_ticks value_ticks='false' category_ticks='true' major_thickness='2' minor_thickness='1' minor_count='1' major_color='000000' minor_color='222222' position='inside' /><!--设置横标--->
	<axis_value  min='0'  size='12' color='557392' alpha='90' steps='5' prefix=''  suffix='' decimals='0' separator='' show_min='false' /><!--左边字体-->
	<chart_border  left_thickness='1' bottom_thickness='1' color='557392' /><!---->
	<chart_data>
		<row>
			<null/>
			<string>0</string>
			<string>1</string>
			<string>2</string>
			<string>3</string>
			<string>4</string>
			<string>5</string>
			<string>6</string>
			<string>7</string>
			<string>8</string>
			<string>9</string>
			<string>10</string>
		</row>
		
		<row>
			<string>分数分</string>
			<number <?php if (round($row['总平均分'])== 0){echo "note='0'";}	?>>
			<?php 
			$result = mysql_query("select * from report where round(`总平均分`, 0)='0'");
			echo mysql_num_rows($result);
			?>
			</number><!----note=''--->
			<number tooltip='2' <?php if (round($row['总平均分'])== 1){echo "note='0'";}	?> >
			<?php 
			$result = mysql_query("select * from report where round(`总平均分`, 0)='1'");
			echo mysql_num_rows($result);
			?>
			</number><!----note=''--->
			<number tooltip='3' <?php if (round($row['总平均分'])== 2){echo "note='0'";}	?> >
			<?php 
			$result = mysql_query("select * from report where round(`总平均分`, 0)='2'");
			echo mysql_num_rows($result);
			?>
			</number>
			<number tooltip='4'  <?php if (round($row['总平均分'])== 3){echo "note='0'";}	?>>
			<?php 
			$result = mysql_query("select * from report where round(`总平均分`, 0)='3'");
			echo mysql_num_rows($result);
			?>
			</number><!----note=''--->
			<number tooltip='5' <?php if (round($row['总平均分'])== 4){echo "note='0'";}	?> >
			<?php 
			$result = mysql_query("select * from report where round(`总平均分`, 0)='4'");
			echo mysql_num_rows($result);
			?>
			</number><!----note=''--->
			<number tooltip='10' <?php if (round($row['总平均分'])== 5){echo "note='0'";}	?>>
			<?php 
			$result = mysql_query("select * from report where round(`总平均分`, 0)='5'");
			echo mysql_num_rows($result);
			?>
			</number><!----note=''--->
			<number tooltip='8' <?php if (round($row['总平均分'])== 6){echo "note='0'";}	?> >
			<?php 
			$result = mysql_query("select * from report where round(`总平均分`, 0)='6'");
			echo mysql_num_rows($result);
			?>
			</number><!----note=''--->
			<number tooltip='5'  <?php if (round($row['总平均分'])== 7){echo "note='0'";}	?>>
			<?php 
			$result = mysql_query("select * from report where round(`总平均分`, 0)='7'");
			echo mysql_num_rows($result);
			?>
			</number><!----note=''--->
			<number tooltip='3' <?php if (round($row['总平均分'])== 8){echo "note='0'";}	?> >
			<?php 
			$result = mysql_query("select * from report where round(`总平均分`, 0)='8'");
			echo mysql_num_rows($result);
			?>
			</number><!----note=''--->
			<number tooltip='2'<?php if (round($row['总平均分'])== 9){echo "note='0'";}	?> >
			<?php 
			$result = mysql_query("select * from report where round(`总平均分`, 0)='9'");
			echo mysql_num_rows($result);
			?>
			</number><!----note=''--->
			<number tooltip='1' <?php if (round($row['总平均分'])== 10){echo "note='0'";}	?> ><?php 
			$result = mysql_query("select * from report where round(`总平均分`, 0)='10'");
			echo mysql_num_rows($result);
			?></number><!----note=''--->
			
			
		</row>
	
	</chart_data>
	<chart_grid_h alpha='10' thickness='1' color='000000' type='solid' /><!---横线的设置-->
	<chart_grid_v alpha='10' thickness='1' color='000000' type='solid' /><!---竖线的设置-->
	<chart_guide horizontal='true' vertical='true' thickness='1' alpha='25' type='dashed' text_h_alpha='0' text_v_alpha='0' />
	<chart_note type='ballon' size='0' color='000000' alpha='70' x='0' y='0' background_color_1='fb0b0b' background_color_2='fb0b0b' background_alpha='90'/><!--原点字体-->
	<chart_pref line_thickness='2' point_shape='circle' point_size='17' fill_shape='true' /><!---标线设置-->
	<chart_rect x='65' y='35' width='610' height='200' positive_color='000000' positive_alpha='6' negative_color='ffffff' negative_alpha='30' shadow='high' /><!--背景大小颜色-->
	<chart_transition type='slide_left' delay='.5' duration='0' order='series' /><!--线的速度-->
	<chart_type>Line</chart_type>
	
	<draw>
		<rect layer='background' x='0' y='0' width='750' height='200' fill_color='ffffff' /><!---大背景颜色-->
		<text shadow='high' transition='dissolve' delay='0' duration='0.5' color='000000' alpha='200' size='12' font="FF_SIMSUN" x='-20' y='230' width='400' height='75' h_align='center' v_align='bottom'>综合分数分布</text><!--上面的几个打字-->
		<text shadow='high' transition='dissolve' delay='0' duration='0.5' color='000000' alpha='200' size='50' font="FF_SIMSUN" x='-90' y='225' width='400' height='75' h_align='center' v_align='bottom' >_</text><!--上面的几个打字-->


		<text shadow='high' transition='dissolve' delay='0' duration='0.5' color='000000' alpha='200' size='12' font="FF_SIMSUN" x='360' y='230' width='400' height='75' h_align='center' v_align='bottom'>个人成绩</text><!--上面的几个打字-->
		<text shadow='high' transition='dissolve' delay='0' duration='0.5' color='FB0B0B' alpha='200' size='50' font="FF_SIMSUN" x='305' y='225' width='400' height='75' h_align='center' v_align='bottom' >_</text><!--上面的几个打字-->
		
	</draw>
	<filter>
		<shadow id='low' distance='2' angle='45' alpha='20' blurX='5' blurY='5' />
		<shadow id='medium' distance='2' angle='45' alpha='40' blurX='7' blurY='7' />
		<shadow id='high' distance='5' angle='45' alpha='25' blurX='10' blurY='10' />
		<bevel id='bg' angle='45' blurX='15' blurY='15' distance='5' highlightAlpha='25' shadowAlpha='50' type='outer' />
		<bevel id='note' angle='45' blurX='10' blurY='10' distance='3' highlightAlpha='60' shadowAlpha='15' />
	</filter>
   
	<legend shadow='low' transition='dissolve' delay='0' duration='0.5' x='1260' y='0' width='424' height='5' layout='horizontal' margin='5' bullet='line' size='12' color='66819D' alpha='100' fill_color='66819D' fill_alpha='1000' line_color='000000' line_alpha='0' line_thickness='0' font="FF_SIMSUN"/><!--顶上字体背景颜色位置-->
	
	<link>
		<area x='380' y='225' width='20' height='15' target='toggle_fullscreen' tooltip='Screen Mode' />
	</link>
	<tooltip color='ffffff' alpha='90' background_color_1='8888FF' background_alpha='90' shadow='medium' />
    
    <context_menu save_as_bmp='true' save_as_jpeg='true' save_as_png='true' /> 
    
	<series_color>
		
		
		<color>000000</color>     <!---557392--->
	</series_color>
	<series_explode>
		
		<number>60</number>                                                                                                            <!--线的宽度-->
	</series_explode>
</chart>

 
