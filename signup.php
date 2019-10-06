<?php

$conn = mysqli_connect('localhost','root','','kaggledays');

if(!$conn){
    echo "Not connected";
}
if(isset($_POST['submit'])){
$emailid = $_POST['emailid'];
$username = $_POST['username'];
$adminpassword = $_POST['adminpassword'];

$sql = "INSERT INTO adminlogin (emailid,username,adminpassword) VALUES ('$emailid','$username','$adminpassword')";
if($sql == true){
    header("location:admin.php");
}

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
    var emailid = document.forms["signuppage"]["emailid"]; 
    var username = document.forms["signuppage"]["username"];
    var adminpassword = document.forms["signuppage"]["adminpassword"];


    if(emailid == "" || emailid.indexOg("@")<=0 || emailid.indexOg(".")){
        document.getElementById('e').innerHTML = "Please enter email";  
    }
    if(username == "" || !is_NaN(username) || username.lenght < 2 || attendeename.lenght > 20){
        document.getElementById('n').innerHTML = "Please enter name";  
    }
    if(adminpassword == "" || !is_NaN(adminpassword) || adminpassword.lenght < 2 || adminpassword.lenght > 10){
        document.getElementById('p').innerHTML = "Please enter password";  
    }
    }
    

</script>
    <div class="form">
    <center><h3>Admin Signup</h3></center>
    <br>
    <form action="signup.php" name="signuppage" method="POST" onsubmit="return validateform()">
    <input type="email" class="form-control" required placeholder="Enter Email" name="emailid" id="name" >
    <span id="e"></span>
    <br>
    <input type="text" class="form-control" required placeholder="Enter Name"  name="username" id="pass">
    <span id="n"></span>
    <br>
    <input type="password" class="form-control" required placeholder="Enter Password"  name="adminpassword" id="pass">
    <span id="p"></span>
    <br>
    <button type="submit" name="submit"  class="btn btn-primary"  id="submit">Signup</button>
    </form>
    <br><br>
   <p> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;Have an Account? <a href="admin.php">Login</a></p>
    </div>
</body>
</html>