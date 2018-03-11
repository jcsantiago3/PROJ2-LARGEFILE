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
                                        <a href="games/page_academiaschoolsimulator.php"><?php include "panels/panel_academiaschoolsimulator.php"; ?></a>
                                        <a href="games/page_adarnaalamatnimariablanca.php"><?php include "panels/panel_adarnaalamannimariablanca.php"; ?></a>
                                        <a href="games/page_book1pisces.php"><?php include "panels/panel_book1pisces.php"; ?></a>
                                        
                                    </div>
                                    <div class="row">
                                        <a href="games/page_brushstrokes.php"><?php include "panels/panel_brushstrokes.php";?></a>
                                        <a href="games/page_dragonsnack.php"><?php include "panels/panel_dragonsnack.php";?></a>
                                        <a href="games/page_dreamdefense.php"><?php include "panels/panel_dreamdefense.php";?></a>
                                    </div>
                                </div>
                                <div class="item"> <!--Item 2-->
                                    <div class="row">
                                        <a href="games/page_dungeonsouls.php"><?php include "panels/panel_dungeonsouls.php";?></a>
                                        <a href="games/page_endlessera.php"><?php include "panels/panel_endlessera.php";?></a>
                                        <a href="games/page_holyship.php"><?php include "panels/panel_holyship.php";?></a>
                                    </div>
                                    <div class="row">
                                        <a href="games/page_killtheplumber.php"><?php include "panels/panel_killtheplumber.php"; ?></a>
                                        <a href="games/page_mathoriathelastsolution.php"><?php include "panels/panel_mathoriathelastsolution.php"; ?></a>
                                        <a href="games/page_politicalanimals.php"><?php include "panels/panel_politicalanimals.php"; ?></a>
                                    </div>
                                </div>
                                <div class="item"> <!--Item 3-->
                                    <div class="row">
                                        <a href="games/page_pretentiousgame.php"> <?php include "panels/panel_pretentiousgame.php"; ?> </a>
                                        <a href="games/page_reverie.php"> <?php include "panels/panel_reverie.php"; ?> </a>
                                        <a href="games/page_runrunsuperv.php"> <?php include "panels/panel_runrunsuperv.php"; ?> </a>
                                    </div>
                                    <div class="row">
                                        <a href="games/page_sodes.php"><?php include "panels/panel_secretsofdeepearthshrine.php"; ?></a>
                                        <a href="games/page_theletter.php"><?php include "panels/panel_theletter.php"; ?></a>
                                        <a href="games/page_towerfortress.php"><?php include "panels/panel_towerdefense.php"; ?></a>
                                    </div>
                                </div>
                                <div class="item"> <!--Item 4-->
                                    <div class="row">
                                        <a href="games//page_warriordefense.php"><?php include "panels/panel_warriordefense.php";?></a>
                                        <a href="games//page_zodiacpop.php"><?php include "panels/panel_zodiacpop.php";?></a>
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