

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

     	<div class="panel-body">
     	  <div style="max-width: 600px; margin: 0 auto">
<?php
session_start();
if(isset($_POST['login'])){
    $u=$_POST['username'];
    $p=$_POST['password'];
    $con=mysqli_connect("localhost","root","","bank");
    if(mysqli_connect_errno())
    {
        echo"<h3>Connection Error</h3>";
        echo"<p>Cannot connect to database server.Try again.</p>";
        echo"<a href='bank_login.php'>Click here to login</a>";
        exit();
    }
    $query="select * from admin where username='$u'and password='$p'";
    $result=mysqli_query($con,$query);
    $count=mysqli_num_rows($result);
    if($count==1)
    {
        $_SESSION['admin']=$u;
        header('Location: bank_home.php');
    }
    else
    {
        echo"<h3>Login Error</h3>";
        echo"<p>Username password combination incorrect.Try again.</p>";
        echo"<a href='bank_login.php'>Click here to login</a>";
    }
    mysqli_close($con);
    
}
?> 

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