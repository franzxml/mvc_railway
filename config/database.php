<?php

return [
    'host' => getenv('MYSQLHOST') ?: 'mysql.railway.internal',
    'port' => getenv('MYSQLPORT') ?: '3306',
    'dbname' => getenv('MYSQLDATABASE') ?: 'railway',
    'username' => getenv('MYSQLUSER') ?: 'root',
    'password' => getenv('MYSQLPASSWORD') ?: 'CYydePjiBMDOBTzLwJNwzfWBNyauldwH',
    'charset' => 'utf8mb4'
];