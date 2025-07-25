<?php
include '../database/dbConnection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page_title ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- CSS file -->
    <?php require 'css/style.php'; ?>
    
</head>
<body>
    <?php require 'sidebar.php'; ?>

    <!-- Main Content -->
    <div class="main-content">
        <?php require 'nav.php'; ?>