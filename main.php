<?php
include('configure/conn.php');
include('lib/function.php');
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
                <h5>当前位置： 网站首页</h5>
            </div>
            <div class="content">
                <div class="pubTitle">
                    <h1><font>首页</font></h1>
                </div>
				<form action="uploadmanager.php" method="post" enctype="multipart/form-data">
                <div class="pubCon">
             


                    </form>
                </div>
            </div>
        </div>
       

            </div>
        </div>
        <div class="clear"></div>
    </div>

    <div class="footer">
        版权所有 <font>Copyright © 2009-2015</font> 上海市睿晶咨询有限公司
    </div>
</body>

</html>