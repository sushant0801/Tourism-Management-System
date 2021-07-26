
<html>
	<head>
		<link rel="stylesheet" href="newcss.css">
		<title>Login/SignUp</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	</head>
	<body>
		<style>
			label {
				font-size: 16px;
			}
		</style>
		<div class="container-fluid" style="padding:0px!important">
		<nav>
            <ul>
                <li><a href="homepage.php">HOME</a></li>
                <li><a href="aboutus.html">ABOUT US</a></li>
                <li><a href="#">PACKAGES</a></li>
                <li><a href="enquiry.html">ENQUIRY</a></li>
                <li><a href="signup.php">LOGIN</a></li>
                <li><a href="loginadmin.html">ADMIN</a></li>
            </ul>
        </nav>
		
			
			<form action="logincode.php" method="POST" class="form-horizontal" style="padding-top: 70px;" >
			
			
				<div class="col-sm-offset-4 col-sm-4" style="box-shadow: 0px 0px 8px 5px lightgrey;">
					
				<h2><center>LOGIN</center></h2>

					<div class="form-group" >
						<!--label class="control-label col-sm-4">Email:</label-->
						<div class="col-sm-12" style="border:1 px solid black;padding:0px 70px 0px 70px!important;">
							<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
						</div>
					</div>

					<div class="form-group">

						<!--label class="control-label col-sm-4">Password:</label-->
						<div class="col-sm-12" style="border:1 px solid black;padding:0px 70px 0px 70px!important;">
							<input type="password" class="form-control" id="password" placeholder="Password"
								name="password">
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-sm-12">
							<p style="text-align: center;">Visiting For The First Time?<a href="signup.php">Register Here</a></p>	
							<div class="col-sm-6 col-sm-offset-4">
								<button type="submit" name="login_btn" class="btn btn-primary">Submit</button>
							</div>
							
						</div>
					</div>

				</div>
			
				
			</form>
			
	
		</div>
		<div class="foot" style="color:white;background-color:#0005;text-align: center;height:8%;
		font-size:18px;padding-top: 10px;position:fixed;left: 0;
   bottom: 0;
   width: 100%;">
     Copyright © World Tours. All Rights
            Reserved|Contact Us: +91 90000 00000
    </div> 
	</body>
</html>