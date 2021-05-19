<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $search = $_POST['search'];
    header("Location: search_page.php?search=$search");
}
?>
<div class="bar">
    <div class="menu">
        <div class="sign-in" tabindex="0">
            <a href="#"><i class="signin-icon">::before</i></a>
        </div>
        <div class="logo">
            <a href="index.php">
                <div class="glyph"></div>
                <div class="logo-icon"></div>
            </a>
        </div>
        <div class="search" tabindex="0">
            <label for="search"><i class="loop-icon">::before</i></label>
            <form method="post">
                <input type="text" name="search" size="70" id="search" placeholder="Search...">
            </form>
        </div>
    </div>
</div>