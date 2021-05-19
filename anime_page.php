<?php
require 'includes/DB.php';
require 'includes/Studio.php';
require 'includes/Anime.php';
$id = $_GET['anime_id'];
$anime = new Anime($id);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title><?=$anime->getTitle()?></title>
    <link rel="stylesheet" href="css/anime-page.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="icon" href="img/icons/logo-small.svg">
</head>
<body>
<?php include 'includes/header.php'; ?>
<div class="page">
    <div class="h-m">
        <header>
            <h1 class="heading"><?=$anime->getTitle()?></h1>
            <div class="subheading">On this page is given title's info</div>
        </header>
        <div class="main">
            <div class="title-pic">
                <img src="<?=$anime->getImageAnime()?>" alt="<?=$anime->getTitle()?>">
            </div>
            <div class="title-info">
                <div class="segment">
                    <div class="seg-heading">Info</div>
                    <div class="list">
                        <li><span class="type">Name: </span><?=$anime->getTitle()?></li>
                        <li><span class="type">Type: </span><?=$anime->getType()?></li>
                        <li><span class="type">Episodes: </span><?=$anime->getEpisodes()?></li>
                        <li><span class="type">Release year: </span><?=$anime->getReleaseYear()?></li>
                    </div>
                </div>
            </div>
            <div class="title-rating">
                <div class="segment">
                    <div class="seg-heading">Rating</div>
                    <div class="list rate">
                        <div class="star-ratings-css"></div>
                        <div class="rating"><?=$anime->getRating()?></div>
                    </div>
                </div>
            </div>
            <div class="title-studio">
                <div class="segment">
                    <div class="seg-heading">Studio</div>
                    <div class="list st-name">
                        <a href="studio_page.php?studio_id=<?=$anime->getStudioId()?>">
                            <img src="<?=$anime->getImageStudio()?>" alt="<?=$anime->getStudioName()?>">
                        </a>
                    </div>
                </div>
            </div>
            <div class="title-content">
                <div class="segment">
                    <div class="seg-heading">Synopsis</div>
                    <div class="list"><?=$anime->getDescription()?></div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'includes/footer.php';?>
</div>
</body>
</html>
<style>
    .star-ratings-css:after{
        width: <?=($anime->getRating()*10).'%'?>;
    }
</style>
