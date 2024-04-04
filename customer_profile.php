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
     		<h2>Customer Login</h2>
     	</div>
<div style="max-width: 250px; margin: 0 auto">
            <h4><a href="customer_home.php">BACK</a></h4>
          </div>
         
     </div>      
         
     <div class="panel panel-default">
     	<div class="panel-heading">
     		<h4>View Profile</h4>
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
    $query="select * from customers where mobileno='$m'";
    $result=mysqli_query($con,$query);
    $count=mysqli_num_rows($result);
    if($count==1)
    {
        $row = mysqli_fetch_array($result);
        $name = $row['name'];
        $address = $row['address'];
        $age = $row['age'];
        
        echo "<table class='table table-striped'>";
        echo "<tr>
                  <td width=35%>Mobile Number: </td>
                  <th>$m</th>                  
              </tr>";
        echo "<tr>
                  <td width=35%>Name: </td>
                  <th>$name</th>                  
              </tr>";
        echo "<tr>
                  <td width=35%>Age: </td>
                  <th>$age</th>                  
              </tr>";
        echo "<tr>
                  <td width=35%>Address: </td>
                  <th>$address</th>                  
              </tr>";
        
        echo "</table>";
        
    }
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