<?php

include("connection.php");

if(isset($_POST['submit_btn']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $adults=$_POST['adults'];
    $children=$_POST['children'];
    $travel=$_POST['travel'];
    $Destination=$_POST['Destination'];
    $allyes=$_POST['allyes'];
    $Checkin=$_POST['Checkin'];
    $Checkout=$_POST['Checkout'];
    $instruction=$_POST['instruction'];

    $query="INSERT INTO booking (fname,lname,email,contact,no_of_adults,no_of_children,type_of_travel,destination,insurance,checkin,checkout,instruction) 
    VALUES ('$fname','$lname','$email','$contact','$adults','$children','$travel','$Destination','$allyes','$Checkin','$Checkout','$instruction')";
    $query_run=mysqli_query($conn,$query);

    if($query_run) {
        header("location:booking.html");
    }
    else {
        echo "Error 404: Submission Error ";
    }
}
?>