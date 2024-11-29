<!DOCTYPE html>
<html lang="en">
<head>
	<title>Lab 5a Q1</title>
</head>
<body>
	<?php
		$name = "Tan Gui Mei";
		$matric_number = "AI220256";
		$course = "BIC21203 Web Development";
		$year_of_study=3;
		$address="Persiaran Tun Dr. Ismail, 86400 Parit Raja, Johor";
	?>
	<table border="1" cellpadding="5" cellspacing="0">
		<tr>
			<td>Name</td>
			<td><?php echo "$name"; ?></td>
		</tr>
		<tr>
			<td>Matric Number</td>
			<td><?php echo "$matric_number"; ?></td>
		</tr>
		<tr>
			<td>Course</td>
			<td><?php echo "$course"; ?></td>
		</tr>
		<tr>
			<td>Year of Study</td>
			<td><?php echo "$year_of_study"; ?></td>
		</tr>
		<tr>
			<td>Address</td>
			<td><?php echo "$address"; ?></td>
		</tr>
	</table>

</body>
</html>