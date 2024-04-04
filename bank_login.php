<?php
  session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="css/jquery.min.js"></script>
	<script src="css/bootstrap.min.js"></script>
</head>

<body>
   <div class="container" style="margin-top:100px;">
     <nav class="navbar navbar-default"  >
     	<div class="container-fluid">
     		<div class="navbar-header">
     			<a class="navbar-brand" href="index.php">Our Banking Management System</a>
     		</div>
     		<ul class="nav navbar-nav pull-right">
     		    <li><a href="index.php">Home</a></li>
     			<li><a href="customer_login.php">Customer Login</a></li>
     			<li><a href="bank_login.php">Bank Login</a></li>
     			
     		</ul>
     	</div>
     </nav>

     <div class="panel panel-default">
     	<div class="panel-heading">
     		<h2>Bank Login</h2>
     	</div>

     	<div class="panel-body">
     	  <div style="max-width: 600px; margin: 0 auto">
     		<form action="bank_validate.php" method="post">
     			<div class="form-group">
     				<label for="email">Username</label>
     				<input type="text" name="username" class="form-control" required />
     			</div>

     			<div class="form-group">
     				<label for="password">password</label>
     				<input type="password" name="password" class="form-control" required/>
     			</div>
     			<input type="submit" name="login" class="btn btn-success" value="Login">
     		</form>
     	 </div>
     	</div>
     </div>

     <div class="well">
     	<h3>BANK
     	   <span class="pull-right"></span>
     	</h3>
     </div>   
   	
   </div>

</body>
</html>