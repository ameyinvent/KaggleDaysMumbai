
<?php

$conn = mysqli_connect('localhost','root','','kaggledays');

if(!$conn){
    echo "Not connected";
}
if(isset($_POST['submit'])){
$username = $_POST['username'];
$emailid = $_POST['emailid'];
$contactnumber = $_POST['contactnumber'];
$linkedinprofile = $_POST['linkedinprofile'];
$kaggleprofile = $_POST['kaggleprofile'];
$githubprofile = $_POST['githubprofile'];
$sessiontitle = $_POST['sessiontitle'];
$userdescription = $_POST['userdescription'];
$sessionformat = $_POST['sessionformat'];
$track = $_POST['track'];
$userlevel = $_POST['userlevel'];
$notes = $_POST['notes'];
$speakertagline = $_POST['speakertagline'];
$speakerbiography = $_POST['speakerbiography'];
$speakerphoto = $_POST['speakerphoto'];
$twitter = $_POST['twitter'];
$website = $_POST['website'];

$sql = "INSERT INTO users (username,emailid,contactnumber,linkedinprofile,kaggleprofile,githubprofile,sessiontitle,userdescription,
        sessionformat,track,userlevel,notes,speakertagline,speakerbiography,speakerphoto,twitter,website) VALUES ('$username','$emailid','$contactnumber',
        '$linkedinprofile','$kaggleprofile','$githubprofile','$sessiontitle','$userdescription','$sessionformat','$track','$userlevel','$notes','$speakertagline','$speakerbiography',
        '$speakerphoto','$twitter','$website')";

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
        var username = document.forms["speakerform"]["username"];
        var emailid = document.forms["speakerform"]["emailid"];
        var contactnumber = document.forms["speakerform"]["contactnumber"];
        var linkedinprofile = document.forms["speakerform"]["linkedinprofile"];
        var kaggleprofile = document.forms["speakerform"]["kaggleprofile"];
        var githubprofile = document.forms["speakerform"]["githubprofile"];
        var sessiontitle = document.forms["speakerform"]["sessiontitle"];
        var description = document.forms["speakerform"]["userdescription"];
        var sessonformat = document.forms["speakerform"]["sessionformat"];
        var track = document.forms["speakerform"]["track"];
        var level = document.forms["speakerform"]["userlevel"];
        var notes = document.forms["speakerform"]["notes"];
        var speakertagline = document.forms["speakerform"]["speakertagline"];
        var speakerbiography = document.forms["speakerform"]["speakerbiography"];
        var speakerphoto = document.forms["speakerform"]["speakerphoto"];
        var twitter = document.forms["speakerform"]["twitter"];
        var website = document.forms["speakerform"]["website"];
        
        if(username == "" || !is_NaN(username) || username.lenght < 2 || username.lenght > 20){
            document.getElementById('n').innerHTML = "Please enter name";  
        }
        if(emailid == "" || emailid.indexOg("@")<=0 || emailid.indexOg(".")){
            document.getElementById('e').innerHTML = "Please enter email";  
        }
        if(contactnumber == "" || !is_NaN(contactnumber) || contactnumber.lenght < 10 || contactnumber.lenght > 10){
            document.getElementById('cn').innerHTML = "Please enter proper mobile number";

        }
        if(linkedinprofile == "" || !is_NaN(linkedinprofile)){
            document.getElementById('lp').innerHTML = "Please enter LinkedInProfile url";
        }
        if(kaggleprofile == "" || !is_NaN(kaggleprofile)){
            document.getElementById('kp').innerHTML = "Please enter KaggleProfile url";
        }
        if(githubprofile == "" || !is_NaN(githubprofile)){
            document.getElementById('gp').innerHTML = "Please enter GithubProfile url";
        }
        if(sessiontitle == "" || !is_NaN(sessiontitle)){
            document.getElementById('sp').innerHTML = "Please enter Session title";
        }
        if(description == "" || !is_NaN(description)){
            document.getElementById('d').innerHTML = "Please enter Description";
        }
        if(notes == "" || !is_NaN(notes)){
            document.getElementById('nt').innerHTML = "Please enter notes";
        }
        if(speakertagline == "" || !is_NaN(speakertagline)){
            document.getElementById('stl').innerHTML = "Please enter tag-line";
        }
        if(speakerbiography == "" || !is_NaN(speakerbiography)){
            document.getElementById('sb').innerHTML = "Please enter your biography";
        }
        if(twitter == "" || !is_NaN(twitter)){
            document.getElementById('t').innerHTML = "Please enter TwitterProfile url";
        }
        if(website == "" || !is_NaN(website)){
            document.getElementById('web').innerHTML = "Please enter Your Website url";
        }
        

    }

</script>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#"><img src="assets/img/logo1.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="mobile-menu" >
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

                <!-- <ul class="d-lg-none"  id="mobile-menu">
    <li class="nav-item">
      <a class="nav-link" href="#">Link 1</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link 2</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link 3</a>
    </li>
  </ul> -->

              </nav>

    
    <div class="main-form-section">
        <center><h2>Registration of Speaker</h2></center>
    <br><br>
        <div class="form">
        <form action="form.php" name="speakerform" method="POST" onsubmit="return validateform()">
            <div class="form-group">
            <label for="">Name</label>
            <input type="text" placeholder="Your answer"  class="form-control" id="name" name="username" required><br>
            <span id="n"></span>
            </div>
            <div class="form-group">
            <label for="">Email-Id</label>
            <input type="email"  placeholder="Your answer" class="form-control"  id="email" name="emailid" required><br>
            <span id="e"></span>
            </div>
            <div class="form-group">
            <label for="">Contact Number</label> 
            <input type="text" placeholder="Your answer" class="form-control" id="contactnumber" name="contactnumber" required><br>
            <span id="cn"></span>
            </div>
            <div class="form-group">
            <label for="">LinkedIn Profile</label> 
            <input type="text" placeholder="Your answer" class="form-control" id="linkedinprofile" name="linkedinprofile" required><br>
            <span id="lp"></span>
        </div>

        <div class="form-group">
            <label for="">Kaggle Profile</label>
            <input type="text" placeholder="Your answer" class="form-control" id="kaggleprofile" name="kaggleprofile" required><br>
            <span id="kp"></span>
        </div>
        <div class="form-group">
            <label for="">Github Profile</label>
            <input type="text" placeholder="Your answer" class="form-control" id="githubprofile" name="githubprofile" required><br>
            <span id="gp"></span>
            </div>
            <div class="form-group">
            <label for="">Session Title</label>
            <input type="text" placeholder="Your answer" class="form-control" id="sessiontitle" name="sessiontitle" required><br>
            <span id="sp"></span>
        </div>

        <div class="form-group">
            <label for="">Description</label>
            <textarea name="userdescription" id="userdescription" class="form-control" cols="30" rows="10" required></textarea><br>
            <span id="d"></span>
            </div>

            <div class="form-group">
            <label for="">Session Format</label><br>
            <input type="radio" name="sessionformat" value="Tech Session" >Tech Session<br>
            <input type="radio"  name="sessionformat" value="Workshop">Workshop<br>
            </div>

            <div class="form-group">
           <label for="">Track</label><br>
            <input type="radio"  name="track" value="Kaggle Project">Kaggle Project<br>
            <input type="radio"  name="track" value="Machine Learning">Machine Learning<br>
            <input type="radio"  name="track" value="Deep Learning">Deep Learning<br>
            <input type="radio"  name="track" value="NLP">NLP<br><br>
        </div>
        <div class="form-group">
            <label for="">Level</label><br>
            <input type="radio"  name="userlevel" value="Intoductory and Overview">Intoductory and Overview<br>
            <input type="radio"  name="userlevel" value="Intermediate">Intermediate<br>
            <input type="radio"  name="userlevel" value="Advanced">Advanced<br>
            <input type="radio"  name="userlevel" value="Expert">Expert<br>
        </div>

        <div class="form-group">
        <label for="">Notes</label>
            <input type="text" placeholder="Your answer" class="form-control" id="notes" name="notes" required><br>
            <span id="nt"></span>
            </div>
            <div class="form-group">
            <label for="">Speaker Tag-Line</label>
            <input type="text" placeholder="Your answer"  required class="form-control" id="speakertagline" name="speakertagline"><br>
            <span id="stl"></span>
        </div>

        <div class="form-group">
            <label for="">Speaker Biography</label>
            <textarea name="speakerbiography" required id="speakerbiography" class="form-control" cols="30" rows="10"></textarea><br>
            <span id="sb"></span>
            </div>

<div class="form-group">
            <label for="">Speaker Photo</label>
            <input type="file" placeholder="Your answer"  required class="form-control" id="speakerphoto" name="speakerphoto"><br>
            <span id="sp"></span>
</div>
<div class="form-group">
           <label for=""> Twitter</label>
            <input type="text" placeholder="Your answer" required class="form-control" id="twitter" name="twitter"><br>
            <span id="t"></span>
        </div>

        <div class="form-group">
            <label for="">Website</label>
            <input type="text" placeholder="Your answer" required class="form-control" id="website" name="website"><br>
            <span id="web"></span>
            </div>
            <div class="form-group">
        
            <input type="checkbox">I agree that personal data shown on this page is shared with the organizer of 
            Kaggle Days Mumbai.Organizer may share your session and personal data publicly as (but not limited to) a part of a event schedule.<br>
            <br>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
    </div>


<br><br><br>


    
</body>
</html>