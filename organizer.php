<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Campus Events - VIGNAN</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <!-- Bootstrap core CSS -->
<link href="/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>


    <!-- Custom styles for this template -->
    <link href="organizer.css" rel="stylesheet">
  </head>
  <body>

<header>
    <div class="navbar">
        <img src="https://vignanits.ac.in/wp-content/uploads/2020/07/1595497656733.png" alt="logo" width="300px">
        <nav>
            <ul>
                <li><a href="organizer.php" class="button b1">Home</a></li>
                <li><a href="events.html" class="button b1">Events</a></li>
                <li><a href="feed.html" class="button b1">Feedback</a></li>
                <li><a href="#" class="button b1"><?php
                session_start();
                echo "USER : ".$_SESSION['user_name'];
                ?></a></li>
                <li><a href="logout.php" class="button b1">LogOut</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
<main role="main">
  <div id="carouselExampleDark" class="carousel carousel-dark slide fade-in" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="2000">
        <img src="http://vignaniit.edu.in/images/slide1.jpg" class="d-block w-100 animate__animated fade-in" alt="...">
        <div class="carousel-caption d-none d-md-block">

        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="http://vignaniit.edu.in/images/vista2022.jpeg" class="d-block w-100 animate__animated fade-in" alt="...">
        <div class="carousel-caption d-none d-md-block">

        </div>
      </div>
      <div class="carousel-item">
        <img src="http://vignaniit.edu.in/images/slide5.jpg" class="d-block w-100 animate__animated fade-in" alt="...">
        <div class="carousel-caption d-none d-md-block">

        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->


  <div class="container marketing">
    <div>
      <h1 style="text-align:center;">Events</h1><br>
    </div>
    <div>
      <p class="text-justify">Events are exercises that are required apart the typical course of study. Students events
        are basic part of our campus life as they exhibit who you are outside of the study hall and give a chance to explore
        your abilities and leadership quality. At the point when you take part in numerous various events, you’ll get the
        chance to investigate a scope of interests and you never realized you had! Additionally, enhancing your inclinations
        along these lines widens your perspective.</p>
        <a style="text-align:center;padding:10px ;text-decoration: none;" type="button" href="events.html" class="btn1 mt-3">Explore Vignan's Events &#8594;</a>
    </div>
    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div>
      <h1 style="text-align:center;">Add Events</h1><br>
    </div>

    <form class="card p-5 bg-dark" action="mailto:vroshini301995@gmail.com?subject=Event Details , VIIT" method="post" enctype="text/plain">
      <div class="adevent">
        <div class="form-group col-4">
          <label for="">Enter the Event Name</label>
          <input type="text" class="form-control" placeholder="Name" name="name" required>
        </div>
        <br>
        <div class="row form-group">
          <div class="col-4">
            <label for="">From:</label>
             <input type="datetime-local" class="form-control" name="From_Date"required>
          </div>
          <div class="col-4">
            <label for="">To:</label>
             <input type="datetime-local" class="form-control" name="To_date"required>
          </div>
        </div>
        <br>
        <div class="form-group col-5">
        <label for="exampleFormControlTextarea1">Purpose/Topic</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter the Subject" name="purpose" required></textarea>
        </div>
        <br>
        <div class="row form-group">
          <div class="col-4">
          <label for="">Mobile</label>
          <input type="text" class="form-control" placeholder="+91" name="mobile" required>
          </div>
          <div class="col-4">
          <label for="">Email Address</label>
          <input type="email" class="form-control"placeholder="@gmail.com" name="email" required>
          </div>
        </div>
        <br>
        <div class="form-group col-4">
          <label for="">Organizing Committee</label>
          <input type="text" class="form-control" placeholder="Name of the committee" name="organizing_committee" required>
        </div>
        <br>
        <!--<div >
          <label for="">Mode of the Event:</label>&nbsp;&nbsp;
          <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
          <label class="form-check-label" for="inlineCheckbox1">online</label>
          </div>
          <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
          <label class="form-check-label" for="inlineCheckbox2">offline</label>
          </div>
        </div>-->

        <br>
        <div class="form-group col-5">
          <label for="">Venue</label>
          <small class="form-text text-muted">(If your event is in offline mode)</small>
          <input type="text" class="form-control" placeholder="Name of the hall" name="Venue" >
        </div>
        <br>
        <div class="form-group col-5">
          <label for="">Link</label>
          <input type="text" class="form-control" placeholder="Google Forms link" name="link" required>
        </div>
        <br><br>
        <div>
        <button type="submit" onclick="ss()"  class="btn btn-outline-light btn-lg sbtn">Submit</button>
        </div>
      </div>
    </form>
    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->

   <br><br><br><br>

  <!-- FOOTER -->
  <div class="footer">
    <div class="container1">
        <h5>&#9993; Vignaniit@gmail.com<br><br>&#9743; mobile : +91 9948203671</h5><br>
        <h6>Created by Prabhakar | Roshini | Pavani | Ravi</h6>
        </div>
    </div>
</main>
<script>
  function ss(){
    alert("Event Details Successfully added......");
  }
</script>
  </body>
</html>