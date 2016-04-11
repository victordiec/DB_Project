<?php
  //Start the session
  session_start();
  print_r($_SESSION);

  $directorId = $_GET['directorId'];

  include 'core/db.php';
  //Test Query for now
  $query = "SELECT * FROM Director WHERE directorId='$directorId'";
  $result = pg_query($dbconn, $query);// or die('Query failed: ' . pg_last_error());
  $directorInfo = pg_fetch_assoc($result);

//returns all movies that director has been apart of
  $query = "SELECT movieId FROM Directs WHERE directorId='$directorId'";
  $result = pg_query($dbconn, $query);// or die('Query failed: ' . pg_last_error());
  $movies = pg_fetch_assoc($result);

  // $query = "SELECT * FROM Movie m WHERE m.movieId='$movieId'";
  // $average_rating

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $directorInfo["name"];?></title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/portfolio-item.css" rel="stylesheet">
    <link href="css/thumbnail-gallery.css" rel="stylesheet">
    <link href="css/freelancer.css" rel="stylesheet">
    <link href="css/dbcustom.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

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
              <a class="navbar-brand" href="home.php">Movie Database</a>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                  <li class="hidden">
                      <a href="#page-top"></a>
                  </li>
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

        <!-- Portfolio Item Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 id = "moviename" class="page-header">
                    <?php echo $directorInfo['firstname'] . "  " . $directorInfo['lastname'];?>
                    <!-- <small id = ""> </small> -->
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">
            <p id="demo"></p>

            <div class="col-md-8">
                <!-- <img class="img-responsive" src="img/FrontWallpaper/bvs.jpg" alt="http://placehold.it/750x500"> -->
                <div id="myCarousel" class="carousel slide" data-ride="carousel">

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <!-- <a href="<?php echo $movieInfo['trailerlink']?>"> -->
                        
                          <img src="img/directorPics/<?php echo $directorId;?>.jpg">
                       
                    </div>
                  </div>
                </div>
            </div>

            <div class="col-md-4">
                <h3>Country</h3>
                  <p>  <?php echo $directorInfo['country'];?> </p>
                <h3>Movies Directed</h3>
                  <p>  <?php echo $movies;?> </p>
            </div>

        </div>
        <!-- /.row -->

        <!-- Related Projects Row -->
        <div class="row">

            <div class="col-lg-12">
                <h3 class="page-header"></h3>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive portfolio-item"
                     src="http://placehold.it/500x300" alt="">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
                </a>
            </div>

        </div>
        <!-- /.row -->


        <!-- Video / Generic Modal -->
        <div class="modal fade" id="mediaModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-body">
              <!-- content dynamically inserted -->
            </div>
          </div>
        </div>


        <hr>

        <!-- Footer -->
        <footer>

        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/youtube.js"></script>
    <script src="js/rating.js"></script>
    <!-- <script src="js/getmovie.js"></script> -->

</body>

</html>
