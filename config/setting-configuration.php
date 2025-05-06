<?php
session_start();
include_once __DIR__ . '/../database/dbconnection.php';

// Error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// CSRF TOKEN
if (empty($_SESSION['csrf_token'])) {
    $csrf_token = bin2hex(random_bytes(32));
    $_SESSION['csrf_token'] = $csrf_token;
} else {
    $csrf_token = $_SESSION['csrf_token'];
}

class SystemConfig {
    private $conn;
    private $smtp_email;
    private $smtp_password;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->dbConnection();

        if ($this->conn === null) {
            throw new Exception("Database connection failed.");
        }

        $stmt = $this->runQuery("SELECT * FROM email_config");
        $stmt->execute();
        $email_config = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->smtp_email = $email_config['email'] ?? null;
        $this->smtp_password = $email_config['password'] ?? null;
    }

    public function getSmtpEmail() {
        return $this->smtp_email;
    }

    public function getSmtpPassword() {
        return $this->smtp_password;
    }

    public function runQuery($sql) {
        return $this->conn->prepare($sql);
    }
}
?>