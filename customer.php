<!DOCTYPE html>
<html lang="en">
<?php


?>
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
<?php
session_start();
$uname=$_POST["cust_userid"];
$pwd=$_POST["cust_pwd"];
$sql="select * from userdetails where username='$uname' and password='$pwd'";
$conn=mysqli_connect("localhost","nirmal","1234","ration");

$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) <=0){


header("location: index.php?cust_message=Invalid+login+credentials#customer");


}


$_SESSION["uid"]=$uname;

$sql="select cardno from userdetails where username='$uname'";
$result = mysqli_query($conn, $sql);
if($row = mysqli_fetch_assoc($result)){
$_SESSION["cardno"]=(int)$row["cardno"];
}
$cno=$_SESSION['cardno'];
$sql="select count(*) from userdetails where cardno='$cno'";
$result = mysqli_query($conn, $sql);
if($row = mysqli_fetch_row($result)){
$_SESSION['total']=intval($row);
}

$sql="select count(*) from userdetails where cardno='$cno' and age>=18";
$result = mysqli_query($conn, $sql);
if($row = mysqli_fetch_row($result)){
$_SESSION['cnt']=intval($row);
}

$total=$_SESSION['total'];
$cnt=$_SESSION['cnt'];
$rkg=(int)$cnt*4+(int)($total-$cnt)*2;
$skg=2;
$wkg=5;
$klit=9;


?>



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
		Welcome,<?php print $_SESSION["uid"];

?>
            </div>
</div>

</nav>
<br>
<br>
<br>
<br>
<center><h2>Ration Products Available:</h2></center>
<br><br>
<center><form method="POST" action="booking_success.php" role="form">

<div class="form-group">
<label>RICE:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="checkbox" name="rice" value="rice">
&nbsp;&nbsp;&nbsp;&nbsp;
<label>Enter Kg:</label>
<input type="number" name="ricekg"max="<?php print $rkg ?>"></div><br><br>
<div class="form-group">
<label>WHEAT:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="checkbox" name="wheat" value="wheat">
&nbsp;&nbsp;&nbsp;&nbsp;
<label>Enter Kg:</label>
<input type="number" name="wheatkg"max="<?php print $wkg ?>"></div><br><br>
<div class="form-group">
<label>SUGAR:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="checkbox" name="sugar" value="sugar">
&nbsp;&nbsp;&nbsp;&nbsp;
<label>Enter Kg:</label>
<input type="number" name="sugarkg"max="<?php print $skg ?>"></div><br><br>
<div class="form-group">
<label>KEROSINE:</label>
<input type="checkbox" name="kerosine" value="kerosine">
<label>Enter litres:</label>
<input type="number" name="kerosinelitre" max="<?php print $klit ?>"></div><br>
<br><div class="form-group">
<label>TOOR DHALL:</label>
<input type="checkbox" name="toor" value="toor">
&nbsp;&nbsp;&nbsp;&nbsp;
<label>Enter Kg:</label>
<input type="number" name="toorkg" max="2"></div>
<br><br>
<div class="form-group">
<label>URID DHALL:</label>
&nbsp;
<input type="checkbox" name="urid" value="urid">
&nbsp;&nbsp;
<label>Enter Kg:</label>
<input type="number" name="uridkg" max="2">
</div><br><br>
<div class="form-group">
<label>Palmolein Oil:</label>
&nbsp;
<input type="checkbox" name="oil" value="oil">
<label>Enter litres:</label>
<input type="number" name="oillitre" max="2"></div>
<br><br>
<input type="submit" value="Book Products">

</form>
</center>

</body>
