<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      
      height:auto;
      height: auto; /* Set width to 100% was max-height 300px */
      max-width: 552px; /*was max width 179 */
      margin: auto;
      min-height:200px;
  }


  /* quick reset */
* {
  margin: 0;
  padding: 0;
  border: 0;
}

/* relevant styles */
.img__wrap {
  position: relative;
  height: 200px;
  width: 257px;
}

.img__description {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(29, 106, 154, 0.72);
  color: #fff;
  visibility: hidden;
  opacity: 0;

  /* transition effect. not necessary */
  transition: opacity .2s, visibility .2s;
}

.img__wrap:hover .img__description {
  visibility: visible;
  opacity: 1;
}



  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }



  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="assign05_options.php">Home</a></li>
        <li><a href="results.php">View Workouts</a></li>
        <li><a href="assign05_log.php">Log Workouts</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="assign05_login.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="pic1.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Dedication</h3>
          <p>Hard Work</p>
        </div>      
      </div>

      <div class="item">
        <img src="pic2.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Heart</h3>
          <p>Soul</p>
        </div>      
      </div>


      
    <div class="item">
        <img src="pic3.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Heart</h3>
          <p>Soul</p>
        </div>      
      </div>

      <div class="item">
        <img src="pic4.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Heart</h3>
          <p>Soul</p>
        </div>      
      </div>


      <div class="item">
        <img src="pic5.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Heart</h3>
          <p>Soul</p>
        </div>      
      </div>
    </div>

    


   






    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  
<div class="container text-center">    
  <h3>What We Do</h3><br>
  <div class="row"> <a href="assign05_log.php">
    <div class="col-sm-4 img__wrap" >
      <img src="log_workout.jpg" class="img-responsive img__img" style="width:100%" title="Log" alt="Image">
      <p class="img__description">Log a Workout</p>
      <p>Log a Workout</p>
    </div>
    </a>
    <a href="results.php"><div class="col-sm-4 img__wrap"> 
      <img src="view_work.jpg" class="img-responsive img__img" style="width:100%" title="view_work" alt="Image">
      <p class="img__description">View Workouts</p>
      <p>View Workouts</p>    
    </div>
    </a>
    <div class="col-sm-4">
      <div class="well">
       <p>Achieve your Goals!</p>
      </div>
      <div class="well">
       <p>Measure your Progress!</p>
      </div>
    </div>
  </div>
</div><br>

<!-- <footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer> -->






<!-- Footer -->
<footer class="page-footer font-small blue pt-4">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <h5 class="text-uppercase">About us</h5>
        <p>We are a small startup comapany working out of Rexburg</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">Information</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Find friends</a>
          </li>
          <li>
            <a href="#!">Motivation</a>
          </li>
          <li>
            <a href="#!">Contact</a>
          </li>
          <li>
            <a href="#!">Get Hired</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">Helpful Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Follow Us</a>
          </li>
          <li>
            <a href="#!">Information</a>
          </li>
          <li>
            <a href="#!">Schedule</a>
          </li>
          <li>
            <a href="#!">Compete</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href=""> My Workout</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

</body>
</html>
