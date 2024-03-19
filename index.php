<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tukangin | kelompok 5</title>
  <link rel="shortcut icon" href="dasboard/tukangin_icon.png" type="image/x-icon">
  <link rel="stylesheet" href="style_login.css" />
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
</head>


<!-- form login -->

<body>
  <div class="wrapper">
    <span class="bg-animate"></span>
    <span class="bg-animate2"></span>

    <div class="form-box login">
      <h2 class="animation" style="--i: 0; --j: 21">login</h2>
      <form action="login.php" method="post">
        <div class="input-box animation" style="--i: 1; --j: 22">
          <input type="email" name="email" required />
          <label for="">Email</label>
          <i class="bx bxs-envelope"></i>
        </div>
        <div class="input-box animation" style="--i: 2; --j: 23 ">
          <input type="password" name="password" required />
          <label for="">password</label>
          <i class="bx bxs-lock"></i>
        </div>
        <button type="submit " class="btn animation" style="--i: 3; --j: 24">
          Login
        </button>
        <div class="logreg-link animation" style="--i: 4; --j: 25">
          <p>
            Don't have account?
            <a href="#" class="register-link animation">Sing up</a>
          </p>
        </div>
      </form>
    </div>
    <div class="info-text login">
      <h2 class="animation" style="--i: 0; --j: 20; color:#fff">Welcome back</h2>
      <p class="animation" style="--i: 1; --j: 21">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis,
        voluptate!
      </p>
    </div>


    <!-- form register -->
    <div class="form-box register">
      <h2 class="animation" style="--i: 17; --j: 0">Sing Up</h2>
      <form action="register.php" method="post">
        <div class="input-box animation" style="--i: 18; --j: 1">
          <input type="text" name="username" required />
          <label for="">username</label>
          <i class="bx bxs-user"></i>
        </div>
        <div class="input-box animation" style="--i: 19; --j: 2">
          <input type="email" name="email" required />
          <label for="">Email</label>
          <i class="bx bxs-envelope"></i>
        </div>
        <div class="input-box animation" style="--i: 20; --j: 3">
          <input type="password" name="password" required />
          <label for="">password</label>
          <i class="bx bxs-lock"></i>
        </div>
        <button type="submit " class="btn animation" name="register" style="--i: 21; --j: 4">
          Sing Up
        </button>
        <div class="logreg-link animation" style="--i: 22; --j: 5">
          <p>
            Already Have an Account?
            <a href="#" class="login-link">login</a>
          </p>
        </div>
      </form>
    </div>
    <div class="info-text register">
      <h2 class="animation" style="--i: 17; --j: 0; color:#fff">Join Us</h2>
      <p class="animation" style="--i: 18; --j: 1">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis,
        voluptate!
      </p>
    </div>
  </div>
  <script src="form_login.js"></script>

</body>

</html>