<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Codeiniter Crud Operation</title>
	</head>
	<body>
		<form method="post" action="<?=base_url()?>Crud/savedata">
		<input type="text" name="first_name" placeholder="firstname">
		<input type="text" name="last_name" placeholder="lastname">
		<input type="email" name="email" placeholder="email">
		<input type="submit" name="save" value="Save">
		</form>
	</body>
</html>

