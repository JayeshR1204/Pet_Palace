<?php

session_start();

$con= mysqli_connect("localhost","root",'','feedback');

if(!$con){
    die("Failed To Connect: ".mysqli_connect_error());
}
else{
    echo"Connection Successful<br>";
}

$first_name = $_POST['first_name'];

$last_name = $_POST['last_name'];

$address = $_POST['address'];

$email = $_POST['email'];

$mobile =$_POST['mobile'];

$message =$_POST['message'];

$insert = "insert into feedback_details(first_name,last_name,address,email,mobile,message) values ('$first_name','$last_name','$address','$email','$mobile','$message')";

    $result = mysqli_query($con, $insert);
    if($result){

    echo "informaton send Successfull";
    }
         
    else{

        echo"unsuccessfull Connection".mysqli_error($con);
    }
?>