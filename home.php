<?php
  //Start the session
  session_start();
  // print_r($_SESSION);
  //
  // include 'core/db.php';
  // //Test Query for now
  // $query = "SELECT * FROM Movie m WHERE m.movieId=";
  // $result = pg_query($dbconn, $query);// or die('Query failed: ' . pg_last_error());
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Movie Database</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/thumbnail-gallery.css" rel="stylesheet">
    <link href="css/freelancer.css" rel="stylesheet">
    <link href="css/dbcustom.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header page-scroll">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#page-top">Movie Database</a>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                  <li class="hidden">
                      <a href="#page-top"></a>
                  </li>
                  <!-- <li class="page-scroll">
                      <a href="#portfolio">Portfolio</a>
                  </li>
                  <li class="page-scroll">
                      <a href="#about">About</a>
                  </li> -->
                  <li class="page-scroll">
                      <a href="#WillGoToTheAccountPage">My Account</a>
                  </li>
                  <li class="page-scroll" id="signout">
                      <a href="index.php">Sign Out</a>
                  </li>
              </ul>
          </div>
          <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
  </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header">Top Movies</h1>
            </div>

            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="MoviePage.php?movieId=00001">
                    <img class="img-responsive" src="img/moviePos/00001.jpg" alt="">
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="MoviePage.php?movieId=00002">
                    <img class="img-responsive" src="img/moviePos/00002.jpg" alt="">
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="MoviePage.php?movieId=00003">
                    <img class="img-responsive" src="img/moviePos/00003.jpg" alt="">
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="MoviePage.php?movieId=00004">
                    <img class="img-responsive" src="img/moviePos/00004.jpg" alt="">
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="MoviePage.php?movieId=00005">
                    <img class="img-responsive" src="img/moviePos/00005.jpg" alt="">
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="MoviePage.php?movieId=00006">
                    <img class="img-responsive" src="img/moviePos/00006.jpg" alt="">
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="MoviePage.php?movieId=00007">
                    <img class="img-responsive" src="img/moviePos/00007.jpg" alt="">
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="MoviePage.php?movieId=00008">
                    <img class="img-responsive" src="img/moviePos/00008.jpg" alt="">
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="MoviePage.php?movieId=00009">
                    <img class="img-responsive" src="img/moviePos/00009.jpg" alt="">
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="MoviePage.php?movieId=00010">
                    <img class="img-responsive" src="img/moviePos/00010.jpg" alt="">
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="MoviePage.php?movieId=00011">
                    <img class="img-responsive" src="img/moviePos/00011.jpg" alt="">
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="MoviePage.php?movieId=00012">
                    <img class="img-responsive" src="img/moviePos/00012.jpg" alt="">
                </a>
            </div>
        </div>

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/freelancer.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>
