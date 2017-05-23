<?php
	error_reporting(E_ALL & ~E_NOTICE);
	session_start();
?>
    <div class="sidebar">
        <div class="fixed">
            <a href="index.php">
                <p class="sidebar_header">Gratis för Alla</p>
            </a>
            <a href="index.php">
                <p class="sidebar_links">Hem</p>
            </a>
            <a href="form.php">
                <p class="sidebar_links">Ansök</p>
            </a>
            <a href="main.php">
                <p class="sidebar_links">Logga in</p>
            </a>
        </div>
        <div class="sidebar_socialmedia">
            <a href="www.facebook.se"><img src="./images/facebook.png"></a>
            <a href="www.twitter.se"><img src="./images/twitter.png"></a>
            <a href="www.instagram.com"><img src="./images/instagram.png"></a>
        </div>
        <a href="index.php">
            <p class="sidebar_header">Gratis för Alla</p>
        </a>
        <a href="index.php">
            <p class="sidebar_links">Hem</p>
        </a>
        <a href="form.php">
            <p class="sidebar_links">Ansök</p>
        </a>

        <?php if($_SESSION['id'] == 0){ ?>
        <a href="main.php">
            <p class="sidebar_links">Logga in</p>
        </a>
        <?php } ?>

        <?php if($_SESSION['rank'] > 0){ ?>
        <a href="main.php">
            <p class="sidebar_links">Se ansökningar</p>
        </a>
        <?php } ?>

        <?php if($_SESSION['rank'] > 0){ ?>
        <a href="handleAdmin.php">
            <p class="sidebar_links">Hantera admins</p>
        </a>
        <?php } ?>

        <?php if($_SESSION['rank'] == 0 && $_SESSION['id'] > 0){ ?>
        <a href="status.php">
            <p class="sidebar_links">Se min ansökan</p>
        </a>
        <?php } ?>

        <?php if($_SESSION['id'] > 0){ ?>
        <a href="./run/logout.php">
            <p class="sidebar_links">Logga ut</p>
        </a>
        <?php } ?>
    </div>
