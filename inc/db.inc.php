<?php

$host = 'localhost';
$dbname = '';
$username = '';
$password = '';

try {
  $pdo = new PDO(
    "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
    $username,
    $password,
    [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,

    ]
  );
} catch (PDOException $e) {
  error_log('Database connection error: ' . $e->getMessage());
  http_response_code(500);
  echo 'Internal Server Error';
  exit;
}
