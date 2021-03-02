<!DOCTYPE html>
<html>
<head>
<title>Student Management | Add</title>
</head>
<body>
@if (session('status'))
<div class="alert alert-success" role="alert">
	<button type="button" class="close" data-dismiss="alert">×</button>
	{{ session('status') }}
</div>
@elseif(session('failed'))
<div class="alert alert-danger" role="alert">
	<button type="button" class="close" data-dismiss="alert">×</button>
	{{ session('failed') }}
</div>
@endif
<form action = "/create" method = "post">
	<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
	<table>
	<tr>
	<td>First Name</td>
	<td><input type='text' name='first_name' /></td>
	<tr>
	<td>Last Name</td>
	<td><input type="text" name='last_name'/></td>
	</tr>
	<tr>
	<td>City Name</td>
	<td>
	<select name="city_name">
	<option value="bbsr">Bhubaneswar</option>
	<option value="cuttack">Cuttack</option>
	</select></td>
	</tr>
	<tr>
	<td>Email</td>
	<td><input type="text" name='email'/></td>
	</tr>

	<tr>
	<td colspan = '2'>
	<input type = 'submit' value = "Add student"/>
	</td>
	</tr>
	</table>
</form>
</body>
</html>