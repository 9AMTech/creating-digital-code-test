<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="../css/app.css">
	<title>Phone Book</title>
</head>
<body>
	<h1>Add a Contact!</h1>
<form action="{{url('insert')}}" method="POST">
	@csrf
	<table>
		<tr>
			<th>Last</th>
			<th>First</th>
			<th>Phone</th>
			<th>E-Mail</th>
		</tr>
		<tr>
			<td>
				<input type="text" name='last_name' id='last_name'>
			</td>
			<td>
				<input type="text" name='first_name' id='first_name'>
			</td>
			<td>
				<input type="text" name='phone_number' id='phone_number'>
			</td>
			<td>
				<input type="text" name='email' id='email'>
			</td>
		</tr>
		<input type="submit" value="SUBMIT">
		</form>
	</table>
</form>
</body>
</html>