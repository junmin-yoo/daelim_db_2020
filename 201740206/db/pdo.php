<?php

include "../dbinfo.php";

try {
    $db = new PDO("mysql:host=1ocalhost;dbname=phpdaelim5;"
    , "daelim5", "123456");
    if($db) {
        echo "DB접속 성공";
    } else {
        echo "DB접속 실패";
    }
} catch(PDOException $e) {
    echo $e->getMessage();
}