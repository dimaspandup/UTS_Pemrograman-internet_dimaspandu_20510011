<!DOCTYPE html>
<html>
<head>
	<title>From LOGIN</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<form method="POST" action="aksilogin.php">
	<div class='login-container'>
		<h2> FORM LOGIN </h2>
			<div class="row">
				<div class="col-md-12 form-group">
					<input type="text" name="username" class="form-control"
					placeholder="Input Username">
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 form-group">
					<input type="password" name="password" class="form-control" 
					placeholder="input password">
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 form-group">
					<input type="submit" class="btn btn-block btn-login" class="form-control" 
					value="Silahkan Login">
				</div>
			</div>
	</div>
	</form>
</body>
</html>