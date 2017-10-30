<!-- Type Casting Operations -->
<html>
	<head>
		<title>Type Casting</title>
	</head>
	<body>
		<table border=1>
			<tr>
				<th>Variable Name</th>
				<th>Old Type</th>
				<th>New Type</th>
				<th>Converted Value</th>
			</tr>
			
			<?php
				// Integer to Double
				$a=10;
				$type=gettype($a);
				settype($a,"double");
				$newtype=gettype($a);
			?>
			<tr>
				<td>a</td>
				<td><?php echo $type; ?></td>
				<td><?php echo $newtype; ?></td>
				<td><?php echo $a; ?></td>
			</tr>
			
			<?php
				// Integer to String
				$b=999;
				$type=gettype($b);
				settype($b,"string");
				$newtype=gettype($b);
			?>
			<tr>
				<td>b</td>
				<td><?php echo $type; ?></td>
				<td><?php echo $newtype; ?></td>
				<td><?php echo $b; ?></td>
			</tr>
			
			<?php
				// Integer to Boolean
				$c=1;
				$type=gettype($c);
				settype($c,"boolean");
				$newtype=gettype($c);
			?>
			<tr>
				<td>c</td>
				<td><?php echo $type; ?></td>
				<td><?php echo $newtype; ?></td>
				<td><?php echo $c; ?></td>
			</tr>
			
			
			<?php
				// String to Integer
				$d="999";
				$type=gettype($d);
				settype($d,"integer");
				$newtype=gettype($d);
			?>
			<tr>
				<td>d</td>
				<td><?php echo $type; ?></td>
				<td><?php echo $newtype; ?></td>
				<td><?php echo $d; ?></td>
			</tr>
			
			<?php
				// String to Double
				$e="999";
				$type=gettype($e);
				settype($e,"double");
				$newtype=gettype($e);
			?>
			<tr>
				<td>e</td>
				<td><?php echo $type; ?></td>
				<td><?php echo $newtype; ?></td>
				<td><?php echo $e; ?></td>
			</tr>
			
			<?php
				// String to Boolean
				$f="999";
				$type=gettype($f);
				settype($f,"bool");
				$newtype=gettype($f);
			?>
			<tr>
				<td>f</td>
				<td><?php echo $type; ?></td>
				<td><?php echo $newtype; ?></td>
				<td><?php echo $f; ?></td>
			</tr>
			
			<?php
				// Double to Integer
				$g=10.10;
				$type=gettype($g);
				settype($g,"int");
				$newtype=gettype($g);
			?>
			<tr>
				<td>g</td>
				<td><?php echo $type; ?></td>
				<td><?php echo $newtype; ?></td>
				<td><?php echo $g; ?></td>
			</tr>
			
			<?php
				// Double to String
				$h=10.10;
				$type=gettype($h);
				settype($h,"string");
				$newtype=gettype($h);
			?>
			<tr>
				<td>h</td>
				<td><?php echo $type; ?></td>
				<td><?php echo $newtype; ?></td>
				<td><?php echo $h; ?></td>
			</tr>
			
			<?php
				// Double to Boolean
				$i=10.10;
				$type=gettype($i);
				settype($i,"bool");
				$newtype=gettype($i);
			?>
			<tr>
				<td>i</td>
				<td><?php echo $type; ?></td>
				<td><?php echo $newtype; ?></td>
				<td><?php echo $i; ?></td>
			</tr>
			
			<?php
				// Boolean to Integer
				$j=true;
				$type=gettype($j);
				settype($j,"int");
				$newtype=gettype($j);
			?>
			<tr>
				<td>j</td>
				<td><?php echo $type; ?></td>
				<td><?php echo $newtype; ?></td>
				<td><?php echo $j; ?></td>
			</tr>
			
			<?php
				// Boolean to String
				$k=false;
				$type=gettype($k);
				settype($k,"string");
				$newtype=gettype($k);
			?>
			<tr>
				<td>k</td>
				<td><?php echo $type; ?></td>
				<td><?php echo $newtype; ?></td>
				<td><?php echo $k; ?></td>
			</tr>
			
			<?php
				// Boolean to Double
				$l=true;
				$type=gettype($l);
				settype($l,"double");
				$newtype=gettype($l);
			?>
			<tr>
				<td>l</td>
				<td><?php echo $type; ?></td>
				<td><?php echo $newtype; ?></td>
				<td><?php echo $l; ?></td>
			</tr>
		</table>
	</body>
</html>
