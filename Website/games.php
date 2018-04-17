<html>
    <head>
        <?php include "head.php"; ?>
        <title>The Dev's Story - Games</title>
        <script src="../assets/js/script.js"></script>
    </head>
    <body class="bgcolor" onload="gamespageloaded()">
        <?php include "nav.php";
        ?>
        <div class="container contentpage contentwidth">
            <div class="item">
                <ol class="breadcrumb">
                    <li><a href="../games.php">Games</a></li>
                </ol>
                <h1 class="whitetext"> Games </h1>
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Filter<span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a onclick="filter_showall()">Show All</a></li>
                        <li class="divider"></li>
                        <li class="dropdown-header">Alphabetical</li>
                        <li><a onclick="filter_atoz()">A -> Z</a></li>
                        <li><a onclick="filter_ztoa()">Z -> A</a></li>
                        <li class="divider"></li>
                        <li class="dropdown-header">By Price</li>
                        <li><a onclick="filter_asc()">Ascending</a></li>
                        <li><a onclick="filter_desc()">Descending</a></li>
                    </ul>
                </div>
                <hr>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div id="showall">
                            <?php include "filters/showall.php"; ?>
                        </div>
                        <div id="atoz">
                            <?php include "filters/atoz.php"; ?>
                        </div>
                        <div id="ztoa">
                            <?php include "filters/ztoa.php"; ?>
                        </div>
                        <div id="asc">
                            <?php include "filters/priceascending.php"; ?>
                        </div>
                        <div id="desc">
                            <?php include "filters/pricedescending.php"; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include "footer.php" ?>
    </body>
    <?php include "scripts.php";?>
</html>