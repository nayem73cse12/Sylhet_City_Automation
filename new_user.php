
<!DOCTYPE html>
<html>
<head>
	<title>Creating another user</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">

  <div class="well well-lg">
	  <h1 style="text-align:center">Sylhet City Corporation</h1>
	  <h4 style="text-align:center">Sign up</h4>

  </div> 
<br>
<br>
<div class="col-md-6 col-md-offset-3">
<form class="form-horizontal" action="add_user.php" method="post">
	<div class="form-group" >
		<label class="control-label col-sm-2" for="admin_name">Username:</label>
		<div class="col-sm-8">
			<input type="text" name="user_name" class="form-control" placeholder="Enter Username" required>
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="admin_pass">Password: </label>
		<div class="col-sm-8">
			<input type="password" name="user_pass" class="form-control" placeholder="Enter Password" required>
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="admin_pass">NID no: </label>
		<div class="col-sm-8">
			<input type="password" name="user_nid" class="form-control" placeholder="Enter Password" required>
		</div>
	</div>

	<div class="form-group"> 
        <div class="col-sm-offset-2 col-xs-4">
          <button type="submit" class="btn btn-primary">Create</button>
        </div>
     </div>

</form>

</div>
</div>

</body>
</html>