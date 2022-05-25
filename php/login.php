<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css" />
</head>
<style>
  .checked {
    color: rgb(233, 131, 233);
  }

  /* Style buttons */
  .btn {
    background-color: rgb(155, 2, 194);
    border: none;
    color: white;
    padding: 12px 30px;
    cursor: pointer;
    font-size: 20px;
  }

  /* Darker background on mouse-over */
  .btn:hover {
    background-color: rgb(218, 89, 218);
  }

  * {
    box-sizing: border-box;
  }

  body {
    font-family: Verdana, sans-serif;
  }

  .mySlides {
    display: none;
  }

  img {
    vertical-align: middle;
  }

  /* Slideshow container */
  .slideshow-container {
    position: relative;
    margin: auto;
  }

  /* Caption text */
  .text {
    color: #f2f2f2;
    font-size: 15px;
    padding: 8px 12px;
    position: absolute;
    bottom: 8px;
    width: 100%;
    text-align: center;
  }

  /* Number text (1/3 etc) */
  .numbertext {
    color: #f2f2f2;
    font-size: 12px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
  }

  /* The dots/bullets/indicators */
  .dot {
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
  }

  .active {
    background-color: #717171;
  }

  /* Fading animation */
  .fade {
    animation-name: fade;
    animation-duration: 1.5s;
  }

  @keyframes fade {
    from {
      opacity: .4
    }

    to {
      opacity: 1
    }
  }

  /* On smaller screens, decrease text size */
  @media only screen and (max-width: 300px) {
    .text {
      font-size: 11px
    }
  }
</style>

<script>
  // Used to toggle the menu on small screens when clicking on the menu button
  function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
    } else {
      x.className = x.className.replace(" w3-show", "");
    }
  }
</script>

<body>
  <!-- Navigation Bar -->
  <div class="w3-top">
    <div class="w3-bar w3-flat-wisteria w3-card">
      <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"> </i></a>
      <a href="../index.php" class="w3-bar-item w3-button w3-padding-large w3-cursive"><i class="fa fa-cogs"></i><b> MY TUTOR</b> </a>
      <a href="login.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small"><i class="fa fa-lock"></i> Login
      </a>
      <a href="register.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small"><i class="fa fa-group"></i> Register
      </a>


      <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right">
      </a>
    </div>
  </div>

  <!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
  <div id="navDemo" class="w3-bar-block w3-flat-wisteria w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top: 46px">
    <a href="login.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()"><i class="fa fa-lock"></i> Login</a>
    <a href="register.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()"><i class="fa fa-group"></i> Register</a>
  </div>

  <!-- Header -->
  <header class="w3-display-container w3-content" style="max-width:1400px;" id="home">
    <div class="w3-container w3-center">
      <img class="w3-center w3-image w3-margin" src="../images/5.png" style="height:400px;width:400px"><br>
    </div>
  </header>
  <div style="display:flex; justify-content: center">
    <div class="w3-container w3-card w3-padding w3-margin" style="width:600px;margin:auto;text-align:left;">
      <form name="loginForm" action="login.php" method="post">
        <p>
          <i class="fa fa-envelope-open"></i> <label><b> Email</b></label>
          <input class="w3-input w3-round w3-border" type="email" name="email" id="idemail" placeholder="Your email" required>
        </p>
        <p>
          <i class="fa fa-lock"></i> <label><b> Password</b></label>
          <input class="w3-input w3-round w3-border" type="password" name="password" id="idpass" placeholder="Your password" required>
        </p>
        <p>
          <input class="w3-check" name="rememberme" type="checkbox" id="idremember" onclick="rememberMe()">
          <label> Remember Me</label>
        </p>
        <p style="font-size:16px;"> Don't have an account? <a href="register.php">Sign Up</a></p>
        <p>
          <input class="w3-button w3-round w3-border w3-purple" type="submit" name="submit" id="idsumit">
        </p>
      </form>
    </div>
  </div>
  <div id="cookieNotice" class="w3-right w3-block" style="display: none;">
    <div class="w3-red">
      <h4>Cookie Consent</h4>
      <p>This website uses cookies or similar technologies, to enhance your
        browsing experience and provide personalized recommendations.
        By continuing to use our website, you agree to our
      </p>
      <div class="w3-button">
        <button onclick="acceptCookieConsent();">Accept</button>
      </div>
    </div>
  </div>

</body>
<script>
  let cookie_consent = getCookie("user_cookie_consent");
  if (cookie_consent != "") {
    document.getElementById("cookieNotice").style.display = "none";
  } else {
    document.getElementById("cookieNotice").style.display = "block";
  }
</script>

</html>