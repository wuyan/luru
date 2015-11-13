<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php
session_start();
error_reporting(0);

//导入运行库
include('configure/conn.php');
include('lib.php');
//获取上传文件信息
if (is_uploaded_file($_FILES['upfile']['tmp_name'])) {
    $upfile     = $_FILES["upfile"];
    $name       = $upfile["name"];
    $type       = $upfile["type"];
    $size       = $upfile["size"];
    $tmp_name   = $upfile["tmp_name"];
    $error      = $upfile["error"];
    $ips        = explode(".", $name);
    $postion_id = $_POST[position_id];
    //检查数据库中是否以上传过EXCEL
    $sql_cha    = mysql_query("select * from `excel_list` where `excel_name`='$name'");
    $row_cha    = mysql_fetch_array($sql_cha);
    if ($row_cha[excel_name] == $name) {
        echo "<script>alert('文件名有重复');location.href='upload.php';</script>";
    } else {
        $str = "$ips[0]";
        if ($ips[1] == 'xls') {
            if ($error == '0') {
                //将上传文件复制到uploadfile文件夹
                $updatename = iconv("UTF-8", "gbk", "uploadfile/" . $name);
                move_uploaded_file($tmp_name, $updatename);
                require_once 'reader.php';
                $name_gbk = iconv("UTF-8", "gbk", $name);
                $data     = new Spreadsheet_Excel_Reader();
                //设置数据编码
                $data->setOutputEncoding('utf-8');
                //读取文件
                $data->read("uploadfile/$name_gbk");
				$now=date('Y-m-d H:i',time());

				//将excel名传到数据库中
                $sql_fujian = mysql_query("insert into `excel_list` (`excel_name`,`uploadtime`) values ('$name','$now')");
                $excel_id   = mysql_insert_id();


                //通过岗位ID得到项目ID
                $sql_position    = "select * from position_list where position_id='$postion_id'";
                $result_position = mysql_query($sql_position);
                $row_position    = mysql_fetch_array($result_position);
               
                //获取上传文件胜任力模型
                $sub_competency_id_all = "";
                $index_shengren        = 1;
                $sql                   = "select * from project_profile where project_id='$row_position[project_id]' order by cixun";
                $result                = mysql_query($sql);
                while ($row = mysql_fetch_array($result)) {
                    $index_shengren = $index_shengren + 1;
                }
                $sql_competency    = "select * from position_competency where position_id='$postion_id'  order by cixun ";
                $result_competency = mysql_query($sql_competency);
                while ($row_competency = mysql_fetch_array($result_competency)) {
                    $index_shengren = $index_shengren + 1;
                    $sql    = "select * from position_sub_competency where position_id='$postion_id' and competency_id=$row_competency[competency_id] order by cixun";
                    $result = mysql_query($sql);
                    while ($row = mysql_fetch_array($result)) {
                        //获取到excel中的子胜任力名称
                        $sub_competency_name   = $data->sheets[0]['cells'][1][$index_shengren];
                        //把获取到的子胜作力名称转化成子胜作力名称ID
                        $sql_sub_n             = "select * from sub_competency_list where sub_competency_name='$sub_competency_name'";
                        $result_sub_n          = mysql_query($sql_sub_n);
                        $row_sub_n             = mysql_fetch_array($result_sub_n);
                        $index_shengren        = $index_shengren + 1;
                        //获取所有子胜任力ID
                        $sub_competency_id_all = $sub_competency_id_all . $row_sub_n[sub_competency_id];
                    }
                }
                
				
                //判断胜任力模型是否与岗位一致
                $index1  = 1;
                $sql1    = "select * from project_profile where project_id='$row_position[project_id]' order by cixun";
                $result1 = mysql_query($sql1);
                while ($row1 = mysql_fetch_array($result1)) {
                    if ($row1[user_profile_id] == 2) {
                        $sql_position1    = "select count(*) as total from position_list where position_name='" . $data->sheets[0]['cells'][2][$index1] . "' and project_id=$_POST[project_id] and subcompetencyidall='$sub_competency_id_all'";
                        $result_position1 = mysql_query($sql_position1);
                        $row_position1    = mysql_fetch_array($result_position1);
                        if ($row_position1[total] == 0) {
                            exit("岗位名称与胜任力模型不匹配");
                        }
                        
                    } else {
                        $index1 = $index1 + 1;
                    }
                    
                }

	
                
                for ($i = 2; $i <= $data->sheets[0]['numRows']; $i++) {
                    
                    //建立参试者信息
                    mysql_query("INSERT INTO `user_profile` (`shenhe`,`excel_id`) VALUES('0','$excel_id')");
                    //获取参试者信息
                    $sql_user = mysql_query("select max(user_id) as user_id_i_a from user_profile");
                    $rs_user  = mysql_fetch_array($sql_user);
                    /*
                    获取用户字段并导入用户字段信息
                    */
                    
                    $index  = 1;
                    //通过项目ID获取到用户字段信息
                    $sql    = "select * from project_profile where project_id='$row_position[project_id]' order by cixun";
                    $result = mysql_query($sql);
                    while ($row = mysql_fetch_array($result)) {
                        if ($row[user_profile_id] == 1) {
                            mysql_query("INSERT INTO `user_basic` (`user_id`,`user_info_id`,`user_info_value`) VALUES(
						'" . $rs_user[user_id_i_a] . "',
						'" . $row[user_profile_id] . "',
						'" . $data->sheets[0]['cells'][$i][$index] . "'
						)");
                            $name = $data->sheets[0]['cells'][$i][$index];
                            $index = $index + 1;
                        }
                        
                        //判断用户字段是否为“岗位”，如果“是”，则把岗位名称转成岗位ID导入到数据库中
                        elseif ($row[user_profile_id] == 2) {
                            $sql_position    = "select * from position_list where position_name='" . $data->sheets[0]['cells'][$i][$index] . "' and project_id=$_POST[project_id] and subcompetencyidall='$sub_competency_id_all'";
                            $result_position = mysql_query($sql_position);
                            $row_position    = mysql_fetch_array($result_position);
                            
                            mysql_query("INSERT INTO `user_basic` (`user_id`,`user_info_id`,`user_info_value`) VALUES(
						'" . $rs_user[user_id_i_a] . "',
						'" . $row[user_profile_id] . "',
						'" . $row_position[position_id] . "'
						)");
                            
                            $position_id = $row_position[position_id];
                            $index = $index + 1;
                        } elseif ($row[user_profile_id] == 3) {
                            mysql_query("INSERT INTO `user_basic` (`user_id`,`user_info_id`,`user_info_value`) VALUES(
						'" . $rs_user[user_id_i_a] . "',
						'" . $row[user_profile_id] . "',
						'" . $data->sheets[0]['cells'][$i][$index] . "'
						)");
                            
                            $ceping_date = $data->sheets[0]['cells'][$i][$index];
                            $index = $index + 1;
                            
                        } elseif ($row[user_profile_id] == 4) {
                            mysql_query("INSERT INTO `user_basic` (`user_id`,`user_info_id`,`user_info_value`) VALUES(
						'" . $rs_user[user_id_i_a] . "',
						'" . $row[user_profile_id] . "',
						'" . $data->sheets[0]['cells'][$i][$index] . "'
						)");
                            $ceping_person = $data->sheets[0]['cells'][$i][$index];
                            $index = $index + 1;
                            
                        }
                        
                        else {
                            
                            //向数据库写入EXCEL中用户字段信息
                            mysql_query("INSERT INTO `user_basic` (`user_id`,`user_info_id`,`user_info_value`) VALUES(
						'" . $rs_user[user_id_i_a] . "',
						'" . $row[user_profile_id] . "',
						'" . $data->sheets[0]['cells'][$i][$index] . "'
						)");
                            $index = $index + 1;
                        }
                    }
                    
                    
                    //设置记数器
                    $sql_competency    = "select * from position_competency where position_id='$row_position[position_id]'  order by cixun";
                    $result_competency = mysql_query($sql_competency);
                    while ($row_competency = mysql_fetch_array($result_competency)) {
                        
                        mysql_query("INSERT INTO `score_competency` (`user_id`,`position_id`,`competency_id`,`score`) VALUES(
						'" . $rs_user[user_id_i_a] . "',
						'" . $postion_id . "',
						'" . $row_competency[competency_id] . "',
						'" . $data->sheets[0]['cells'][$i][$index] . "'
						)");
                            $index = $index + 1;
                       
                        //向数据库添加用户子胜任力分数
                        $sql    = "select * from position_sub_competency where position_id='$postion_id' and competency_id=$row_competency[competency_id] order by cixun";
                        $result = mysql_query($sql);
                        while ($row = mysql_fetch_array($result)) {
                            mysql_query("INSERT INTO `score` (`user_id`,`position_id`,`sub_competency_id`,`score`) VALUES(
						'" . $rs_user[user_id_i_a] . "',
						'" . $postion_id . "',
						'" . $row[sub_competency_id] . "',
						'" . $data->sheets[0]['cells'][$i][$index] . "'
						)");
                            
                            $index = $index + 1;
                            
                        }
                    }
                    
                    //删除重复数据
					$sql_chongfu ="select * from user_profile where `name`='$name' and `position_id`='$position_id' and `ceping_person`='$ceping_person' and `ceping_date`='$ceping_date' and shenhe=0";
					$result_chongfu = mysql_query($sql_chongfu);
					while ($row_chongfu = mysql_fetch_array($result_chongfu)) {
                    $result = mysql_query("delete from user_basic where user_id=$row_chongfu[user_id]");
                    $result = mysql_query("delete from user_profile where user_id=$row_chongfu[user_id]");
                    $result = mysql_query("delete from score where user_id=$row_chongfu[user_id]");
                    $result = mysql_query("delete from score_competency where user_id=$row_chongfu[user_id]");
					}
					$sql_gengxin="update user_profile set `name`='$name',`position_id`='$position_id' ,`ceping_person`='$ceping_person',ceping_date='$ceping_date'   where `user_id`='$rs_user[user_id_i_a]'";
					mysql_query($sql_gengxin);

           
                }
				 $sql_log = mysql_query("insert into `log` (`user_id`,`operation_time`,`type`,`excel_id`,`set_id`) values ('$_COOKIE[id]','$now','1','$excel_id','0')");
		

                echo "<script>alert('上传成功！');location.href='upload.php';</script>";
            }
        } else {
            echo "<script>alert('只能使用xls格式！');location.href='upload.php';</script>";
        }
    }
}
?>