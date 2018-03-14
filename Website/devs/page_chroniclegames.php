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
                    <li><a href="../devs/page_chroniclegames.php">Chronicle Games</a></li>
                </ol>
                <div class="devbanner chroniclegames"></div>
                <h1 class="center">Chronicle Games</h1>
                <hr>
                <div class="recentrelease">
                    <h1>Recent Release</h1>
                    <?php include "../dev-headers/dev-header_reverie.php"; ?>
                </div>
                <hr>
                <div>
                    <h3>Other Games</h3>
                    <?php include "../panels/panel_secretsofdeepearthshrine.php" ?>
                    <?php include "../panels/panel_endlessera.php" ?>
                    <?php include "../panels/panel_dragonsnack.php" ?>
                </div>
                <?php include "../dev-contact/dev-contact_chroniclegames.php"; ?>
            </div>
        </div>
        <?php include "../footer.php"; ?>
    </body>
<?php include "../scripts.php"; ?>
</html>