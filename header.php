<?php require 'function.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./slick/slick-1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="./slick/slick-1.8.1/slick/slick-theme.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Athiti:wght@200;300;400;500;600;700&family=Merienda:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <title>Frehsly Restaurent</title>
</head>
<body>
<header>
    <div class="log">
        <a href="#"><img src="./images/logo.png" alt="" id="logo">
        <h1>Freshly Restaurent</h1></a>
    </div>

       <nav class="main-nav">
        <ul>
          <?= navItem('/index.php','Home') ?>
          <?= navItem('/about.php','About') ?>
          <?= navItem('/menu.php','Menus') ?>
          <?= navItem('/contact.php','Contact') ?>
        </ul>
       </nav>
</header>
