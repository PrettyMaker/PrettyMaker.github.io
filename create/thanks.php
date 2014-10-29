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
$background = mysqli_real_escape_string($con, $_POST['background']);
$s1h = mysqli_real_escape_string($con, $_POST['s1h']);
$s1d = mysqli_real_escape_string($con, $_POST['s1d']);
$s1l = mysqli_real_escape_string($con, $_POST['s1l']);
$s2h = mysqli_real_escape_string($con, $_POST['s2h']);
$s2d = mysqli_real_escape_string($con, $_POST['s2d']);
$s2l = mysqli_real_escape_string($con, $_POST['s2l']);
$s3h = mysqli_real_escape_string($con, $_POST['s3h']);
$s3d = mysqli_real_escape_string($con, $_POST['s3d']);
$s3l = mysqli_real_escape_string($con, $_POST['s3l']);
$s4h = mysqli_real_escape_string($con, $_POST['s4h']);
$s4d = mysqli_real_escape_string($con, $_POST['s4d']);
$s4l = mysqli_real_escape_string($con, $_POST['s4l']);

$sql="INSERT INTO pretty (theme, title, description, background, s1h, s1d, s1l, s2h, s2d, s2l, s3h, s3d, s3l, s4h, s4d, s4l)
VALUES ('$theme', '$title', '$description', '$background', '$s1h', '$s1d', '$s1l', '$s2h', '$s2d', '$s2l', '$s3h', '$s3d', '$s3l', '$s4h', '$s4d', '$s4l')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
$result = mysqli_query($con,"SELECT Id FROM table ORDER BY Id DESC LIMIT 1");

echo"<html>
  <head>
    <title>". $title . "</title>
    <link rel=\"stylesheet\" href=\"" . $theme . "\">
    <link href=\"http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic\" rel=\"stylesheet\" type=\"text/css\">
    <style>
      .intro {
  display: table;
  width: 100%;
  height: 80%;
  padding: 100px 0;
  text-align: center;
  color: #000;
  background: url(" . $background . ") no-repeat bottom center scroll;  background-color: #000;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
  -o-background-size: cover;
}

.intro .intro-body {
  display: table-cell;
  vertical-align: middle;
}
.intro .intro-body .brand-heading {
  font-size: 40px;
}
.intro .intro-body .intro-text {
  font-size: 18px;
}
    </style>

  
</head>
  <body> <p hidden>" . $result . "</p>
        <!-- Intro Header -->
    <header class=\"intro\">
        <div class=\"intro-body\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-8 col-md-offset-2\">
                        <strong><h1 >" . $title . "</h1></strong>
                        <p class=\"intro-text\">" . $description . "</p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Service Section -->
     <section id=\"services\" class=\"services bg-primary\">
        <div class=\"container\">
            <div class=\"row text-center\">
                <div class=\"col-lg-10 col-lg-offset-1\">
                    <h2>What you can find here</h2>
                    <hr class=\"small\">
                    <div class=\"row\">
                        <div class=\"col-md-3 col-sm-6\">
                            <div class=\"service-item\">
                                <h4>
                                    <strong>" . $s1h . "</strong>
                                </h4>
                                <p>" . $s1d . "</p>
                                <a href=\"" . $s1l . "\" style=\"color: #fff\"><b>Learn More</b></a>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-6\">
                            <div class=\"service-item\">
                                <h4>
                                    <strong>" . $s2h . "</strong>
                                </h4>
                                <p>" . $s2d . "</p>
                                <a href=\"" . $s2l . "\" style=\"color: #fff\"><b>Learn More</b></a>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-6\">
                            <div class=\"service-item\">
                                <h4>
                                    <strong>" . $s3h . "</strong>
                                </h4>
                                <p>" . $s3d . "</p>
                                <a href=\"" . $s3l . "\" style=\"color: #fff\"><b>Learn More</b></a>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-6\">
                            <div class=\"service-item\">
                                <h4>
                                    <strong>" . $s4h . "</strong>
                                </h4>
                                <p>" . $s4d . "</p>
                                <a href=\"" . $s4l . "\" style=\"color: #fff\"><b>Learn More</b></a>
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
  </body>
</html>";

mysqli_close($con);
?>
