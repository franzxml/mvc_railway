<?php
return [
    'host' => getenv('DB_HOST') ?: 'mysql.railway.internal',
    'port' => getenv('DB_PORT') ?: '3306',
    'dbname' => getenv('DB_NAME') ?: 'railway',
    'username' => getenv('DB_USER') ?: 'root',
    'password' => getenv('DB_PASSWORD') ?: 'password_dari_railway',
    'charset' => 'utf8mb4'
];