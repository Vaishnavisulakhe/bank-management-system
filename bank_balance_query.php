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
     		<h2>Balance Enquiry</h2>
     	</div>
     	<div class="panel-body">

<?php
        $mobileno = $_POST['mobileno'];
        $con=mysqli_connect("localhost","root","","bank");
        if(mysqli_connect_errno())
        {
            echo"<h3>Connection Error</h3>";
            echo"<p>Cannot connect to database server.Try again.</p>";
            echo"<a href='bank_home.php'>Click here to go back</a>";
            exit();
        }
        $query = "select sum(amount*ttype) AS balance from transactions where mobileno='$mobileno'" ;
        $result = mysqli_query($con, $query);
        $row = mysqli_fetch_array($result);
        $balance = $row['balance'];
            
        echo "<p>Your current bank balance is Rs. $balance</p>";

        mysqli_close($con);
            
?>
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