<html>
    <head>
        <?php include "../head.php"; ?>
    </head>

    <body>
        <?php include "../nav.php"; ?>
        <div class="contentpage contentwidth container">
            <div class="item">
                <ol class="breadcrumb">
                    <li><a href="">Developers</a></li>
                    <li><a href="">Coffee Brain Games</a></li>
                </ol>
                <div class="devbanner keybolgames"></div>
                <h1 class="center">Coffee Brain Games</h1>
                <hr>
                <div class="recentrelease">
                    <h1>Recent Release</h1>
                    <?php include "../dev-headers/dev-header_towerfortress.php"; ?>
                </div>
                <hr>
                <div>
                    <h3>Other Games</h3>
                    <?php include "../panels/panel_killtheplumber.php" ?>
                    <?php include "../panels/panel_pretentiousgame.php" ?>
                </div>
                <?php include "../dev-contact/dev-contact_keybolgames.php"; ?>
            </div>
        </div>
        <?php include "../footer.php"; ?>
    </body>
<?php include "../scripts.php"; ?>
</html>