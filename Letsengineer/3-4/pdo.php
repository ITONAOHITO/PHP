<?php

define('DATABASE', 'checktest4');
define('USER', 'root');
define('PASSWORD', 'root');
define('DSN', 'mysql: host=localhost;charset=utf8;dbname='.DATABASE);

function connect() {
    try {
        $pdh = new PDO(DSN, USER, PASSWORD);
        $pdh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdh;
    }   catch (PDOException $e) {
        $e->getMessage();
        echo $e->getMessage();
    }

}

?>
