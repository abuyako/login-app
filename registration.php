<?php

session_start();

// After Registration we want to redirect user to the login page
header('location:login.php');

// create connection
$con = mysqli_connect('localhost', 'root', 'kiduku', 'userregistration');

// select database
mysqli_select_db($con, 'userregistration');

// create variable that will stored in those variables.form-control.
$name = $_POST['username'];
$pass =$_POST['password'];

//writting the query variable to select table names
$s = "select * from usertable where name = '$name'";

//now create a result variable to store the query
$result = mysqli_query($con, $s);

//varble to count number of rows in the table
$num = mysqli_num_rows($result);

//check the connection

if($num == 1){
    echo "username id already taken";
}else {
    $reg = "insert into usertable(name , password) values ('$name' , '$pass')";
    mysqli_query($con, $reg);
    echo "Registration Successful";
}



?>