<?php
    try {
        $connect = new PDO('mysql:dbname=biodata;host=127.0.0.1', 'root', '');
    } catch (Exeception $error) {
        die($error->getMessage());
    }
?>