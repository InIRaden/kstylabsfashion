<?php
session_start();
if (isset($_SESSION['adminName'])) {
  header("Location: ../mainPage/landingPage.php");
  exit();
}
include("../../backend/config/Database.php");

$email = "";
$password = "";
$err = "";
if(isset($_POST['submit'])) {
  $email  = $_POST['email'];
  $password  = $_POST['password'];
  if($email == '' or $password == '') {
    $err = "Please fill in all fields";
  } 
  if(empty($err)) {
    $sql1 = "SELECT * FROM users WHERE email = '$email'";
    $q1 = mysqli_query($connect, $sql1);
    $r1 = mysqli_fetch_array($q1);
    if($r1['password'] != md5($password)) {
      $err = "Invalid email or password";
    }
  }
  if(empty($err)) {
    $_SESSION['adminName'] = $email;
    header("Location: ../mainPage/landingPage.php");
    exit();
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>k- StyLabs</title>
  <link rel="stylesheet" href="../public/css/login.css" />
  <script src="../public/js/login.js"></script>
</head>

<body>
  <div class="container">
    <!-- Left side with brand and menu -->
    <div class="left-panel">
      <div class="brand"><i>k</i>- StyLabs</div>
      <div class="menu">
        <h2>Customize</h2>
        <ul>
          <li>Wardrobe</li>
          <li>Fresh</li>
          <li>Styling</li>
        </ul>
      </div>
    </div>

    <!-- Right side with login form -->
    <div class="right-panel">
      <div class="login-form">
        <h1>Welcome Back!</h1>
        <p class="subtitle">
          The faster you fill up, the faster mix your cloth
        </p>

        <?php
        if ($err) {
          echo "<div class='error-message'>$err</div>";
        }
        ?>

        <form action="" method="POST">
          <div class="form-group">
            <label for="email">Email Address</label>
            <input
              type="email"
              value="<?php echo $email; ?>"
              name="email"
              id="email"
              placeholder="yourgmail@gmail.com"
              required />
          </div>

          <div class="form-group">
            <label for="password">Password</label>
            <input
              type="password"
              name="password"
              id="password"
              placeholder="******"
              required />
          </div>

          <button type="submit" class="sign-in-btn">Sign in</button>

          <div class="divider">
            <span>Or continue with</span>
          </div>

          <div class="social-login">
            <button
              type="button"
              class="google-btn"
              onclick="window.location.href='../mainPage/landingPage.php'">
              <img
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c1/Google_%22G%22_logo.svg/768px-Google_%22G%22_logo.svg.png"
                alt="Google" />
            </button>
            <button
              type="button"
              class="facebook-btn"
              onclick="window.location.href='../mainPage/landingPage.php'">
              <img
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/Facebook_f_logo_%282019%29.svg/1280px-Facebook_f_logo_%282019%29.svg.png"
                alt="Facebook" />
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>