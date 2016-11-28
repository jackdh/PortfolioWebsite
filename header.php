<?php
define("SUB_FOLDER", "cw2");
define("BASE_URL", "http://localhost:8888/".SUB_FOLDER."/");


$link = $_SERVER['PHP_SELF'];
$link_array = explode('/',$link);
$pageName = strtolower($link_array[count($link_array)-2]);

?>
<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>css/simple-grid.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>css/headerFooter.css">



    <?php if ($pageName == SUB_FOLDER) {?>
        <link rel="stylesheet" href="<?php echo BASE_URL ?>css/home.css">
    <?php } else { ?>
        <link rel="stylesheet" href="<?php echo BASE_URL ?>css/shared.css">
        <link rel="stylesheet" href="<?php echo BASE_URL . "css/" . $pageName . ".css" ?>">

    <?php } ?>




</head>
<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience and security.</p>
<![endif]-->

<!-- Add your site or application content here -->
<header class="navbar">
    <div class="navbar-inner clearfix">
        <h1 class="brand">
            <a class="navbar-brand" href="<?php echo BASE_URL;?>">Jackdh</a>
        </h1>
        <nav role="navigation" class="navbar-nav">
            <ul>
                <li class="<?= ($pageName == SUB_FOLDER) ?  "active" : ""?>"><a href="<?php echo BASE_URL;?>">Home</a></li>
                <li class="<?= ($pageName == "portfolio") ?  "active" : ""?>"><a href="<?php echo BASE_URL ?>Portfolio">Portfolio</a></li>
                <li class="<?= ($pageName == "blog") ?  "active" : ""?>"><a href="<?php echo BASE_URL ?>Blog">Blog</a></li>
                <li class="<?= ($pageName == "resume") ?  "active" : ""?>"><a href="<?php echo BASE_URL ?>Resume">Resume</a></li>
                <li class="<?= ($pageName == "contact") ?  "active" : ""?>"><a href="<?php echo BASE_URL ?>Contact">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>


