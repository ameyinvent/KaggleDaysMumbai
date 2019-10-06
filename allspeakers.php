<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Speakers Details</title>
    <style>
            table{
                border-collapse:collapse;
                width:50%;
                color:#3897f0;
                font-family:monospace;
                font-size:14px;
                text-align:left;
                margin-top:10px;

            }
            th{
                background-color:#3897f0;
                color:white; 
            }
            
        </style>
</head>
<body>


<div class="main">
    <center><h1>Details of all Speakers</h1></center>
</div>

    <table border="1">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email Id</th>
            <th>Contact number</th>
            <th>LinkedIn</th>
            <th>Kaggle Id</th>
            <th>Github Id</th>
            <th>Session Title</th>
            <th>Description</th>
            <th>Session Format</th>
            <th>Track</th>
            <th>Level</th>
            <th>Notes</th>
            <th>Speaker Tag-line</th>
            <th>Speaker Biography</th>
            <th>Speaker Photo</th>
            <th>Twitter Id</th>
            <th>Website</th>
        </tr>
        <?php

        $conn = mysqli_connect('localhost','root','','kaggledays');

        if($conn-> connect_error){
            die("Connection failed". $conn-> connect_error);
        }

        $sql = "SELECT id,username,emailid,contactnumber,linkedinprofile,kaggleprofile,githubprofile,
                sessiontitle,userdescription,sessionformat,track,userlevel,notes,speakertagline,speakerbiography,speakerphoto,twitter,website from users";
        
        $result = $conn-> query($sql);

        if($result-> num_rows > 0){
            while($row = $result-> fetch_assoc()){
                echo "<tr><td>". $row["id"] ."</td><td>". $row["username"] ."</td><td>". $row["emailid"] ."</td><td>". $row["contactnumber"] ."</td><td>". $row["linkedinprofile"] ."</td><td>"
                . $row["kaggleprofile"] ."</td><td>". $row["githubprofile"] ."</td><td>". $row["sessiontitle"] ."</td><td>". $row["userdescription"] ."</td><td>". $row["sessionformat"] ."</td><td>"
                . $row["track"] ."</td><td>". $row["userlevel"] ."</td><td>". $row["notes"] ."</td><td>". $row["speakertagline"] ."</td><td>". $row["speakerbiography"] ."</td><td>". $row["speakerphoto"] ."</td><td>"
                . $row["twitter"] ."</td><td>". $row["website"] ."</td><tr>";
            }
            echo "</table>";
        }
        else{
            echo "0 Results";
        }

        $conn-> close();



?>
    </table>
</body>
</html>
