<!DOCTYPE html>
<html>
<head>
	<title>Customer Profile</title>
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
     		<h2>Customer Transactions</h2>
     	</div>
<div style="max-width: 250px; margin: 0 auto">
            <h4><a href="customer_home.php">BACK</a></h4>
          </div>
         
     </div>      
         
     <div class="panel panel-default">
     	<div class="panel-heading">
     		<h4>View All Transactions</h4>
     	</div>
           
         
     	<div class="panel-body">

<?php
session_start();
    $con=mysqli_connect("localhost","root","","bank");
    if(mysqli_connect_errno())
    {
        echo "<h3>Connection Error</h3>";
        echo "<p>Cannot connect to database server.Try again.</p>";
        echo "<a href='customer_home.php'>Go Back</a>";
        exit();
    }
    $m = $_SESSION['customer'];
    $query="select * from transactions where mobileno='$m'";
    $result=mysqli_query($con,$query);
    echo "<table class='table table-striped'>";
    echo "<tr><td>Date</td><td>Amount</td><td>Type</td></tr>";
            $balance = 0;
    while($row = mysqli_fetch_array($result))
    {
        
        $date = $row['date'];
        $amount = $row['amount'];
        $ttype = $row['ttype'];
        
        echo "<tr>";
        echo "<td>$date</td>";
        echo "<td>$amount</td>";
        if ($ttype == 1)
        {
            echo "<td>Credit</td>";
            $balance = $balance + $amount;
        }
        else
        {
            echo "<td>Debit</td>";
            $balance = $balance - $amount;            
        }
        echo "</tr>";
        
    }
        echo "</table>";
    echo "<h4>Current Balance: $balance</h4>";
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