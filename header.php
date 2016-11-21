<?php
$subFolder = "cw2";
$baseUrl = "http://localhost:8888/".$subFolder."/";

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
    <link rel="stylesheet" href="<?php echo $baseUrl ?>css/simple-grid.css">
    <link rel="stylesheet" href="<?php echo $baseUrl ?>css/headerFooter.css">

    <?php if ($pageName == $subFolder) {?>
        <link rel="stylesheet" href="<?php echo $baseUrl ?>css/home.css">
    <?php } else { ?>
        <link rel="stylesheet" href="<?php echo $baseUrl . "css/" . $pageName . ".css" ?>">
        <link rel="stylesheet" href="<?php echo $baseUrl . "css/shared.css" ?>">
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
            <a class="navbar-brand" href="<?php echo $baseUrl;?>">Jackdh</a>
        </h1>
        <nav role="navigation" class="navbar-nav">
            <ul>
                <li class="<?= ($pageName == $subFolder) ?  "active" : ""?>"><a href="<?php echo $baseUrl;?>">Home</a></li>
                <li class="<?= ($pageName == "portfolio") ?  "active" : ""?>"><a href="Portfolio">Portfolio</a></li>
                <li class="<?= ($pageName == "blog") ?  "active" : ""?>"><a href="Blog">Blog</a></li>
                <li class="<?= ($pageName == "resume") ?  "active" : ""?>"><a href="Resume">Resume</a></li>
                <li class="<?= ($pageName == "contact") ?  "active" : ""?>"><a href="Contact">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>

