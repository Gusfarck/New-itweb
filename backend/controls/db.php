<?php
    $host = 'thsv25.hostatom.com';
    $dbname = 'ncitproj_gus';
    $username = 'ncitproj_gus';
    $password = 'gusit888';

    try {
        $pdo = new PDO("mysql:host=$host; dbname=$dbname; charset=utf8mb4", $username, $password);
        $pdo->setAttribute(
            PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION
        );
    } catch (Exception $e) {
        exit();
    }
?>