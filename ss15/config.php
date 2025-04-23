<?php

return array(
    'base'=> 'ss15/',
    'baseURL'=> 'http://localhost/ss15/',
    'assets'=> 'ss15/assets',
    'db'=> array(
        'host'=> 'localhost',
        'name'=> 'project',
        'username'=> 'root',
        'password'=> '',
    )
);
include __DIR__ . '/App/core/database.php';
$conn = new mysqli(
    $config['db']['host'],
    $config['db']['username'],
    $config['db']['password'],
    $config['db']['name']
);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
?>
