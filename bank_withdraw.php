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
     		<h2>Bank Login</h2>
     	</div>
         <div style="max-width: 250px; margin: 0 auto">
            <h4><a href="bank_home.php">BACK</a></h4>
          </div>
       </div>

     <div class="panel panel-default">
     	<div class="panel-heading">
     		<h2>Withdraw Money</h2>
     	</div>
     	<div class="panel-body">

     		<form action="bank_withdraw_query.php" method="post">
     			<div class="form-group">
     				<label>Mobile No</label> 
     				<input type="text" name="mobileno" class="form-control" required />
     			</div>

     			<div class="form-group">
     				<label>Amount</label>
     				<input type="number" min="10" max="200000" name="amount" class="form-control" required/>
     			</div>
                
                
     			<input type="submit" name="withdraw" class="btn btn-success" value="Withdraw">
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