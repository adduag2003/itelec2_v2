<?php
// Start session and validate token
session_start();

// Validate token from URL
$token = isset($_GET['token']) ? htmlspecialchars($_GET['token']) : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Reset Password</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
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
      margin-bottom: 1rem;
    }
    form {
      display: flex;
      flex-direction: column;
    }
    input {
      margin-bottom: 1rem;
      padding: 0.75rem;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    button {
      background: #0088cc;
      color: white;
      padding: 0.75rem;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    button:hover {
      background: #0077b3;
    }
    .link {
      margin-top: 1rem;
      text-align: center;
    }
  </style>
</head>
<body>
  <div class="form-box">
    <h2>Reset Password</h2>
    <form action="reset-handler.php" method="POST">
      <input type="hidden" name="token" value="<?php echo $token; ?>" />
      <input type="password" name="new_password" placeholder="New Password" required />
      <input type="password" name="confirm_password" placeholder="Confirm Password" required />
      <button type="submit">Reset Password</button>
    </form>
    <div class="link">
      <a href="index.php">Back to Login</a>
    </div>
  </div>
</body>
</html>
