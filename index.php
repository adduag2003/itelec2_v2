<?php include_once 'config/settings-configuration.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login & Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            padding-top: 40px;
        }

        .auth-box {
            background: white;
            padding: 30px;
            border-radius: 8px;
            border: 1px solid #ddd;
            margin-bottom: 30px;
        }

        .form-title {
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
            text-align: center;
        }

        .btn-primary, .btn-success {
            width: 100%;
        }

        a {
            font-size: 0.9rem;
        }

        .container {
            max-width: 500px;
        }
    </style>
</head>
<body>

<div class="container">
    <!-- Login Form -->
    <div class="auth-box">
        <div class="form-title">Sign In</div>
        <form method="POST" action="dashboard/admin/authentication/admin-class.php">
            <input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>">
            <div class="mb-3">
                <input type="email" name="email" class="form-control" placeholder="Email" required>
            </div>
            <div class="mb-3">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <div class="mb-3 text-end">
                <a href="forgot-password.php">Forgot Password?</a>
            </div>
            <button class="btn btn-primary" name="btn-signin">Sign In</button>
        </form>
    </div>

    <!-- Registration Form -->
    <div class="auth-box">
        <div class="form-title">Register</div>
        <form method="POST" action="dashboard/admin/authentication/admin-class.php">
            <input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>">
            <div class="mb-3">
                <input type="text" name="username" class="form-control" placeholder="Username" required>
            </div>
            <div class="mb-3">
                <input type="email" name="email" class="form-control" placeholder="Email" required>
            </div>
            <div class="mb-3">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <button class="btn btn-success" name="btn-signup">Register</button>
        </form>
    </div>
</div>

</body>
</html>
