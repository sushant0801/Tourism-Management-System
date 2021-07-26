<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
    .jumbotron {
      background-color: lightblue;
    }
  .fakeimg {
    height: 200px;
    background-image: url('bg.jpg');
  }
  </style>
    <title>Database</title>
</head>
<style>
    
    .table{
        padding: 10px;
        /* margin:10px ; */
    }
    table{
            border: 2px solid #dddddd;
        position: inherit;
        border-collapse:collapse ;
        width: 80%;
        color: #588c7e;
        font-family:sans-serif ;
        font-size: 15px;
        text-align: center;
        box-sizing: 5px;
    }
    td{
        border: 2px solid #dddddd;
        padding: 5px 5px;
        margin: 5px;
    }
    th{
        padding: 5px 5px;
        background-color: #588c7e;
        color:white;
        border: 1px solid #dddddd;
    }
    tr:nth-child(even){background-color: #f2f2f2;border: 2px solid #dddddd;}
</style>
<body>

<div class="jumbotron text-center" style="margin-bottom:0" >
  <h1 >Tourism Management System Admin Page</h1>
  
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark"  >
  <a class="navbar-brand" href="#" style="margin-right: 1330px;">TMS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="AdminHome.php" >Back</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="plans.html">Plans</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.html">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php0">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.html">About</a>
      </li>     -->
    </ul>
  </div>  
</nav><br><br>
  
<div class="table">
    <h3><a>1.Signup Database</a></h3>
        <table>
            <tr>
              
            <th>ID</th>
            <th>Fullname</th>
            <th>Email</th>
            
            </tr>
            </div>   
        <?php
        
        $con = mysqli_connect('localhost:3308','root','tourist');
        
        $ans = mysqli_select_db($con,"tourist");
        if(!$ans)
        {
            die("<script>alert('Woops! Error connecting to database.')</script>");
        }
    
        $sql="SELECT * FROM users";
    
        $result=$con->query($sql);
    
        if($result->num_rows>0)
        {
            while($row=$result->fetch_assoc())
            {
                echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["email"]."</td></tr>";
            }
            echo "</table>";
        }
    
        else
        {
            echo "<script> alert('NO DATA AVAILABLE.')</script> <br/>" ;
        }
        $con->close();
        ?>
    </table>  

    <br><br>
     
<div class="table1">
    <h3><a>2. Enquiry Database</a></h3>
        <table>
            <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Last name</th>
            <th>Contact</th>
            <th>Email</th>
            
           
            <th>No of people</th>
            <th>Inclusive detail</th>
           
           
            </tr>
            </div>   
        <?php
        
        $con = mysqli_connect('localhost:3308','root','','tourist');
        
        $ans = mysqli_select_db($con,"tourist");
        if(!$ans)
        {
            die("<script>alert('Woops! Error connecting to database.')</script>");
        }
    
        $sql="SELECT * FROM enquiry ";
    
        $result=$con->query($sql);
    
        if($result->num_rows>0)
        {
            while($row=$result->fetch_assoc())
            {
                echo "<tr><td>".$row["id"]."</td><td>".$row["fname"]."</td><td>".$row["lname"]."</td><td>".$row["contact"]."</td><td>".$row["email"]."</td><td>".$row["travelling"]."</td><td>".$row["allyes"]."</td></tr>";
            }
            echo "</table>";
        }
    
        else
        {
            echo "<script> alert('NO DATA AVAILABLE.')</script> <br/>" ;
        }
        $con->close();
        ?>
    </table>  

         <br><br>

 <!-- <div class="table1">
    <h1><a>3.Plan Database</a></h1>
        <table>
            <tr>
            <th>Registered Email</th>
            <th>CardHolder</th>
            <th>Cardnumber</th>
            <th>expiry-date</th>
            <th>Cvv</th>
            <th>Plans</th>
            
            </tr>
            </div>   
        <?php
        
        $con = mysqli_connect('localhost','root','','project','3306');
        
        $ans = mysqli_select_db($con,"project");
        if(!$ans)
        {
            die("<script>alert('Woops! Error connecting to database.')</script>");
        }
    
        $sql="SELECT * FROM `payment` ";
    
        $result=$con->query($sql);
    
        if($result->num_rows>0)
        {
            while($row=$result->fetch_assoc())
            {
                echo "<tr><td>"
                .$row["registeredemail"]."</td><td>"
                .$row["cardholder"]."</td><td>"
                .$row["cardnumber"]."</td><td>"
                .$row["expiry-date"]."</td><td>"
                .$row["cvv"]."</td><td>"
                .$row["plans"]."</td></tr>";
                
            }
            echo "</table>";
        }
    
        else
        {
            echo "<script> alert('NO DATA AVAILABLE.')</script> <br/>" ;
        }
        $con->close();
        ?> 
    </table>   -->

    
<div class="jumbotron text-center" style="margin-bottom:0" >
  <p> W-Services © </p>
</div>

</body>
</html>