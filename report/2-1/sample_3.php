

<?php
include 'charts.php';

$chart[ 'axis_category' ] = array ('size'=>12, 'color'=>"000000", 'alpha'=>10, 'orientation'=>"circular" ); 

$chart[ 'axis_ticks' ] = array ( 'value_ticks'=>true, 'category_ticks'=>true, 'major_color'=>"444444",'minor_color'      =>  "000000",'minor_thickness'  =>  1, 
 'major_thickness'=>2, 'position'         =>  "centered", 
'minor_count'=>0 );

$chart[ 'axis_value' ] = array ( 'max'=>10, 'size'=>12, 'steps'=>5,'alpha'=>90, 'color'=>"ffffff", 'show_min'=>false, 'background_color'=>"446688" );

$chart[ 'chart_border' ] = array ( 'bottom_thickness'=>2, 'left_thickness'=>2, 'color'=>"444444" );



$chart[ 'chart_data' ] = array ( 

array (  '',"",  "",  "","",""), 

array ( "全国平均",$_GET[mp_1_avg],$_GET[mp_2_avg],$_GET[mp_3_avg],$_GET[mp_4_avg],$_GET[mp_5_avg]), 
array ("个人",$_GET[mp_1],$_GET[mp_2],    $_GET[mp_3]    ,$_GET[mp_4],$_GET[mp_5] ));





$chart[ 'chart_grid_h' ] = array ( 'alpha'=>20, 'color'=>"000000", 'thickness'=>1, 'type'=>"solid" );
$chart[ 'chart_grid_v' ] = array ( 'alpha'=>70, 'color'=>"000000", 'thickness'=>1, 'type'=>"solid" );

$chart[ 'chart_pref' ] = array ( 'point_shape'=>"none", 'point_size'=>0, 'fill_shape'=>false, 'line_thickness'=>2, 'type'=>"line", 'grid'=>"circular" );
$chart[ 'chart_rect' ] = array ( 'x'=>37, 'y'=>140, 'width'=>350, 'height'=>200, 'positive_color'=>"000000",'positive_alpha'=>10 );


$chart[ 'chart_type' ] = "polar"; 

$chart[ 'draw' ] = array ( 


array ( 'font'=>"宋体",'type'=>"text", 'color'=>"557392", 'alpha'=>25, 'rotation'=>0, 'size'=>30, 'x'=>-110, 'y'=>-260, 'width'=>390, 'height'=>295, 'text'=>"流程管理", 'h_align'=>"right", 'v_align'=>"bottom" ),


array ( 'font'=>"FF_SIMSUN",'type'=>"text", 'color'=>"557392", 'alpha'=>25, 'rotation'=>0, 'size'=>12, 'x'=>-130, 'y'=>-170, 'width'=>390, 'height'=>295, 'text'=>"整体绩效管理", 'h_align'=>"right", 'v_align'=>"bottom" ),

array ( 'font'=>"FF_SIMSUN",'type'=>"text", 'color'=>"557392", 'alpha'=>25, 'rotation'=>0, 'size'=>12, 'x'=>-20, 'y'=>-90, 'width'=>390, 'height'=>295, 'text'=>"公司业绩", 'h_align'=>"right", 'v_align'=>"bottom" ),

array ( 'font'=>"FF_SIMSUN",'type'=>"text", 'color'=>"557392", 'alpha'=>25, 'rotation'=>0, 'size'=>12, 'x'=>-20, 'y'=>-75, 'width'=>390, 'height'=>295, 'text'=>"增长管理", 'h_align'=>"right", 'v_align'=>"bottom" ),

array ( 'font'=>"FF_SIMSUN",'type'=>"text", 'color'=>"557392", 'alpha'=>25, 'rotation'=>0, 'size'=>12, 'x'=>-30, 'y'=>50, 'width'=>390, 'height'=>295, 'text'=>"客户满意度管理", 'h_align'=>"right", 'v_align'=>"bottom" ),

array ( 'font'=>"FF_SIMSUN",'type'=>"text", 'color'=>"557392", 'alpha'=>25, 'rotation'=>0, 'size'=>12, 'x'=>-220, 'y'=>50, 'width'=>390, 'height'=>295, 'text'=>"员工满意度管理", 'h_align'=>"right", 'v_align'=>"bottom" ),


array ( 'font'=>"FF_SIMSUN",'type'=>"text", 'color'=>"557392", 'alpha'=>25, 'rotation'=>0, 'size'=>12, 'x'=>-275, 'y'=>-90, 'width'=>390, 'height'=>295, 'text'=>"利益相关者", 'h_align'=>"right", 'v_align'=>"bottom" ),

array ( 'font'=>"FF_SIMSUN",'type'=>"text", 'color'=>"557392", 'alpha'=>25, 'rotation'=>0, 'size'=>12, 'x'=>-275, 'y'=>-75, 'width'=>390, 'height'=>295, 'text'=>"满意度管理", 'h_align'=>"right", 'v_align'=>"bottom" ),

                           array ( 'type'=>"circle", 'layer'=>"background", 'x'=>210, 'y'=>240, 'radius'=>170,'fill_alpha'=>0, 'line_color'=>"000000", 'line_alpha'=>20, 'line_thickness'=>40) ,

 array ( 'type'=>"circle", 'layer'=>"background", 'x'=>212, 'y'=>240, 'radius'=>60,'fill_alpha'=>0, 'line_color'=>"000000", 'line_alpha'=>20, 'line_thickness'=>19) 


);

$chart[ 'legend_label' ] = array ('font'=>"FF_SIMSUN",  'layout'=>"horizontal", 'bullet'=>"line", 'size'=>12, 'color'=>"557392", 'alpha'=>80 );
$chart[ 'legend_rect' ] = array ( 'x'=>130, 'y'=>430, 'width'=>220, 'height'=>70, 'margin'=>5, 'fill_alpha'=>0 );

$chart[ 'series_color' ] = array ( "557392", "ff4400", "88ffff", "88ff00" );

SendChartData ( $chart );
?>