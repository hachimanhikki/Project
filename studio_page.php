<?php require_once 'includes/dbconn.php'; ?>

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
        <h1 class="heading">
            <?php
            $id = $_GET['studio_id'];
            $sql = "select studio_name from studio where studio_id = $id";
            $result = $conn->getConn()->query($sql);
            $studio = $result->fetch_assoc()['studio_name'];
            $check = strpos(strtolower($studio), 'studio');
            if($check === false)
                echo $studio.' studio';
            else
                echo $studio;
            ?></h1>
        <div class="subheading">On this page titles were sorted by their studio</div>
    </header>
    <div class="main">
        <div class="titles">
            <?php
            $sql = "select anime_id, title, release_year, type, image from anime where studio_id = $id";
            $result = $conn->getConn()->query($sql);
            while ($anime = $result->fetch_assoc()):
                ?>
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