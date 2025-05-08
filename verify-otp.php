<?php
include_once 'config/settings-configuration.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify OTP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
        }

        .modal-content {
            padding: 30px 20px;
            border-radius: 10px;
            border: none;
            box-shadow: 0 5px 30px rgba(0, 0, 0, 0.1);
        }

        .modal-title {
            font-size: 1.5rem;
            font-weight: 600;
            text-align: center;
            width: 100%;
        }

        .form-label {
            font-weight: 500;
        }

        .form-control {
            border-radius: 6px;
        }

        .btn-primary {
            padding: 10px;
            font-weight: 500;
            border-radius: 6px;
        }

        .modal-header {
            border-bottom: none;
            justify-content: center;
        }

        .modal-body {
            padding-top: 10px;
        }
    </style>
</head>

<body>
    <div class="container mt-5 text-center">
        <h2>OTP Verification</h2>
        <p class="text-muted">Click the button below to verify your OTP</p>

        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#otpModal">
            Enter OTP
        </button>
    </div>

    <!-- OTP Modal -->
    <div class="modal fade" id="otpModal" tabindex="-1" aria-labelledby="otpModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="otpModalLabel">Enter OTP</h5>
                </div>
                <div class="modal-body">
                    <form action="dashboard/admin/authentication/admin-class.php" method="POST">
                        <input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>">
                        <div class="mb-3">
                            <label for="otpInput" class="form-label">OTP Code</label>
                            <input type="number" class="form-control" id="otpInput" name="otp" placeholder="Enter OTP" required>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary" name="btn-verify">Verify</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Auto-open Modal -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var myModal = new bootstrap.Modal(document.getElementById('otpModal'));
            myModal.show();
        });
    </script>
</body>

</html>
