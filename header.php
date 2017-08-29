<?php
define("SUB_FOLDER", "");
// $extraDash = SUB_FOLDER == "" ? "" : "/";
define("BASE_URL", "https://random.jack.si/portfolio/");


$link = $_SERVER['PHP_SELF'];
$link_array = explode('/',$link);
$pageName = strtolower($link_array[count($link_array)-2]);
$remote = "portfolio"; // update this to whatever /forward you are on. IE it would be portfolio for random.jack.si/portfolio
?>

<!doctype html>
<html lang="en-GB">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <meta name="description" content="Portfolio, Blob and Resume website">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>css/simple-grid.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>css/headerFooter.css">
    <link rel="icon" type="image/png" href="<?php echo BASE_URL ?>favicon.ico">

    <link rel="stylesheet" href="<?php echo BASE_URL ?>css/shared.css">
    <?php if ($pageName == $remote) {?>
        <link rel="stylesheet" href="<?php echo BASE_URL ?>css/home.css">
    <?php } else { ?>
        <link rel="stylesheet" href="<?php echo BASE_URL . "css/" . $pageName . ".css" ?>">

    <?php } ?>

    <title><?php echo $pageName == $remote ? "Home" : ucfirst($pageName); ?></title>



</head>
<body>
<!--[if lte IE 9]>
<p class="browserupgrade">Youu are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience and security.</p>
<![endif]-->

<!-- Add your site or application content here -->
<header class="navbar">
    <div class="navbar-inner clearfix container">
        <h1 class="brand">
            <a class="navbar-brand" href="<?php echo BASE_URL;?>">Jackdh</a>
        </h1>
        <nav class="navbar-nav">
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


