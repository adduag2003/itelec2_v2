<?php
   include_once 'config/setting-configuration.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify OTP</title>
</head>
<body>
    <h1>Enter OTP</h1>
    <form action="dashboard/admin/authentication/admin-class.php" method="POST">
        <input type="hidden" name="csrf_token" value="<?php echo $csrf_token ?>">
        <input type="number" name="otp" placeholder="Enter OTP" required> <br>
        <button type="submit" name="btn-verify">Verify</button>
    </form>
</body>
</html><?php
   include_once 'config/setting-configuration.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Verify OTP</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f5f7fa;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
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
    input[type="number"] {
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
    .link {
      margin-top: 1rem;
      text-align: center;
    } 
    .link a {
      color: #0088cc;
      text-decoration: none;
    }
    .link a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="form-box">
    <h2>Enter OTP</h2>
    <form action="dashboard/admin/authentication/admin-class.php" method="POST">
      <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($csrf_token); ?>" />
      <input type="number" name="otp" placeholder="Enter OTP" required />
      <button type="submit" name="btn-verify">Verify</button>
    </form>
    <div class="link">
      <a href="index.php">Back to Login</a>
    </div>
  </div>
</body>
</html>
