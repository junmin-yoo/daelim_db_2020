<?php
include "../dbData/dbinfo.php";

try {
    $db = new PDO("mysql:host=localhost;dbname=phpdaelim5;","daelim5","0000");
    if($db) {
        echo "DB접속 성공";
    } else {
        echo "DB접속 실패";
    }
} catch(PDOException $e) {
    echo $e->getMessage();
}