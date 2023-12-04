<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Display Records</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<table>
			<tr>
				<th>s.no</th>
				<th>firstname</th>
				<th>lastname</th>
				<th>email</th>
				<th>Update</th>
			</tr>
				<?php
				$i=1;
				foreach($data as $row)
				{
					echo '<tr>';
					echo '<td>'.$i. '</td>';
					echo '<td>'.$row->first_name.'</td>';
					echo '<td>'.$row->last_name.'</td>';
					echo '<td>'.$row->email.'</td>';
					echo '<td><a href="updatedata?id='.$row->id.'">Update</a></td>';
					echo '</tr>';
					$i++;
				}
				?>
		</table>
	</body>
</html>
