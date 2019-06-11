<?php 

    $sql_username = 'u168730839_zuksi';
    $sql_password = 'sULs1xLFOOlv';

    $sql_host = 'sql172.main-hosting.eu';
    $sql_dbname = 'u168730839_zuksi';

    function pdo($sql_host, $sql_dbname, $sql_username, $sql_password) {
        try {
            return $pdo = new PDO('mysql:host=' . $sql_host . ';dbname=' . $sql_dbname, $sql_username, $sql_password);
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

    $pdo_func = 'pdo';

    $pdo_res = $pdo_func($sql_host, $sql_dbname, $sql_username, $sql_password);

    $pdo_res->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    $pdo = $pdo_res;


?>
