<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title> Chase Wilcox's Homepage</title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

  <div class="navbar">
    
    <a href="#">Home</a>
    <a href="./../../index.html">Projects</a>
    <a href="#about">About</a>
    <a href="#contact">Contact</a>
  </div>

  <?php 

  include '../../shared/navbar.html';
  
  ?>



  <header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
    <img class="w3-image" src="code_blue_1.jpg" alt="code" width="1500" height="800">
    <div class="w3-display-middle w3-margin-top w3-center">
      <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>Chase</b></span> <span class="w3-hide-small w3-text-light-grey"><b>Wilcox</b></span></h1>
    </div>
  </header>


  <div class="mobile_images">
    <div class="image1">
      <div class="top_left">Football</div>
      <img src="football_computer.jpg" alt="football">
    </div>
    <div class="image2">
      <div class="top_left">Baseball</div>
      <img src="baseball_computer.jpg" alt="baseball">
    </div>
    <div class="image3">
      <div class="top_left">Working out</div>
      <img src="weights_computer.jpg" alt="weights">
    </div>
    <div class="image4">
      <div class="top_left">Games</div>
      <img src="games.jpg" alt="games">
    </div>
  </div>


  <div class="flex-container">
    <div class="image1">
      <div class="top_left">Football</div>
      <img src="football_computer.jpg" alt="football">
    </div>
    <div class="image2">
      <div class="top_left">Baseball</div>
      <img src="baseball_computer.jpg" alt="baseball">
    </div>
    <div class="image3">
      <div class="top_left">Working out</div>
      <img src="weights_computer.jpg" alt="weights">
    </div>
    <div class="image4">
      <div class="top_left">Games</div>
      <img src="games.jpg" alt="games">
    </div>
  </div>

  <section>
    <article>
      <h2>My Story</h2>

      <p id="about"> I was born in Sandy, Utah though since I was five, my family and I have lived in beautiful Southern California.
        I am glad we moved there because well it is California. I have lived there all my life, except for the two years
        I lived in Japan for my mission. I am a computer science major and I love it!
      </p>
    </article>
    <article>
      <h2>What I Like!</h2>
      <div>
        <p> I really enjoy sports like Baseball, Football, Volleyball, and anything like it. I played on teams since I was young and
          have always loved it. I also enjoy staying active and going to the gym with buddies. I play games too on ocassion when I am
          not too busy with school.
        </p>
      </div>
    </article>
  </section>

  <!--w3schools template footer borrowed for this project-->
  <footer class="w3-center w3-black w3-padding-64" id="contact">
    <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
    <div class="w3-xlarge w3-section">
      <i class="fa fa-facebook-official w3-hover-opacity"></i>
      <i class="fa fa-instagram w3-hover-opacity"></i>
      <i class="fa fa-snapchat w3-hover-opacity"></i>
      <i class="fa fa-pinterest-p w3-hover-opacity"></i>
      <i class="fa fa-twitter w3-hover-opacity"></i>
      <i class="fa fa-linkedin w3-hover-opacity"></i>
    </div>
    <p>Contact me <a href="" title="wil16056@byui.edu" target="_blank" class="w3-hover-text-green">wil16056@byui.edu</a></p>
  </footer>




</body>

</html>