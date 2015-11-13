	<div id="top">
			<div class="logo3">
				<img src="tu/<?php 
				$sql_logo = "select * from report_position where report_id=$_GET[report_id]";
				$result_logo =mysql_query($sql_logo);
				$row_logo=mysql_fetch_array($result_logo);

				$sql_trans = "select * from report_logo where logo_id=$row_logo[logo_id]";
				$result_trans =mysql_query($sql_trans);
				$row_trans=mysql_fetch_array($result_trans);
				echo $row_trans[logo_source]

				?>" alt="" height="65" border="0" style="margin-left:<?php echo $row_trans[margin] ?>px;"/>
			</div>
			<div class="line"></div>

	</div>