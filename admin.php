<?php

$conn = mysqli_connect('localhost','root','','kaggledays');

if(!$conn){
    echo "Not connected";
}

if(isset($_POST['submit'])){
$username = $_POST['username'];
$adminpassword = $_POST['adminpassword'];


$sql = "SELECT emailid,adminpassword from adminlogin where emailid='$username','$adminpassword'";

if(!mysqli_query($conn,$sql)){
    echo "Not inserted";
}
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     
</head>

<style>
.form{
    width:300px;
    margin-left:570px;
}
@media screen and (max-width:670px){
    .form{
    width:300px;
    margin-left:170px;
}   
}
</style>
<body><br><br><br>
<script>
    function validateform(){
        var emailid = document.forms["adminlogin"]["emailid"]; 
        var adminpassword = document.forms["adminlogin"]["adminpassword"];

        if(emailid == "" || emailid.indexOg("@")<=0 || emailid.indexOg(".")){
            document.getElementById('e').innerHTML = "Please enter email";  
        }
        if(adminpassword == "" || !is_NaN(adminpassword) || adminpassword.lenght < 2 || adminpassword.lenght > 10){
        document.getElementById('p').innerHTML = "Please enter password";  
    }
    }
</script>
    <div class="form">
     <img src="assets/img/logo1.png" alt="" width="320px;" height="100px;">
    <center><h2>Admin Login</h2></center>
    <br>
    <form action="adminloginpage.html" name="adminlogin" method="POST" onsubmit="return validateform()">
    <input type="email" class="form-control" placeholder="Enter email" name="emailid" id="name" required>
    <span id="e"></span>
    <br>
    <input type="password" class="form-control" placeholder="Enter Password"  name="adminpassword" id="pass" required>
    <span id="p"></span>
    <br>
    <button type="submit" name="submit" class="btn btn-primary"  id="submit">Login</button>
    </form>
    <br><br>
   <p> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;Don't Have an Account? <a href="signup.php">Signup</a></p>
    </div>
</body>
</html>