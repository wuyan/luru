        <!-- right -->
        <div class="right">
            <div class="fudongBox">
                <!-- RJtitle -->
                <div class="RJtitle">
                    <p>
                        <span><img src="images/icon01.png" /></span>
                        <font>
						<?php 
						$curfile = basename($_SERVER['PHP_SELF']); 
						$parent_name=mysql_query("select * from page_list where page_source='$curfile'");
						$row_parent=mysql_fetch_array($parent_name);

						$main_name=mysql_query("select * from mainpage_list where mainpage_id='$row_parent[mainpage_id]'");
						$row_main=mysql_fetch_array($main_name);

						echo $row_main[mainpage_name];

						?>
					</font>
                    </p>
                </div>
				<?php 
				$sql = "select * from  user_authority where user_id=$_COOKIE[authority] and  mainpage_id=$row_parent[mainpage_id] group by page_id";
				$result =mysql_query($sql);
				while ($row=mysql_fetch_array($result)){

					$parent_page=mysql_query("select * from page_list where page_id='$row[page_id]'");
					$row_page=mysql_fetch_array($parent_page);
					

					if($row[page_id]==$row_parent[page_id]){

						echo '<div class="mode">
						  <a href="'.$row_page[page_source].'">
                        <span><img src="images/icon02.png" /></span>
                        <font>'.$row_page[page_name].'</font>
                    </a>
                </div>';

								
					}else{
								
						echo '    <div class="guanli">
                    <a href="'.$row_page[page_source].'">
                        <span><img src="images/icon03.png" /></span>
                        <font>'.$row_page[page_name].'</font>
                    </a>
                </div>';
								
								}

						}


				?>
		

            </div>
        </div>