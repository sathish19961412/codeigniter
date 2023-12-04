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
				<?php
				$i=1;
				foreach($data as $row)
				{

				?>
				<form method="post" action="">
					<input type="text" name="first_name" placeholder="firstname" value="<?php echo $row->first_name; ?>"><br>
					<input type="text" name="last_name" placeholder="lastname" value="<?php echo $row->last_name; ?>"><br>
					<input type="email" name="email" placeholder="email" value="<?php echo $row->email; ?>"><br>
					<input type="submit" name="update" value="Update">
				</form>
				<?php } ?>
		</table>
	</body>
</html>
