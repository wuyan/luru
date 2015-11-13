<div class="divTop">
        <div class="top"><img style="margin-top:5px;width:500px;" src="images/logo.png" />
        </div>
    </div>
    <!-- 导航 -->
    <div class="divNav">
        <div class="nav">
            <ul>
			<li><a href="main.php" >首页</a></li>
			<?php
				$sql = "select * from  user_authority where user_id=$_COOKIE[authority] group by mainpage_id";
				$result =mysql_query($sql);
				while ($row=mysql_fetch_array($result)){
			
					$sql_sub_n = "select * from mainpage_list where mainpage_id=$row[mainpage_id]";
					$result_sub_n =mysql_query($sql_sub_n);
					$row_sub_n=mysql_fetch_array($result_sub_n);

					echo '<li><a href="#" >'.$row_sub_n[mainpage_name].'</a>';
					echo '<ul>';
					$sql_sub = "select * from user_authority where mainpage_id=$row[mainpage_id] and user_id=$_COOKIE[authority] ORDER BY page_id ASC";
					$result_sub =mysql_query($sql_sub);
					while ($row_sub=mysql_fetch_array($result_sub)){

					$sql_sub_n = "select * from page_list where page_id=$row_sub[page_id]";
					$result_sub_n =mysql_query($sql_sub_n);
					$row_sub_n=mysql_fetch_array($result_sub_n);
						echo '<li><a href="'.$row_sub_n[page_source].'" >'.$row_sub_n[page_name].'</a></li>';
					}
					echo '</ul>';
					echo '</li>';
				}
			?>
		   <li><a href="logout.php" >注销</a></li>
            </ul>
        </div>
    </div>