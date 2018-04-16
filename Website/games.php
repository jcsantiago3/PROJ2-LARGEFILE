<html>
    <head>
        <?php include "head.php"; ?>
        <title>The Dev's Story - Games</title>
    </head>

    <body class="bgcolor">
        <?php include "nav.php";
        ?>
        <div class="container contentpage contentwidth">
            <div class="item">
                <ol class="breadcrumb">
                    <li><a href="../games.php">Games</a></li>
                </ol>
                <h1 class="whitetext"> Games </h1>
                <hr>
                <div class="panel panel-default">
                    <div class="carousel" id="gamesCarousel" data-ride="carousel" data-interval="false">
                        <ol class="carousel-indicators black indicators-color">
                            <li data-target="#gamesCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#gamesCarousel" data-slide-to="1"></li>
                            <li data-target="#gamesCarousel" data-slide-to="2"></li>
                            <li data-target="#gamesCarousel" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="panel-body">
                                <div class="item active"><!--Item 1-->
                                    <div class="row">
                                        <?php include "panels/panel_academiaschoolsimulator.php"; ?>
                                        <?php include "panels/panel_adarnaalamannimariablanca.php"; ?>
                                        <?php include "panels/panel_book1pisces.php"; ?>
                                        
                                    </div>
                                    <div class="row">
                                        <?php include "panels/panel_brushstrokes.php";?>
                                        <?php include "panels/panel_dragonsnack.php";?>
                                        <?php include "panels/panel_dreamdefense.php";?>
                                    </div>
                                </div>
                                <div class="item"> <!--Item 2-->
                                    <div class="row">
                                        <?php include "panels/panel_dungeonsouls.php";?>
                                        <?php include "panels/panel_endlessera.php";?>
                                        <?php include "panels/panel_killtheplumber.php"; ?>
                                    </div>
                                    <div class="row">
                                        <?php include "panels/panel_mathoriathelastsolution.php"; ?>
                                        <?php include "panels/panel_politicalanimals.php"; ?>
                                        <?php include "panels/panel_pretentiousgame.php"; ?>
                                    </div>
                                </div>
                                <div class="item"> <!--Item 3-->
                                    <div class="row">
                                        <?php include "panels/panel_reverie.php"; ?>
                                        <?php include "panels/panel_runrunsuperv.php"; ?>
                                        <?php include "panels/panel_secretsofdeepearthshrine.php"; ?>
                                    </div>
                                    <div class="row">
                                        <?php include "panels/panel_theletter.php"; ?>
                                        <?php include "panels/panel_towerfortress.php"; ?>
                                        <?php include "panels/panel_warriordefense.php";?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include "footer.php" ?>
    </body>
    <?php include "scripts.php";?>
</html>