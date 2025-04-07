<?php
// PHP code for form processing
$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = trim($_POST['username']);
  $password = trim($_POST['password']);

  // Basic validation
  if (empty($username) || empty($password)) {
    $error = "Please enter both username and password";
  } else {
  }
}
?>

<div class="container" style=" background-color: #111e3d;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 80vh;">
  <?php
  // PHP code for form processing
  $error = '';

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);


    if (empty($username) || empty($password)) {
      $error = "Please enter both username and password";
    } else {
    }
  }
  ?>

  <div class="login-container">
    <!-- App Information -->
    <div class="app-info">
      <div class="app-logo-container">
        <div class="app-logo">
          <div class="logo-icon">₹</div>
        </div>
        <div>
          <h1 class="app-title">Mobile Recharge<br>Commission App</h1>
          <div class="app-subtitle">Online Recharge & Bill Payment</div>
        </div>
      </div>

      <div class="service-title">Online Recharge Services</div>
    </div>

    <!-- Login Form -->
    <div class="login-form">
      <h2>Login</h2>
      <p>Enter your Username and Password to access your account</p>

      <?php if (!empty($error)): ?>
        <div class="alert alert-danger"><?php echo $error; ?></div>
      <?php endif; ?>

      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="mb-3">
          <input type="text" class="form-control" name="username" placeholder="Username" required>
        </div>
        <div class="mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password" required>
        </div>
        <div class="d-flex align-items-center">
          <button type="submit" class="btn btn-primary btn-sign-in">Sign In</button>
          <a href="#" class="forgot-password">Forgot password?</a>
        </div>
      </form>

      <div class="contact-info">
        <p class="mb-1">For Business Inquiry, Contact <a href="tel:+919678130820">+91 9678130820</a></p>
        <a href="#" class="download-link">Download Android App</a>
      </div>
    </div>
  </div>
</div>