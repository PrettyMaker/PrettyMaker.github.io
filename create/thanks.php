<?php
$con=mysqli_connect("localhost","root","Sandman1","prettymaker");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security
$theme = mysqli_real_escape_string($con, $_POST['theme']);
$title = mysqli_real_escape_string($con, $_POST['title']);
$description = mysqli_real_escape_string($con, $_POST['description']);
$image = mysqli_real_escape_string($con, $_POST['imageurl']);
$s1h = mysqli_real_escape_string($con, $_POST['s1h']);
$s1d = mysqli_real_escape_string($con, $_POST['s1d']);
$s1l = mysqli_real_escape_string($con, $_POST['s1l']);
$s1h = mysqli_real_escape_string($con, $_POST['s1h']);
$s1d = mysqli_real_escape_string($con, $_POST['s1d']);
$s1l = mysqli_real_escape_string($con, $_POST['s1l']);

$sql="INSERT INTO tips1 (username, tip, description, location, type)
VALUES ('$name', '$tip', '$description', '$location', '$type')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "Thanks for the tip! <br>";
while($row = mysqli_fetch_array($result)) {
    echo "Share your tip with <a href=tips.php?id=".$row['uname'].">this link</a>";
}


mysqli_close($con);
?>
