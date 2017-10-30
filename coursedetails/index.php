<!-- Displaying Course Details with different Color and different tooltip -->
<html>
	<head>
		<title>Course Details</title>
	</head>
	<body>
		<?php
			$color=array(
				'BCA'=>'#FF5733',
				'MCA'=>'#333FFF',
				'BBA'=>'#FFFF00',
				'MBA'=>'#800000',
				'BTech'=>'#49FF33',
				'BTech'=>'#49FF33',
			);
			
			foreach($color as $k=>$v){
				print("<h1 align=center title='This course is $k'><font color='$v'> 
					$k
				</font></h1>");
			}
		?>
	</body>
</html>
