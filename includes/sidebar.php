<?php require_once 'dbconn.php'; ?>

<div class="sidebar">
    <div class="segment">
        <div class="seg-heading">Studios</div>
        <?php
        $sql = 'select studio_id, studio_name from studio';
        $result = $conn->getConn()->query($sql);
        while($studio = $result->fetch_assoc()):
        ?>
        <div class="list">
            <li><a href="studio_page.php?studio_id=<?=$studio['studio_id']?>"><?=$studio['studio_name']?></a></li>
        </div>
        <?php endwhile;?>
    </div>
    <div class="segment">
        <div class="seg-heading">Types</div>
        <?php
        $sql = 'select distinct type from anime order by type desc';
        $result = $conn->getConn()->query($sql);
        while($type = $result->fetch_assoc()):
            ?>
            <div class="list">
                <li><a href="type_page.php?type=<?=$type['type']?>"><?=$type['type']?></a></li>
            </div>
        <?php endwhile;?>
    </div>
</div>