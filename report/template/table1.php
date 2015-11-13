			<table width="106%" height="60" style="text-align:center;border-collapse:collapse;border:1px solid #F2F2F2;" cellpadding="0" cellspacing="0">
				<tbody>
				<tr height="60">
					<td width="8%" style="border:1px solid #F2F2F2;position:relative;">
			<?php 
				if($score == $avg and $score == 1)
				{
				 echo '<img src="tu/合并1.jpg" width="10"/>';
				}
				elseif ($score==$max and $score==1)
				{
				 echo '<img src="tu/合并.jpg" width="10"/>';
				}
				elseif($score==1)
				{
				 echo '<img src="tu/三角.png" width="10"/>';
				 
					if($avg>0.5 and $avg <=1.5)
					{
						$avg_long=24*($avg - 0.6);
						 echo '<img src="tu/圆.png" width="10" style="z-index:-111;position:absolute;top:25px; left:'.$avg_long.'px; "/>';
					}
							
				}
				elseif($avg>0.5 and $avg <=1.5)
				{
					$avg_long=24*($avg - 0.6);
					 echo '<img src="tu/圆.png" width="10" style="z-index:-111;position:absolute;top:25px; left:'.$avg_long.'px; "/>';
				
				}
				elseif($max==1)
				{
				 echo '<img src="tu/方.jpg" width="10"/>';
				}
				else{
				
				echo '&nbsp;';
				}
			?>

					</td>
					<td width="8%" style="border:1px solid #F2F2F2;position:relative;">
			<?php 
				if($score == $avg and $score == 2)
				{
				 echo '<img src="tu/合并1.jpg" width="10"/>';
				}
				elseif ($score==$max and $score==2)
				{
				 echo '<img src="tu/合并.jpg" width="10"/>';
				}
				elseif($score==2)
				{
				 echo '<img src="tu/三角.png" width="10"/>';
				 if($avg>1.5 and $avg <=2.5)
					{
						$avg_long=24*($avg - 1.6);
						 echo '<img src="tu/圆.png" width="10" style="z-index:-111;position:absolute;top:25px; left:'.$avg_long.'px; "/>';
					}
				}
				elseif($avg>1.5 and $avg <=2.5)
				{
					$avg_long=24*($avg - 1.6);
					 echo '<img src="tu/圆.png" width="10" style="z-index:-111;position:absolute;top:25px; left:'.$avg_long.'px; "/>';
				
				}
				elseif($max==2)
				{
				 echo '<img src="tu/方.jpg" width="10"/>';
				}
				else{
				
				echo '&nbsp;';
				}
			?>

					</td>
					<td width="8%" style="border:1px solid #F2F2F2;position:relative;">
			<?php 
				if($score == $avg and $score == 3)
				{
				 echo '<img src="tu/合并1.jpg" width="10"/>';
				}
				elseif ($score==$max and $score==3)
				{
				 echo '<img src="tu/合并.jpg" width="10"/>';
				}
				elseif($score==3)
				{
				 echo '<img src="tu/三角.png" width="10"/>';
				 	if($avg>2.5 and $avg <=3.5)
					{
						$avg_long=24*($avg - 2.6);
						 echo '<img src="tu/圆.png" width="10" style="z-index:-111;position:absolute;top:25px; left:'.$avg_long.'px; "/>';
					}
				}
				elseif($avg>2.5 and $avg <=3.5)
				{
					$avg_long=24*($avg - 2.6);
					 echo '<img src="tu/圆.png" width="10" style="z-index:-111;position:absolute;top:25px; left:'.$avg_long.'px; "/>';
				
				}
				elseif($max==3)
				{
				 echo '<img src="tu/方.jpg" width="10"/>';
				}
				else{
				
				echo '&nbsp;';
				}
			?>

					</td>
					<td width="8%" style="border:1px solid #F2F2F2;position:relative;">

			<?php 
				if($score == $avg and $score == 4)
				{
				 echo '<img src="tu/合并1.jpg" width="10"/>';
				}
				elseif ($score==$max and $score==4)
				{
				 echo '<img src="tu/合并.jpg" width="10"/>';
				}
				elseif($score==4)
				{
				 echo '<img src="tu/三角.png" width="10"/>';
				 	if($avg>3.5 and $avg <=4.5)
					{
						$avg_long=24*($avg - 3.6);
						 echo '<img src="tu/圆.png" width="10" style="z-index:-111;position:absolute;top:25px; left:'.$avg_long.'px; "/>';
					}
				}
				elseif($avg>3.5 and $avg <=4.5)
				{
					$avg_long=24*($avg - 3.6);
					 echo '<img src="tu/圆.png" width="10" style="z-index:-111;position:absolute;top:25px; left:'.$avg_long.'px; "/>';
				
				}
				elseif($max==4)
				{
				 echo '<img src="tu/方.jpg" width="10"/>';
				}
				else{
				
				echo '&nbsp;';
				}
			?>

					</td>
					<td width="8%" style="border:1px solid #F2F2F2;position:relative;">
			<?php 
				if($score == $avg and $score == 5)
				{
				 echo '<img src="tu/合并1.jpg" width="10"/>';
				}
				elseif ($score==$max and $score==5)
				{
				 echo '<img src="tu/合并.jpg" width="10"/>';
				}
				elseif($score==5)
				{

						echo '<img src="tu/三角.png" width="10"/>';
						if($avg>4.5 and $avg <=5.5)
						{
							$avg_long=24*($avg - 4.6);
							 echo '<img src="tu/圆.png" width="10" style="z-index:-111;position:absolute;top:25px; left:'.$avg_long.'px; "/>';
						
						}
						
							 
						
				}
				elseif($avg>4.5 and $avg <=5.5)
				{
					$avg_long=24*($avg - 4.6);
					 echo '<img src="tu/圆.png" width="10" style="z-index:-111;position:absolute;top:25px; left:'.$avg_long.'px; "/>';
				
				}
				elseif($max==5)
				{
				 echo '<img src="tu/方.jpg" width="10"/>';
				}
				else{
				
				echo '&nbsp;';
				}
			?>

					</td>
					<td width="8%" style="border:1px solid #F2F2F2;position:relative;">
			<?php 
				if($score == $avg and $score == 6)
				{
				 echo '<img src="tu/合并1.jpg" width="10"/>';
				}
				elseif ($score==$max and $score==6)
				{
				 echo '<img src="tu/合并.jpg" width="10"/>';
				}
				elseif($score==6)
				{
				 echo '<img src="tu/三角.png" width="10"/>';
				 if($avg>5.5 and $avg <=6.5)
					{
						$avg_long=24*($avg - 5.6);
						 echo '<img src="tu/圆.png" width="10" style="z-index:-111;position:absolute;top:25px; left:'.$avg_long.'px; "/>';
					}
				}
				elseif($avg>5.5 and $avg <=6.5)
				{
					$avg_long=24*($avg - 5.6);
					 echo '<img src="tu/圆.png" width="10" style="z-index:-111;position:absolute;top:25px; left:'.$avg_long.'px; "/>';
				
				}
				elseif($max==6)
				{
				 echo '<img src="tu/方.jpg" width="10"/>';
				}
				else{
				
				echo '&nbsp;';
				}
			?>

					</td>
					<td width="8%" style="border:1px solid #F2F2F2;position:relative;">
			<?php 
				if($score == $avg and $score == 7)
				{
				 echo '<img src="tu/合并1.jpg" width="8"/>';
				}
				elseif ($score==$max and $score==7)
				{
				 echo '<img src="tu/合并.jpg" width="10"/>';
				}
				elseif($score==7)
				{
				 echo '<img src="tu/三角.png" width="10"/>';
				 if($avg>6.5 and $avg <=7.5)
					{
						$avg_long=24*($avg - 6.6);
						 echo '<img src="tu/圆.png" width="10" style="z-index:-111;position:absolute;top:25px; left:'.$avg_long.'px; "/>';
					}
				}
				elseif($avg>6.5 and $avg <=7.5)
				{
					$avg_long=24*($avg - 6.6);
					 echo '<img src="tu/圆.png" width="10" style="z-index:-111;position:absolute;top:25px; left:'.$avg_long.'px; "/>';
				
				}
				elseif($max==7)
				{
				 echo '<img src="tu/方.jpg" width="10"/>';
				}
				else{
				
				echo '&nbsp;';
				}
			?>

					</td>
					<td width="8%" style="border:1px solid #F2F2F2;position:relative;">
			<?php 
				if($score == $avg and $score == 8)
				{
				 echo '<img src="tu/合并1.jpg" width="10"/>';
				}
				elseif ($score==$max and $score==8)
				{
				 echo '<img src="tu/合并.jpg" width="10"/>';
				}
				elseif($score==8)
				{
				 echo '<img src="tu/三角.png" width="10"/>';
				 if($avg>7.5 and $avg <=8.5)
					{
						$avg_long=24*($avg - 7.6);
						 echo '<img src="tu/圆.png" width="10" style="z-index:-111;position:absolute;top:25px; left:'.$avg_long.'px; "/>';
					}
				}
				elseif($avg>7.5 and $avg <=8.5)
				{
					$avg_long=24*($avg - 7.6);
					 echo '<img src="tu/圆.png" width="10" style="z-index:-111;position:absolute;top:25px; left:'.$avg_long.'px; "/>';
				
				}
				elseif($max==8)
				{
				 echo '<img src="tu/方.jpg" width="10"/>';
				}
				else{
				
				echo '&nbsp;';
				}
			?>
					</td>
					<td width="8%" style="border:1px solid #F2F2F2;position:relative;">
			<?php 
				if($score == $avg and $score == 9)
				{
				 echo '<img src="tu/合并1.jpg" width="10"/>';
				}
				elseif ($score==$max and $score==9)
				{
				 echo '<img src="tu/合并.jpg" width="10"/>';
				}
				elseif($score==9)
				{
				 echo '<img src="tu/三角.png" width="10"/>';
				 	if($avg>8.5 and $avg <=8.5)
					{
						$avg_long=24*($avg - 8.6);
						 echo '<img src="tu/圆.png" width="10" style="z-index:-111;position:absolute;top:25px; left:'.$avg_long.'px; "/>';
					}
				}
				elseif($avg>8.5 and $avg <=8.5)
				{
					$avg_long=24*($avg - 8.6);
					 echo '<img src="tu/圆.png" width="10" style="z-index:-111;position:absolute;top:25px; left:'.$avg_long.'px; "/>';
				
				}
				elseif($max==9)
				{
				 echo '<img src="tu/方.jpg" width="10"/>';
				}
				else{
				
				echo '&nbsp;';
				}
			?>
					</td>
					<td width="8%" style="border:1px solid #F2F2F2;position:relative;">
			<?php 
				if($score == $avg and $score == 10)
				{
				 echo '<img src="tu/合并1.jpg" width="10"/>';
				}
				elseif ($score==$max and $score==10)
				{
				 echo '<img src="tu/合并.jpg" width="10"/>';
				}
				elseif($score==10)
				{
				 echo '<img src="tu/三角.png" width="10"/>';
				 	if($avg>9.5 and $avg <=10.5)
					{
						$avg_long=24*($avg - 9.6);
						 echo '<img src="tu/圆.png" width="10" style="z-index:-111;position:absolute;top:25px; left:'.$avg_long.'px; "/>';
					}
				}
				elseif($avg>9.5 and $avg <=10.5)
				{
					$avg_long=24*($avg - 9.6);
					 echo '<img src="tu/圆.png" width="10" style="z-index:-111;position:absolute;top:25px; left:'.$avg_long.'px; "/>';
				
				}
				elseif($max==10)
				{
				 echo '<img src="tu/方.jpg" width="10"/>';
				}
				else{
				
				echo '&nbsp;';
				}
			?>
					</td>
				</tr>
				</tbody>
				</table>