<?php 	include("conn.php"); ?>

<chart>
       <axis_category size='12' color='000000' alpha='80'  />

    <chart_border top_thickness='0'
                 bottom_thickness='2'
                 left_thickness='2'
                 right_thickness='0'
                 color='5e5e5e'
                 /> 
	<chart_label color='000000' alpha='90' size='11' position='middle' decimals='1' />

   <axis_ticks value_ticks='' category_ticks=''/>


    <axis_value   
             
            steps='5'  
            prefix='' 
            suffix='' 
            decimals=''
			max='10'
			min='0'
            decimal_char='.'  
            separator='' 
            show_min='true' 
            font='arial' 
            bold='true' 
            size='11' 
            color='000000' 
            alpha='80'
            />

          <!--显示下方刻度长度（10,20）   增加显示了80的刻度位置-->
   

		<chart_pref line_thickness='2' point_shape='circle' fill_shape='true' /> 

        
          <char_note type='flag'
		       color='000000'
			 alpha='90'
			 background_color='8888ff'
				 background_alpha='90'
			 />
               

	<chart_data>
	      
		   <row>
			<null/>
			<string>流程管理</string>
			<string>资源运用</string>
			<string>人员激励</string>
			<string>团队合作</string>
			<string>自我管理</string>
		
           
		</row>
		<row>
			<string >个人</string>
			<number><?php 
			$result_score = mysql_query("select * from score_competency where user_id='$_GET[id]' and competency_id=2");
			$row_score=mysql_fetch_array($result_score);
			echo $row_score[score];
			?></number>
			<number><?php 
			$result_score = mysql_query("select * from score_competency where user_id='$_GET[id]' and competency_id=3");
			$row_score=mysql_fetch_array($result_score);
			echo $row_score[score];
			?></number>
			<number><?php 
			$result_score = mysql_query("select * from score_competency where user_id='$_GET[id]' and competency_id=4");
			$row_score=mysql_fetch_array($result_score);
			echo $row_score[score];
			?></number>
			<number><?php 
			$result_score = mysql_query("select * from score_competency where user_id='$_GET[id]' and competency_id=5");
			$row_score=mysql_fetch_array($result_score);
			echo $row_score[score];
			?></number>
			<number><?php 
			$result_score = mysql_query("select * from score_competency where user_id='$_GET[id]' and competency_id=6");
			$row_score=mysql_fetch_array($result_score);
			echo $row_score[score];
			?></number>
		</row>
		<row>
			<string>平均</string>
			<number>
			<?php
				$sql_avg ="select avg(`score`) as average from score_competency where competency_id=2 and position_id=17";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo $row_avg[average];
			  ?>

			
			</number>
			<number>
						<?php
				$sql_avg ="select avg(`score`) as average from score_competency where  competency_id=3 and position_id=17";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo $row_avg[average];
			  ?>
			</number>
			<number>
			<?php
				$sql_avg ="select avg(`score`) as average from score_competency where competency_id=4 and position_id=17";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo $row_avg[average];
			  ?>
			</number>
			<number>
						<?php
				$sql_avg ="select avg(`score`) as average from score_competency where  competency_id=5 and position_id=17";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo $row_avg[average];
			  ?>
			
			</number>
			<number>

						<?php
				$sql_avg ="select avg(`score`) as average from score_competency where  competency_id=6 and position_id=17";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo $row_avg[average];
			  ?>
			</number>
				
		</row>
		<row>
			<string >标杆</string>
			<number>
			<?php
				$sql_max ="select * from  score_competency where  competency_id=2 and position_id=17 order by  `score` desc limit 1";
				$result_max=mysql_query($sql_max);
				$row_max=mysql_fetch_array($result_max);
				echo $row_max[score];

			?>
			</number>
			<number>
			<?php
				$sql_max ="select * from score_competency   where  competency_id=3 and position_id=17 order by  `score` desc limit 1";
				$result_max=mysql_query($sql_max);
				$row_max=mysql_fetch_array($result_max);
				echo $row_max[score];

			?>
			</number>
			<number>
			<?php
				$sql_max ="select * from score_competency   where competency_id=4 and position_id=17 order by  `score` desc limit 1";
				$result_max=mysql_query($sql_max);
				$row_max=mysql_fetch_array($result_max);
				echo $row_max[score];
			?>
			
			</number>
			<number>
			<?php
				$sql_max ="select * from score_competency   where  competency_id=5 and position_id=17 order by  `score` desc limit 1";
				$result_max=mysql_query($sql_max);
				$row_max=mysql_fetch_array($result_max);
				echo $row_max[score];
			?>
			</number>
			<number>
			<?php
				$sql_max ="select * from score_competency  where competency_id=6 and position_id=17 order by  `score` desc limit 1";
				$result_max=mysql_query($sql_max);
				$row_max=mysql_fetch_array($result_max);
				echo $row_max[score];
			?>
			</number>

		</row>
		
	</chart_data>

	
  	<legend shadow='low' x='975' y='27' width='360' height='0' margin='5' fill_color='000066' fill_alpha='0' line_alpha='0' line_thickness='0' size='14' color='ffffff' alpha='0' />

	<chart_rect x='50' y='50' width='635' height='200' font="宋体"  size='15'  positive_color='ffffff' negative_color='ffffff' positive_alpha='1' negative_alpha='20'  corner_tl='5'   blurx='100' blury='100'
            corner_tr='5'
            corner_br='5'
            hide=''
            corner_bl='0'/>
     
	<draw>
		 <text  alpha='100' size='15' x='330' y='0' width='300' height='10' h_aligh='center' font="楷体"  color='000000'  v_align='borrom'  shadow1='shadow1'  bevel='bevel2'  >胜任力得分</text>
		<text  alpha='80' size='12' x='90' y='255' width='100' height='10' h_aligh='center' font="楷体"  color='000000'  v_align='borrom' >流程管理</text>
		<text  alpha='80' size='12' x='215' y='255' width='100' height='10' h_aligh='center' font="楷体"  color='000000'  v_align='borrom' >资源运用</text>
		<text  alpha='80' size='12' x='340' y='255' width='100' height='10' h_aligh='center' font="楷体"  color='000000'  v_align='borrom' >人员激励</text>
		<text  alpha='80' size='12' x='470' y='255' width='100' height='10' h_aligh='center' font="楷体"  color='000000'  v_align='borrom' >团队合作</text>
		<text  alpha='80' size='12' x='600' y='255' width='100' height='10' h_aligh='center' font="楷体"  color='000000'  v_align='borrom' >自我管理</text>
    </draw>

	<series_color>
		<color>95B3D7</color>
		<color>7F7F7F</color>
        <color>000000</color>
	</series_color>
	     <!--柱状体颜色-->


<chart_grid_h thickness='2' color='000000'  type='dashed' alpha='50' /> 
     
<chart_type>
	<string>column</string>
	<string>line</string>
	<string>line</string>
</chart_type>


<series set_gap='60' bar_gap='0' transfer='true' />
</chart>
