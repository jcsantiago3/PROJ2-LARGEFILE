<html>
    <head>
        <?php include "../head.php"; ?>
    </head>

    <body class="bgcolor">
        <?php include "../nav.php"; ?>
        <div class="contentpage contentwidth container">
            <div class="item">
                <ol class="breadcrumb">
                    <li><a href="../developers.php">Developers</a></li>
                    <li><a href="../devs/keybolgames.php">Keybol Games</a></li>
                </ol>
                <div class="devbanner keybolgames"></div>
                <h1 class="center whitetext">Keybol Games</h1>
                <hr>
                <div class="recentrelease">
                    <h1 class="whitetext">Recent Release</h1>
                    <?php include "../dev-headers/dev-header_towerfortress.php"; ?>
                </div>
                <hr>
                <div>
                    <h3 class="whitetext">Other Games</h3>
                    <?php include "../panels/panel_killtheplumber.php" ?>
                    <?php include "../panels/panel_pretentiousgame.php" ?>
                </div>
                <div class="whitetext">
                    <?php include "../dev-contact/dev-contact_keybolgames.php"; ?>
                </div>
            </div>
        </div>
        <?php include "../footer.php"; ?>
    </body>
<?php include "../scripts.php"; ?>
</html>