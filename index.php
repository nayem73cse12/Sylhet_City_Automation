		<!DOCTYPE html>
		<html>
		<head>
			<title>Sylhet City Corporation</title>
			<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	        <script src="bootstrap/js/bootstrap.min.js"></script>
		</head>
		<body>
		<div class="container">
			<div class="well well-lg">
	  <h1 style="text-align:center">Sylhet City Corporation</h1>	
	  <h5 style="text-align:center">User log in</h5>
	    </div> 
	    <br><br>

	    <h4 style="text-align:center">Please, provide username & password or <a href="">create new account</a>.</h4>
<br><br>

      <div class="col-md-6 col-md-offset-3">
<form class="form-horizontal" action="checklogin.php" method="post">
	<div class="form-group">
		<label class="control-label col-sm-2" for="username">Username:</label>
		<div class="col-sm-8">
			<input type="text" name="username" class="form-control" placeholder="Enter Username" required>
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="password">Password: </label>
		<div class="col-sm-8">
			<input type="password" name="password" class="form-control" placeholder="Enter Password" required>
		</div>
	</div>

	<div class="form-group"> 
        <div class="col-sm-offset-2 col-xs-4">
          <button type="submit" class="btn btn-primary">Login</button>
        </div>
     </div>

</form>

</div>


		</div>
		</body>
		</html>