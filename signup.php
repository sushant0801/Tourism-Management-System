<?php
session_start();
include("connection.php");
//include("function.php");

//$user_data=check_login($con);

?>

<html>
<head>
	<link rel="stylesheet" href="newcss.css">
	<meta charset="UTF-8">
	<title>Login/SignUp</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Crimson Text">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Google Sans">
	<title>Signup</title>
 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
<nav>
        <ul>
            <li><a href="homepage.php">HOME</a></li>
            <li><a href="aboutus.html">ABOUT US</a></li>
            <li><a href="#">PACKAGES</a></li>
            <li><a href="enquiry.html">ENQUIRY</a></li>
            <li><a href="signup.php">LOGIN</a></li>
        </ul>
</nav>
	<style>
        label {
            font-size: 16px;
        }
    </style>
    <div class="container-fluid" style="padding:0px!important">
        

      
        <form action="code.php"  method="POST" class="form-horizontal" style="padding-top: 50px;">
			<div class="col-sm-offset-4 col-sm-4" style="box-shadow: 0px 0px 8px 5px lightgrey;">
                <h2>
                <center>SignUp</center>
                </h2>
                <div class="form-group">
                   <div class="col-sm-12" style="border:1 px solid black;padding:0px 70px 0px 70px!important;">
                        <input type="text" class="form-control" id="fullname" placeholder="Enter fullname"
                            name="name">
                    </div>
                </div>

                <div class="form-group">
                   
                    <div class="col-sm-12" style="border:1 px solid black;padding:0px 70px 0px 70px!important;">
                        <input type="email" class="form-control" id="email" placeholder="Enter email"
                            name="email">
                    </div>
                </div>
                <div class="form-group">
                   <div class="col-sm-12" style="border:1 px solid black;padding:0px 70px 0px 70px!important;">
                        <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
                    </div>
                </div>

                <div class="form-group">
                    
                    <div class="col-sm-12" style="border:1 px solid black;padding:0px 70px 0px 70px!important;">
                        <input type="password" class="form-control" id="confirm password" placeholder="Confirm password"
                            name="conform">
                    </div>
                </div>
						
				<div class="form-group">
					<div class="col-sm-12">
						<p style="text-align: center;">Already Register?<a href="login.php">Login here</a></p>	
						<div class="col-sm-6 col-sm-offset-3">
							<button type="submit" name="adduser" class="btn btn-primary">Submit</button>&nbsp;
                            <button type="reset" name="reset" class="btn btn-primary">Reset</button>
						</div>
                    </div>
			    </div>
			</form>
		</div>
	</body>
	<div class="foot" style="color:white;background-color:#0005;text-align: center;height:8%;
		font-size:18px;padding-top: 10px;position:fixed;left: 0;
   bottom: 0;
   width: 100%;">
     Copyright © World Tours. All Rights
            Reserved|Contact Us: +91 90000 00000
    </div> 
	
	
</body>
</html>
