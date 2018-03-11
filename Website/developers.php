<html>
    <head>
        <?php include "head.php"; ?>
    </head>

    <body>
        <?php include "nav.php";?>
        <div class="container contentpage contentwidth">
            <h1>Developers</h1>
            <div class="search-box">
                <form action="">
                    <input type="text" name="search_box">
                    <button name="search">Search</button>
                </form>
            </div>
            <div class="container">
                <div class="row">
                    <a href=""><?php include "dev-panels/panels-altitudegames.php"; ?></a>
                    <a href=""><?php include "dev-panels/panels-chroniclegames.php"; ?></a>
                    <a href=""><?php include "dev-panels/panels-coffeebrain.php"; ?></a>
                    <a href=""><?php include "dev-panels/panels-keybolgames.php"; ?></a>
                    </div>
                <div class="row">
                    <a href=""><?php include "dev-panels/panels-laminastudios.php"; ?></a>
                    <a href=""><?php include "dev-panels/panels-senshilabs.php"; ?></a>
                    <a href=""><?php include "dev-panels/panels-squeakywheelgames.php"; ?></a>
                    <a href=""><?php include "dev-panels/panels-yangyangmobile.php"; ?></a>
                </div>
            </div>
        </div>
        <?php include "footer.php" ?>
    </body>
    <?php include "scripts.php";?>
</html>