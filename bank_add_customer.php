<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="css/jquery.min.js"></script>
	<script src="css/bootstrap.min.js"></script>
</head>

<body>
   <div class="container">
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
     		<h2>Bank Login</h2>
     	</div>
         <div style="max-width: 250px; margin: 0 auto">
            <h4><a href="bank_home.php">BACK</a></h4>
          </div>
       </div>

     <div class="panel panel-default">
     	<div class="panel-heading">
     		<h2>Add New Customer</h2>
     	</div>
     	<div class="panel-body">

     		<form action="bank_insert_customer.php" method="post">
     			<div class="form-group">
     				<label>Mobile No</label>
     				<input type="text" min="10"  max="10" name="mobileno" class="form-control" required />
     			</div>

     			<div class="form-group">
     				<label>Name</label>
     				<input type="text" name="name" class="form-control" required/>
     			</div>
     			<div class="form-group">
     				<label>Age</label>
     				<input type="number" min="12" max="80" name="age" class="form-control" required/>
     			</div>
     			<div class="form-group">
     				<label>Address</label>
     				<input type="text" name="address" class="form-control" required/>
     			</div>
                
     			<input type="submit" name="create" class="btn btn-success btn-lg" value="Create">
     		</form>
            
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