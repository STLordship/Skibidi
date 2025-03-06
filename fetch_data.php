<?php
require 'db.php';

function fetchData($pdo, $table, $nameColumn) {
    $stmt = $pdo->query("SELECT $nameColumn AS name, gramage, price FROM $table");
    return $stmt->fetchAll();
}

$appetizers = fetchData($pdo, 'appetizers', 'App_name');
$soups = fetchData($pdo, 'soups', 'Soup_name');
$main_courses = fetchData($pdo, 'main_course', 'Course_name');
?>