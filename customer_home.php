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
     <nav class="navbar navbar-default">
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
     		<h2>Customer Login</h2>
     	</div>

     <div class="panel panel-default">
     	<div class="panel-heading">
     		<h2>Welcome <?php session_start(); echo $_SESSION['customer']; ?></h2>
     	</div>
          <div style="max-width: 250px; margin: 0 auto">
            <h4>1. <a href="customer_transactions.php">View Transactions</a></h4>
            <h4>2. <a href="customer_profile.php">View Profile</a></h4>
            <h4>3. <a href="customer_password.php">Modify Password</a></h4>
          </div>
     	<div class="panel-body">
     	  
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