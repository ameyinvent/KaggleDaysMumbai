<!-- 
<?php

$conn = mysqli_connect('localhost','root','','kaggledays');

if(!$conn){
    echo "Not connected";
}

if(isset($_POST['submit'])){
$attendeename = $_POST['attendeename'];
$emailid = $_POST['emailid'];
$contactnumber = $_POST['contactnumber'];
$linkedin = $_POST['linkedin'];
$kaggle = $_POST['kaggle'];
$github = $_POST['github'];

$sql = "INSERT INTO eventusers (attendeename,emailid,contactnumber,linkedin,
        kaggle,github) VALUES ('$attendeename','$emailid','$contactnumber',
        '$linkedin','$kaggle','$github')";

if(!mysqli_query($conn,$sql)){
    echo "Not inserted";
}        

}


?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="theme-color" content="#ffffff"/>
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="favicon.png">
    <link rel="icon" href="assets/img/fevicon.png">
    <link rel="manifest" href="/manifest.json">
    <title>
        Kaggle Days Mumbai
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   
</head>
<style>
.form{
    width: 400px;
    margin-left: 440px;
}
.main-form-section{
    width: 100%;
    height: 100%;
}
.form{
    margin-left: 400px;
    width: 500px;
    /* border:1px solid gray; */
}
.navbar-brand img{
    height: 70px;
}
.footer{
    width: 100%;
    font-size: 20px;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
@media screen and (max-width:670px){
    .form{
        margin-left:70px;
}
}
</style>

<body>
<script>
    function validateform(){
        var attendeename = document.forms["attendeeform"]["attendeename"];
        var emailid = document.forms["attendeeform"]["emailid"];
        var contactnumber = document.forms["attendeeform"]["contactnumber"];
        var linkedin = document.forms["attendeeform"]["linkedin"];
        var kaggle = document.forms["attendeeform"]["kaggle"];
        var github = document.forms["attendeeform"]["github"];

        if(attendeename == "" || !is_NaN(attendeename) || attendeename.lenght < 2 || attendeename.lenght > 20){
            document.getElementById('n').innerHTML = "Please enter name";  
        }
        if(emailid == "" || emailid.indexOg("@")<=0 || emailid.indexOg(".")){
            document.getElementById('e').innerHTML = "Please enter email";  
        }
        if(contactnumber == "" || !is_NaN(contactnumber) || contactnumber.lenght < 10 || contactnumber.lenght > 10){
            document.getElementById('cn').innerHTML = "Please enter proper mobile number";

        }
        if(linkedin == "" || !is_NaN(linkedin)){
            document.getElementById('lp').innerHTML = "Please enter LinkedInProfile url";
        }
        if(kaggle == "" || !is_NaN(kaggle)){
            document.getElementById('kp').innerHTML = "Please enter KaggleProfile url";
        }
        if(github == "" || !is_NaN(github)){
            document.getElementById('gp').innerHTML = "Please enter GithubProfile url";
        }

    }
</script>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#"><img src="assets/img/logo1.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item active">
                      <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="index.html">Contact Us</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="index.html">Events</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="form.php">Call for Speaker</a>
                    </li>
                  </ul>
                </div>
              </nav>


    <center><h2>Form-Registration</h2></center>
    <br>
    <div class="form">
        <form action="form2.php" name="attendeeform" method="POST" onsubmit="return validateform()">
        Name<br>
        <input type="text" placeholder="Your answer" required class="form-control" id="name" name="attendeename"><br><br>
        <span id="n"></span>
        E-mail id<br>
        <input type="email" placeholder="Your answer" required class="form-control" id="email" name="emailid"><br><br>
        <span id="e"></span>
        Contact Number<br>
        <input type="text" placeholder="Your answer" required class="form-control" id="contactnumber" name="contactnumber"><br><br>
        <span id="cn"></span>
        LinkedIn Profile<br>
        <input type="text" placeholder="Your answer" required class="form-control" id="linkedinprofile" name="linkedin"><br><br>
        <span id="lp"></span>
        Kaggle Profile<br>
        <input type="text" placeholder="Your answer" required class="form-control" id="kaggleprofile" name="kaggle"><br><br>
        <span id="kp"></span>
        Github Profile<br>
        <input type="text" placeholder="Your answer"  required class="form-control" id="githubprofile" name="github"><br><br>
        <span id="gp"></span>
        <button type="submit" class="btn btn-primary" required name="submit">Submit</button>
        </form>
    </div>

<br><br>
</body>
</html>