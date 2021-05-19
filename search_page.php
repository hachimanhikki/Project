<?php
require_once 'includes/dbconn.php';
$search = $_GET['search'];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Hikikomori</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="icon" href="img/icons/logo-small.svg">
</head>

<body>
<?php include 'includes/header.php'; ?>
<div class="page">
    <header>
        <h1 class="heading">Search: <?=$search?></h1>
    </header>
    <div class="main">
        <div class="titles">
            <?php
            $sql = "select anime_id, title, release_year, type, image from anime where title like '%$search%'";
            $result = $conn->getConn()->query($sql);
            if($result->num_rows == 0)
                echo 'Sorry... There is no such anime';
            else
                while ($anime = $result->fetch_assoc()):?>
                <div class="title">
					<span class="img-decor">
						<span class="img-cut">
							<a href="anime_page.php?anime_id=<?=$anime['anime_id']?>">
								<img src="<?=$anime['image']?>" alt="<?=$anime['title']?>">
							</a>
						</span>
					</span>
                    <span class="title-align">
                        <span class="title-name"><a href="anime_page.php?anime_id=<?=$anime['anime_id']?>"><?=$anime['title']?></a></span>
					</span>
                    <span class="misc">
						<span class="right"><?=$anime['release_year']?></span>
						<span><?=$anime['type']?></span>
					</span>
                </div>
            <?php endwhile;?>
        </div>
        <?php include 'includes/sidebar.php';?>
    </div>
    <?php include 'includes/footer.php';?>
</div>
</body>

</html>