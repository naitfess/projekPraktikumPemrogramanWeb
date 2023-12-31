<?php
session_start();
if (empty($_SESSION['username'])) {
  header("location:../loginpage.php?pesan=belum_login");
}
$username = $_SESSION['username'];
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Become a Volunteer</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700;800&family=Poppins:wght@400;600;700&display=swap"
      rel="stylesheet"
    />
    <style>
      body {
        font-family: "Poppins", serif;
      }
      section.hero {
        font-family: "Playfair Display", serif;
        background-color: #f2f0ec;
      }
      .container.fw-semibold .redbg {
        position: absolute;
        margin-top: -43px;
        background-color: #e36955;
        font-size: 0.8rem;
      }

      section.form-volunteer div h1 {
        font-family: "Fairplay Display", serif;
        font-size: 3.5rem;
      }

      .radius-0 {
        border-radius: 0;
      }

      .text-light.mx-2.py-2.px-3 {
        text-decoration: none;
        background: #e36955;
      }

      .text-light.mx-2.py-2.px-3:hover {
        background: #da270c;
        transition: 0.5s;
      }
    </style>
  </head>
  <body>
    <!-- navbar -->
    <nav
      class="navbar sticky-top navbar-expand-lg navbar-dark py-4"
      style="background: #fff"
    >
      <div class="container">
        <a class="navbar-brand" href="../mainpage.php"
          ><img src="../img/logo.png" alt="" style="width: 170px"
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
            if($username == "admin"){?>
              <a class="nav-link text-dark mx-2" href="admin.php"
              >Admin</a>  
            <?php
            }else{?>
              <a class="nav-link text-dark mx-2" href="../mainpage.php#events"
                >Events</a>
            <?php } ?>
            <a
              class="nav-link active text-dark mx-2"
              href="./register-volunteer.php"
              >Become a Volunteer</a
            >
            <a class="nav-link text-dark mx-2" href="./volunteer-list.php"
              >Volunteer</a
            >
            <a class="nav-link text-dark mx-2" href="./donor.php">Donor</a>
            <a class="text-light mx-2 py-2 px-3" href="./donate.php">Donate</a>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle text-dark"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <?php echo "$username" ?>
              </a>
              <ul class="dropdown-menu radius-0 py-0 mt-2">
                <li>
                  <p class="dropdown-item fw-semibold mt-2">
                    Hello, <br /> <?php echo $username ?>
                  </p>
                </li>
                <li>
                  <a class="dropdown-item fw-semibold py-2 border-top" href="../session/logout.php"
                    >Logout</a
                  >
                </li>
              </ul>
            </li>
          </div>
        </div>
      </div>
    </nav>
    <!-- hero -->
    <section class="hero text-center">
      <h1 class="fw-bold" style="font-size: 4rem; padding: 4.5rem 0">
        Become a Volunteer
      </h1>
    </section>
    <div class="container fw-semibold">
      <p class="redbg p-2 text-light">HOME / BECOME A VOLUNTEER</p>
    </div>
    <!-- form -->
    <section class="form-volunteer" style="min-height: 100vh">
      <div class="container mt-5">
        <h1 class="fw-bold text-center">Register Now</h1>
        <h6 class="text-center">JOIN US NOW</h6>
      </div>
      <div class="container mt-5 d-flex">
        <div class="row d-flex justify-content-center">
          <div class="col">
            <img src="../img/volunteer.jpg" alt="volunteer" class="w-100" />
            <h4
              style="font-family: 'Fairplay Display', serif"
              class="fw-bold fs-2 my-3"
            >
              Requirements
            </h4>
            <p class="w-100">
              The main aim of this volunteer activity is to support efforts to
              raise funds to provide aid to Palestine. Through volunteer
              participation, we are trying to seek donations by holding several
              events to help the Palestinian community needs, provides hope, and
              supports initiatives humanity in the region.
            </p>
            <ul>
              <li>Willingness to stick to a schedule or time commitment.</li>
              <li>Compliance with work ethics and professional behavior.</li>
              <li>Ability to work in a team and good communication.</li>
            </ul>
            <div
              class="d-flex justify-content-evenly border-2 border-top border-light-subtle mt-5"
            >
              <p
                class="py-3 my-auto fw-semibold"
                style="font-family: 'Fairplay Display', serif"
              >
                Call Us <br /><span
                  class="fw-light"
                  style="color: #e36955; font-family: 'Poppins'"
                  >0123 456 7898</span
                >
              </p>
              <p
                class="py-3 my-auto fw-semibold"
                style="font-family: 'Fairplay Display', serif"
              >
                Send Email <br /><span
                  class="fw-light"
                  style="color: #e36955; font-family: 'Poppins'"
                  >asd@gmail.com</span
                >
              </p>
            </div>
          </div>
          <div class="col">
            <form action="../session/input_volunteer.php" method="POST">
              <div class="mb-3">
                <input
                  type="text"
                  class="form-control form-control-lg w-100 radius-0"
                  placeholder="Full Name *"
                  name="name_volunteer"
                  style="height: 12%"
                  required
                />
              </div>
              <div class="mb-3">
                <input
                  type="email"
                  class="form-control form-control-lg w-100 radius-0"
                  placeholder="Email Address *"
                  name="email_volunteer"
                  style="height: 12%"
                  required
                />
              </div>
              <div class="mb-3">
                <input
                  type="text"
                  class="form-control form-control-lg w-100 radius-0"
                  placeholder="Phone Number *"
                  name="phone"
                  style="height: 12%"
                  required
                />
              </div>
              <div class="mb-3">
                <input
                  type="text"
                  class="form-control form-control-lg w-100 radius-0"
                  placeholder="Address"
                  name="address"
                  style="height: 12%"
                />
              </div>
              <div class="mb-3">
                <input
                  type="text"
                  class="form-control form-control-lg w-100 radius-0"
                  placeholder="Occupation"
                  name="occupation"
                  style="height: 12%"
                />
              </div>
              <div class="mb-3 justify-content-between d-flex">
                <input type="radio" class="btn-check" autocomplete="on" />
                <label
                  class="btn btn-danger radius-0 fs-5"
                  style="padding: 34.5px 20px"
                  >Choose Event:</label
                >
                <input
                  type="radio"
                  class="btn-check"
                  name="event"
                  id="a"
                  value="Charity Gala Dinner"
                  autocomplete="off"
                />
                <label class="btn btn-outline-danger radius-0 px-3 py-4" for="a"
                  >Charity <br />
                  Gala Dinner</label
                >
                <input
                  type="radio"
                  class="btn-check"
                  name="event"
                  value="Art Exhibition for Palestine"
                  id="b"
                  autocomplete="off"
                  checked
                />
                <label class="btn btn-outline-danger radius-0 px-3 py-4" for="b"
                  >Art Exhibition <br />
                  for Palestine</label
                >
                <input
                  type="radio"
                  class="btn-check"
                  name="event"
                  value="Palestine Film Festival"
                  id="c"
                  autocomplete="off"
                />
                <label class="btn btn-outline-danger radius-0 px-3 py-4" for="c"
                  >Palestine <br />
                  Film Festival</label
                >
              </div>
              <button
                class="btn btn-warning radius-0 px-4 py-2 text-light fw-semibold"
                type="submit"
              >
                Send
              </button>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- footer -->
    <footer
      class="py-3 text-center align-items-center text-light mt-5"
      style="background: #424242"
    >
      Copyright - 2023
    </footer>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
      integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
