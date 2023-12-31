<?php
 session_start();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Home</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <style>
      body{
    width: 100%;
    height: 100%;
    font-family: 'Poppins', sans-serif;
      }

      header{
          min-height: 100vh;
      }

      header.hero {
          padding-top: 11rem;
          background: linear-gradient(to bottom, rgba(92, 77, 66, 0.8) 0%, rgba(92, 77, 66, 0.8) 100%), url("img/2.jpg");
          background-position: center;
          background-repeat: no-repeat;
          background-attachment: scroll;
          background-size: cover;
        }

      header.hero h1{
          font-size: 6rem;
          font-family: 'Playfair Display', serif;
      }

      .fs-6.text-decoration-underline{
          letter-spacing: 3px;
          text-underline-offset: 7px;
      }

      section.progress{
          position: relative;
          top: -100px;
          border-radius: 0;
          width: 80%;
          height: 18rem;
          margin: 0 auto;
      }

      section.about{
          min-height: 100vh;
          font-family: 'Playfair Display', 'serif';
          background-color: #F2F0EC;
      }

      section.events{
          min-height: 90vh;
      }

      section.volunteer{
          min-height: 350px;
          background-color: goldenrod;
      }

      section.volunteer {
        padding: 130px 0;
        background: url(img/love-2.png);
        background-color: #f1ae44;
        background-repeat: no-repeat;
        background-position: center;
      }

      section.donate {
        padding: 130px 0;
        background: url(img/love-bnw.png);
        background-color: #505050;
        background-repeat: no-repeat;
        background-position: center;
      }

      .font-1{
        font-family: "Playfair Display";
      }
      .font-2{
        font-family: "Poppins";
      }

      .radius-0{
        border-radius: 0;
      }

      .text-light.mx-2.py-2.px-3.bgred {
        text-decoration: none;
        background: #e36955;
      }

      .text-light.mx-2.py-2.px-3.bgred:hover {
        background: #da270c;
        transition: 0.5s;
      }

      .btn.radius-0.text-light.mt-4.py-3.px-4.font-2 {
        background-color: #e36955;
      }

      a.btn.radius-0.text-light.mt-4.py-3.px-4.font-2:hover {
        background: #da270c;
        transition: 0.5s;
      }

      .navbar.navbar-expand-lg.fixed-top.py-4{
        background-color: transparent;
      }
      .navbar.navbar-expand-lg.fixed-top.py-4.active{
        background-color: #424242;
      }
    </style>
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700;800&family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  </head>
  <body class="overflow">
    <!-- nav -->
    <nav id="navbar" class="navbar navbar-expand-lg fixed-top py-4"
    >
      <div class="container">
        <a class="navbar-brand" href="./mainpage.php"
          ><img src="img/logo-white.png" alt="" style="width: 170px"
        /></a>
        <button
          class="navbar-toggler navbar-toggler-right"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav nav-underline fs-6 fw-semibold ms-auto">
          <?php
            if(empty($_SESSION['username'])){?>
              <a class="nav-link text-light mx-2" href="#events">Events</a>
                
            <?php
            }else{
              $username = $_SESSION['username'];
              if($username == "admin"){
              ?>
                <a class="nav-link text-light mx-2" href="./view/admin.php">Admin</a>
                <?php }else{?>
                  <a class="nav-link text-light mx-2" href="#events">Events</a>
                  <?php  } 
             } ?>
            <a class="nav-link text-light mx-2" href="./view/register-volunteer.php">Become a Volunteer</a>
            <a class="nav-link text-light mx-2" href="./view/volunteer-list.php">Volunteer</a>
            <a class="nav-link text-light mx-2" href="./view/donor.php">Donor</a>
            <a class="text-light mx-2 py-2 px-3 bgred" href="./view/donate.php">Donate</a>
            <?php
            if(empty($_SESSION['username'])){ ?>
            <a class="nav-link text-light mx-2" id="show-login" href="./loginpage.php" target="_blank">Login</a>
            <?php
            }else{ 
              $username = $_SESSION['username']; ?>
              <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle text-light"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
              <?php
                  echo "$username"; 
                ?>
              </a>
              <ul class="dropdown-menu radius-0 py-0 mt-2">
                <li>
                  <p class="dropdown-item fw-semibold mt-2">Hello, <br><?php 
                if(empty($_SESSION['username'])){?>
                  username
                <?php
                }else{
                  echo "$username";}
                  ?></p>
                </li>
                <li>
                  <a class="dropdown-item fw-semibold py-2 border-top" href="./session/logout.php"
                    >Logout</a
                  >
                </li>
              </ul>
            </li>
            <?php }
            ?>
            <!-- jika user sudah login maka tulisan login akan hilang dan diganti dengan dropdown -->
            
          </div>
        </div>
      </div>
    </nav>
    <!-- hero -->
    <header class="hero">
      <div class="container text-light">
          <h6 class="fs-6 text-decoration-underline">WELCOME TO THE CHARITY</h4>
          <h1 class="fw-bold">Lend the <br>helping hand <br>get involved</h1>
          <h5 class="mt-5"><a href="#about" style="text-decoration: none; background: #e36955;" class="text-light p-2">READ MORE</a></h5>
        </div>
      </div>
    </header>
    <!-- about -->
    <section id="about" class="about pb-5" style="padding-top: 100px;">
      <div class="container">
        <h1 class="fw-bold my-5 text-center" style="font-size: 3.5rem;">Make Palestine Happier</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col">
            <div class="card radius-0">
              <img src="img/1.jpeg" class="card-img-top radius-0" alt="...">
              <div class="card-text" style="background: #f1ae44;"><span>.</span></div>
              <div class="card-text">
              <p class="fw-bold fs-4 text-center my-auto pb-1">Healthy Food for All</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card radius-0">
              <img src="img/1.jpeg" class="card-img-top radius-0" alt="...">
              <div class="card-text" style="background: #e36955;"><span>.</span></div>
              <div class="card-text">
              <p class="fw-bold fs-4 text-center my-auto pb-1">Need Educations</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card radius-0">
              <img src="img/1.jpeg" class="card-img-top radius-0" alt="...">
              <div class="card-text" style="background: #50BAC3;"><span>.</span></div>
              <div class="card-text">
              <p class="fw-bold fs-4 text-center my-auto pb-1">Help the Eco System</p>
              </div>
            </div>
          </div>
        </div>
        <!-- isi -->
        <div class="container mt-5">
          <div class="isi">
            <p class="font-2 fs-5">This donation has the main aim of providing assistance and support to the people in Palestine. 
              Through our contributions, we are determined to support basic needs, such as food, clean water, and health care, 
              as well as to build infrastructure and provide educational support. 
              This donation is directed to provide hope and help ease the burden faced 
              by the Palestinian people in facing complex challenges. We believe that by contributing together, 
              we can have a positive impact and help build a better future for those in need in Palestine. Every donation, 
              no matter how small, has huge potential to make a significant difference in their lives.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- start donate -->
    <section class="donate">
      <div class="container text-center">
        <h1 class="font-1 fw-bold text-light" style="font-size: 3rem">
          Fundraising for <br />the people and causes <br />you care about
        </h1>
        <a
          href="./view/donate.html"
          type="button"
          class="btn radius-0 text-light mt-4 py-3 px-4 font-2"
          >START DONATION</a
        >
      </div>
    </section>
    <!-- events -->
    <section id="events" class="events pb-5" style="padding-top: 100px;">
      <div class="container">
        <h1 class="text-center fw-bold my-5 font-1" style="font-size: 3.5rem;">Upcoming Events</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col">
            <div class="card radius-0">
              <img src="img/1.jpeg" class="card-img-top radius-0" alt="...">
              <div class="card-body">
                <h5 class="card-title font-1 fw-bold">Charity Gala Dinner</h5>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card radius-0">
              <img src="img/1.jpeg" class="card-img-top radius-0" alt="...">
              <div class="card-body">
                <h5 class="card-title font-1 fw-bold">Art Exhibition for Palestine</h5>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card radius-0">
              <img src="img/1.jpeg" class="card-img-top radius-0" alt="...">
              <div class="card-body">
                <h5 class="card-title font-1 fw-bold">Palestine Film Festival</h5>
              </div>
            </div>
          </div>
        </div>
        <!-- isi -->
        <div class="container mt-5">
          <div class="isi fs-5">
            <p>The Charity Gala Dinner, Art Exhibition for Palestine, and Palestine Film Festival 
              events are specifically designed to raise funds that will be passed on to Palestine, 
              with the main aim of supporting the needs of people experiencing difficulties in the region. 
              The Charity Gala Dinner will present a delicious culinary experience, while the 
              Art Exhibition for Palestine will display inspiring works of art with a Palestinian theme, 
              and the Palestine Film Festival will showcase cinematic works that highlight humanitarian 
              issues in Palestine. Through participation in these events, volunteers play a key role in 
              ensuring the success of each activity. By becoming a volunteer, you not only provide direct 
              support in organizing the event, but also contribute to realizing this noble humanitarian mission. 
              Volunteer involvement not only helps raise funds, but also creates a positive atmosphere and a 
              spirit of togetherness that is so necessary in efforts to help our brothers and sisters in Palestine.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- become a volunteer -->
    <section class="volunteer">
      <div class="container text-center">
        <h1 class="font-1 fw-bold text-light" style="font-size: 4rem">
          Become a Volunteer
        </h1>
        <h6 class="font-2 text-light fw-light">
          JOIN YOUR HAND WITH US FOR A BETTER LIFE AND FUTURE
        </h6>
        <a
          href="./view/register-volunteer.html"
          type="button"
          class="btn radius-0 text-light mt-4 py-3 px-4 font-2"
          >JOIN US NOW</a
        >
      </div>
    </section>
    <footer
      class="py-3 text-center align-items-center text-light"
      style="background: #424242"
    >
      Copyright - 2023
    </footer>
    <script src="./script/script-nav.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  </body>
</html>
