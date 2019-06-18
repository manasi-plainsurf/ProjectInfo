<?php
$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "project";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed" . $conn->connect_error);
}
echo"connected succesfully ";

$Projectname = $_POST['Projectname'];
$TeamName = $_POST['TeamName'];
$TeamSize = $_POST['TeamSize'];
$StartDate = $_POST['StartDate'];
$EndDate= $_POST['EndDate'];
$Status= $_POST['Status'];

 $query = "INSERT INTO info(Projectname,TeamName,TeamSize,StartDate,EndDate,Status)VALUES('$Projectname','$TeamName','$TeamSize','$StartDate','$EndDate','$Status')";
            if (mysqli_query($conn, $query)) {
                echo " records saved";
            } else {
                echo'not saved';
            }
            
?>