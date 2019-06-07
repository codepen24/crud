<?php 

    $sql_username = 'root';
    $sql_password = '';

    $sql_host = 'localhost';
    $sql_dbname = 'exam';

    function pdo($sql_host, $sql_dbname, $sql_username, $sql_password) {
        try {
            return $pdo = new PDO('mysql:host=' . $sql_host . ';dbname=' . $sql_dbname, $sql_username, $sql_password);
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

    $pdo_func = 'pdo';

    $pdo_res = $pdo_func($sql_host, $sql_dbname, $sql_username, $sql_password);

    $pdo_res->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

    $pdo = $pdo_res;


?>
