<?php 
// Echo content for index page
// echo '<h1>This is Index Page</h1>';

// Url Variables
$blog_url = 'pages/blog.php';
$contact_url = 'pages/contact.php';
$dashboard_url = 'pages/dashboard.php';
$login_url = 'pages/login.php';
$sketchbook_url = 'pages/sketchbook.php';

// Array with Key and Url Variable
$list_of_urls = [
 "blog" => "$blog_url",
 "contact" => "$contact_url",
 "dashboard" => "$dashboard_url",
 "login" => "$login_url",
 "sketchbook" => "$sketchbook_url",
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="/blog">Blog</a>
    <a href="/contact">Contact</a>
    <a href="/dashboard">Dashboard</a>
    <a href="/login">Login</a>
    <a href="/sketchbook">Sketchbook</a>
</body>