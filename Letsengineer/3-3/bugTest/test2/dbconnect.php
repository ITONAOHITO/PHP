<?php
// セッション開始
session_start();

// define('DB_DATABASE', 'yigroupBlog');
// // MySQLのユーザー名
// define('DB_USERNAME', 'root');
// // MySQLのログインパスワード
// define('DB_PASSWORD', 'root');
// // DSN
// define('PDO_DSN', 'mysql:host=localhost;charset=utf8;dbname='.DB_DATABASE);

$db = ['host' => 'localhost',
       'user' => 'root',
       'pass' => 'root',
       'dbname' => 'yigroupBlog'
];

// // DBサーバのURL
// $db['host'] = "localhost";
// // ユーザー名
// $db['user'] = "root";
// // ユーザー名のパスワード
// $db['pass'] = "root";
// // データベース名
// $db['dbname'] = "yigroupBlog";



?>