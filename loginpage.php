<?php
  session_start();
  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login Page</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <style>
      body {
        min-height: 100vh;
      }

      .overflow.active {
        overflow: hidden;
      }

      .popup-bg {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 450px;
        height: 500px;
        background: white;
        box-shadow: 10px 10px 25px;
      }

      .create-popup-bg {
        position: absolute;
        top: -500%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 450px;
        height: 500px;
        background: white;
      }

      .create-popup-bg.active {
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        box-shadow: 10px 10px 25px;
      }

      .bg-login {
        min-height: 100vh;
        position: relative;
        background: linear-gradient(
            to bottom,
            rgba(92, 77, 66, 0.5) 0%,
            rgba(92, 77, 66, 0.8) 100%
          ),
          url("img/2.jpg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
      }

      .font-1 {
        font-family: "Playfair Display";
      }
      .font-2 {
        font-family: "Poppins";
      }

      .radius-0 {
        border-radius: 0;
      }
    </style>
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700;800&family=Poppins:wght@400;600;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <!-- a -->
  <body class="overflow">
    <!--  -->
    <div class="bg-login"></div>
    <!-- popup login -->
    <div class="popup-bg">
      <div class="popup position-relative top-50 start-50 translate-middle">
        <h1 class="text-center mb-5 font-1" ;>
          Welcome<span class="text-danger">.</span>
        </h1>
        <form action="./session/cek_login.php" method="POST">
          <input class="form-control py-3 mb-3 radius-0 w-75 mx-auto border-2 border-dark font-2" type="text" name="username" placeholder="Username" required>
          <input class="form-control py-3 mb-5 radius-0 w-75 mx-auto border-2 border-dark font-2"  type="password" name="password" placeholder="Password" required>
          <?php
            if(isset($_GET['pesan']))
            {
              if($_GET['pesan'] == "gagal")
              {
              ?><span class="font-2 d-flex justify-content-center">Username or password incorrect!</span>
              <?php
              }
            }
          ?>
          <p class="text-center font-2">
            No account?
            <a href="#" id="show-create" class="text-danger fw-semibold"
              >Create one</a>
          </p>
          <button
            type="submit"
            class="btn btn-dark d-flex mx-auto px-4 py-2 radius-0 font-2">
            Sign-in
          </button>
        </form>
      </div>
    </div>
    <!-- popup create -->
    <div class="create-popup-bg">
      <div class="popup position-relative top-50 start-50 translate-middle">
        <h1 class="text-center mb-5 font-1" ;>
          Join us<span class="text-danger">.</span>
        </h1>
        <form action="./session/proses_signup.php" method="POST">
          <input
            class="form-control font-2 py-3 mb-3 radius-0 w-75 mx-auto border-2 border-dark"
            type="text" name="username"
            placeholder="Username"
            required
          />
          <input
            class="form-control font-2 py-3 mb-3 radius-0 w-75 mx-auto border-2 border-dark"
            type="email" name="email"
            placeholder="email@example.com"
            required
          />
          <input
            class="form-control font-2 py-3 mb-5 radius-0 w-75 mx-auto border-2 border-dark"
            type="password" name="pass"
            placeholder="Password"
            required
          />
          <p class="text-center font-2">
            Already have account?
            <a href="#" id="close-create" class="text-danger fw-semibold"
              >Sign in</a
            >
          </p>
          <button
            type="submit"
            class="btn btn-dark d-flex mx-auto px-4 py-2 radius-0 font-2"
          >
            Sign-up
          </button>
        </form>
      </div>
    </div>
    <script src="./script/script.js"></script>
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
