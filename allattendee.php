<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Attendee Details</title>
    <style>
            table{
                border-collapse:collapse;
                width:100%;
                color:#3897f0;
                font-family:monospace;
                font-size:18px;
                text-align:left;
                margin-top:20px;

            }
            th{
                background-color:#3897f0;
                color:white; 
            }
            
        </style>
</head>
<body>
    <div class="main">
        <center><h1>All Attendees List</h1></center>
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
        </tr>
        <?php

        $conn = mysqli_connect('localhost','root','','kaggledays');

        if($conn-> connect_error){
            die("Connection failed". $conn-> connect_error);
        }

        $sql = "SELECT id,username,emailid,contactnumber,linkedinprofile,kaggleprofile,githubprofile from users";
        
        $result = $conn-> query($sql);

        if($result-> num_rows > 0){
            while($row = $result-> fetch_assoc()){
                echo "<tr><td>". $row["id"] ."</td><td>". $row["username"] ."</td><td>". $row["emailid"] ."</td><td>". $row["contactnumber"] ."</td><td>". $row["linkedinprofile"] ."</td><td>"
                . $row["kaggleprofile"] ."</td><td>". $row["githubprofile"] ."</td><tr>"; 
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
