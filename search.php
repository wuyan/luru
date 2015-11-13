<?php
include('configure/conn.php');
include('lib/function.php');
include('cookie.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>睿晶咨询</title>
	<?php $xajax->printJavascript('lib'); ?> 
    <link href="css/style.css" rel="stylesheet" type="text/css" />


</head>

<body>
<?php
	//调取NAV栏
    include("nav.php");
?>
    <div class="container">
        <!-- left -->
        <div class="left">
            <div class="xuanzeBox">
                <h5>当前位置： 网站首页 > 数据搜索</h5>
            </div>
            <div class="content">
                <div class="pubTitle">
                    <h1><font>数据搜索</font></h1>
                </div>
                <div class="pubCon">
                     <form action="search_person.php" method="post">
                        <h2>STEP1：选择用户字段</h2>
                        <select  size="1" class="selectdiv"  name='user_profile_id'>
							<?php
								$sql_group = "select * from user_profile_list";
								$result_group =mysql_query($sql_group);
								while ($row_group=mysql_fetch_array($result_group)){
								
								echo "<option value='".$row_group[user_profile_id]."'>".$row_group[user_profile_name]."</option>";
								}
								
							?>
                        </select>


                        <h2>Step2：输入搜索值</h2>
						<input name='search_value' type="text" class="int3" style="width:270px;" />
                        <div class="divupdata">
							<input type="hidden" name="shenhe" value="0"/>
                            <input name="上传" type="submit" value="查找" class="uploadbutton" />

                        </div>



                    </form>
                </div>
            </div>
        </div>
        <?php  include("navright.php");?>
        <div class="clear"></div>
    </div>

    <div class="footer">
        版权所有 <font>Copyright © 2009-2015</font> 上海市睿晶咨询有限公司
    </div>
</body>

</html>