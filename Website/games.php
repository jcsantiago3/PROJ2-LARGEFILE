<html>
    <head>
        <?php include "head.php"; ?>
    </head>

    <body>
        <?php include "nav.php";
        ?>
        <div class="container contentpage contentwidth">
            <div class="item">
                <ol class="breadcrumb">
                    <li><a href="">Games</a></li>
                </ol>
                <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                        Sort by <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="">List</a></li>
                        <li><a href="">List</a></li>
                        <li><a href="">List</a></li>
                    </ul>
                </div>
                <h1> Games </h1>
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
                                        <?php
                                            include "panels/panel_academiaschoolsimulator.php";
                                            include "panels/panel_adarnaalamannimariablanca.php";
                                            include "panels/panel_book1pisces.php";
                                        ?>
                                    </div>
                                    <div class="row">
                                        <?php
                                            include "panels/panel_brushstrokes.php";
                                            include "panels/panel_dragonsnack.php";
                                            include "panels/panel_dreamdefense.php";
                                        ?>
                                    </div>
                                </div>
                                <div class="item"> <!--Item 2-->
                                    <div class="row">
                                        <?php
                                            include "panels/panel_dungeonsouls.php";
                                            include "panels/panel_endlessera.php";
                                            include "panels/panel_holyship.php";
                                        ?>
                                    </div>
                                    <div class="row">
                                        <?php
                                            include "panels/panel_killtheplumber.php";
                                            include "panels/panel_mathoriathelastsolution.php";
                                            include "panels/panel_politicalanimals.php";
                                        ?>
                                    </div>
                                </div>
                                <div class="item"> <!--Item 3-->
                                    <div class="row">
                                        <?php
                                            include "panels/panel_pretentiousgame.php";
                                            include "panels/panel_reverie.php";
                                            include "panels/panel_runrunsuperv.php";
                                        ?>
                                    </div>
                                    <div class="row">
                                        <?php
                                            include "panels/panel_secretsofdeepearthshrine.php";
                                            include "panels/panel_theletter.php";
                                            include "panels/panel_towerdefense.php";
                                        ?>
                                    </div>
                                </div>
                                <div class="item"> <!--Item 4-->
                                    <div class="row">
                                        <?php
                                            include "panels/panel_warriordefense.php";
                                            include "panels/panel_zodiacpop.php";
                                        ?>
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