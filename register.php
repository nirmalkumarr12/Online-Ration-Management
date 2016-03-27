<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registration</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <center><h1 style="color:red;" class="navbar-brand centernav">Online Public Distribution System</h1></center>

            </div>
</div>
</nav>
<br>
<br>
<br>
<br>



        <div class="container">
            <div class="row">
                <div class="col-lg-offset-2 col-lg-10"">
<br>
<br>
<h3>
		<?php
$servername = "localhost:3306";
$username = "root";
$password = "1234";
try{
$conn = mysql_connect($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
   print "Connection failed";

}
$db_selected = mysql_select_db('ration', $conn);

$usrid=$_POST["reg_usrid"];
$rcno=$_POST["reg_rcno"];
$rsno=$_POST["reg_rsno"];
$aid=$_POST["reg_aid"];
$phno=$_POST["reg_phno"];
$pwd=$_POST["reg_pwd"];
$sql="insert into userdetails values('$usrid',$rcno,$rsno,$aid,$phno,'$pwd')";
$retval = mysql_query( $sql, $conn );
if(!$retval){
header("location: index.php?reg_message=Error+on+Insert#register");

}
else{
print "Registration Successful. Click here to signin ";


}}
catch(Exception $e){

print $e->getMessage();
}
?>
</h3>
<a href="index.html">Sign In</a>
</div>
</div>

</body>


</html>



