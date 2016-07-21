<? 
	function dayProgram($query)
	{
		$res = mysql_query($query);
		echo "<div class='row'>";
		while ($el = mysql_fetch_array($res))
		{
			$name = $el['projectName'];
        	$query1 = "SELECT imgPath FROM asanas.asanaSmallImages INNER JOIN asanas.asanas
                          WHERE asanas.asanas.projectName = asanas.asanaSmallImages.projectName
                          AND asanas.asanaSmallImages.projectName = '$name'";
        	$ssql = mysql_query($query1); 
        	while ($arr = mysql_fetch_array($ssql)) 
        	{
				$imgsrc = $arr['imgPath'];
	      		echo "<div class='col-lg-3 col-md-3 col-sm-4 col-xs-6'>";
	      		echo "<div class='dayProgramFigure'>";
	      			// echo "<div class='daypr'>";
	      				echo "<a href='asanas#$name'>";
	      				echo "<img src='{$imgsrc}' alt='' />"; // Вывод превью картинки
	      				echo "</a>"; // Закрываем ссылку	
	      			// echo "</div>";
	      		echo "</div>";	
	      		echo "</div>";	
			} 
		}
		echo "</div>";	
	}
?>	


