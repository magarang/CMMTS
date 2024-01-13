<?php 
$conn= new mysqli('localhost','root','','ihomp')or die("Could not connect to mysql".mysqli_error($con));


$dname = $_GET['devicename'];
$long = $_GET['longtitude'];
$lat = $_GET['latitude'];


$sql = "INSERT INTO MyGuests (devicename, longtitude, latitude)
VALUES ('".$dname."', '".$long."', '".$lat."')";



if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>