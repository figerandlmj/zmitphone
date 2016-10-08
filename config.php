<?php
try {
    $db = new PDO('mysql:host=localhost;dbname=zmit_cn', 'root', '');
    $db->exec('set names utf8;');
    } catch (PDOException $e) {
    print "Error: " . $e->getMessage() . "<br/>";
    die();
}
$host_name="http://192.168.1.30/";

