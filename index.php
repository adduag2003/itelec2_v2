<?php
    include_once __DIR__ . '/config/setting-configuration.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login & Registration</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f5f7fa;
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      margin: 0;
      padding: 2rem;
    }
    .container {
      display: flex;
      gap: 2rem;
      flex-wrap: wrap;
      justify-content: center;
    }
    .form-box {
      background: white;
      padding: 2rem;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 400px;
    }
    h2 {
      text-align: center;
      margin-bottom: 1.5rem;
      color: #333;
    }
    form {
      display: flex;
      flex-direction: column;
    }
    input {
      padding: 0.75rem;
      margin-bottom: 1rem;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 1rem;
    }
    button {
      background-color: #0088cc;
      color: white;
      border: none;
      padding: 0.75rem;
      border-radius: 5px;
      cursor: pointer;
      font-size: 1rem;
    }
    button:hover {
      background-color: #0077b3;
    }
    .forgot-password {
      text-align: center;
      margin-top: 1rem;
    }
    .forgot-password a {
      color: #0088cc;
      text-decoration: none;
    }
    .forgot-password a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="container">
    <!-- Login Form -->
    <div class="form-box">
      <h2>Sign In</h2>
      <form action="dashboard/admin/authentication/admin-class.php" method="POST">
        <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($csrf_token); ?>" />
        <input type="email" name="email" placeholder="Enter Email" required />
        <input type="password" name="password" placeholder="Enter Password" required />
        <button type="submit" name="btn-signin">Sign In</button>
      </form>
      <!-- Forgot Password Link -->
      <div class="forgot-password">
        <a href="forgot-password.php">Forgot Password?</a>
      </div>
    </div>

    <!-- Registration Form -->
    <div class="form-box">
      <h2>Register</h2>
      <form action="dashboard/admin/authentication/admin-class.php" method="POST">
        <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($csrf_token); ?>" />
        <input type="text" name="username" placeholder="Enter Username" required />
        <input type="email" name="email" placeholder="Enter Email" required />
        <input type="password" name="password" placeholder="Enter Password" required />
        <button type="submit" name="btn-signup">Sign Up</button>
      </form>
    </div>
  </div>
</body>
</html>
