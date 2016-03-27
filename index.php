<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Online PDS</title>

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
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#customer">Customer</a>
                    </li>
                    <li>
                        <a href="#shop">Shop</a>
                    </li>
                    <li>
                        <a href="#register">Register</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- Header -->
    <a name="about"></a>
    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1 style="">SIGN-IN.BOOK.RECEIVE</h1>
                        <h3 style=""> A Burden free ration shop</h3>
                        <hr class="intro-divider">
                       
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->

    <!-- Page Content -->

	<a  name="customer"></a>
    <div class="content-section-a">

        <div class="container">
            <div class="row" >
                <div class="col-lg-5 col-sm-6" style="border: 5px solid pink;">
                  <br><h2>Customer Login</h2><br>
			<p style="color:red;">
<?php if(!empty($_GET["cust_message"])){
print $_GET["cust_message"];

}


 ?></p>
                    <div class="clearfix"></div>
                    <form class="form-horizontal" method="post" action="customer.php" role="form">
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label text-left">Username:</label>
    <div class="col-lg-10">
      <input type="text" class="form-control" name="cust_userid" placeholder="Username">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword1" class="col-lg-2 control-label">Password</label>
    <div class="col-lg-10">
      <input type="password" class="form-control" name="cust_pwd" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
     
    </div>
  </div>
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
</form>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="img/customer-login.jpg" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->
<a  name="shop"></a>
    <div class="content-section-b">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6" style="border: 5px solid pink;">
			<br><h2>Shop Login</h2><br>
                    <form class="form-horizontal" role="form">
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label text-left">Username:</label>
    <div class="col-lg-10">
      <input type="text" class="form-control" id="shop_userid" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword1" class="col-lg-2 control-label">Password</label>
    <div class="col-lg-10">
      <input type="password" class="form-control" id="shop_pwd" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
     
    </div>
  </div>
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
</form>
                </div>
                <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                    <img class="img-responsive" src="img/admin.png" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-b -->
<a  name="register"></a>
    <div class="content-section-a">

        <div class="container">

            <div class="row">

 <div class="col-md-8 col-md-offset-2">
<br>
<center><h2> Sign up</h2></center>
<br>
<center>
<p style="color:red;">
<?php if(!empty($_GET["reg_message"])){
print $_GET["reg_message"];

}


 ?></p></center>
              <center> <form class="form-horizontal" action="register.php" method="POST" role="form">
 <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label ">Username:</label>
    <div class="col-lg-10">
      <input type="text" class="form-control" name="reg_usrid" placeholder="Username">
    </div>
  </div>
<div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label text-left">Age:</label>
    <div class="col-lg-10">
      <input type="text" class="form-control" name="reg_age" placeholder="Age">
    </div>
  </div>
<div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label text-left">Ration Card No:</label>
    <div class="col-lg-10">
      <input type="text" class="form-control" name="reg_rcno" placeholder="Ration card No">
    </div>
  </div>
<div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label text-left">Ration Shop No:</label>
    <div class="col-lg-10">
      <input type="text" class="form-control" name="reg_rsno" placeholder="Ration shop No">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label text-left">Aadhar ID:</label>
    <div class="col-lg-10">
      <input type="text" class="form-control" name="reg_aid" placeholder="Aadhar ID">
    </div>
  </div>
<div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label text-left">Phone No:</label>
    <div class="col-lg-10">
      <input type="text" class="form-control" name="reg_phno" placeholder="Phone No">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword1" class="col-lg-2 control-label">Password</label>
    <div class="col-lg-10">
      <input type="password" class="form-control" name="reg_pwd" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword1" class="col-lg-2 control-label">Confirm Password</label>
    <div class="col-lg-10">
      <input type="password" class="form-control" name="reg_cnfpwd" placeholder="Confirm Password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-default">Sign up</button>
    </div>
  </div>
</form></center>
</div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

	<a  name="contact"></a>
    <div class="banner">

        <div class="container">

            <div class="row">
               
                
               
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.banner -->

   

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
