<html>
    <head>
        <?php include "../head.php"; ?>
        <title>The Dev's Story - Games - Political Animals</title>
    </head>

    <body class="bgcolor">
        <?php include "../nav.php";
        ?>
        <div class="container contentpage contentwidth">
            <div class="item">
                <ol class="breadcrumb">
                    <li><a href="../developers.php">Developers</a></li>
                    <li><a href="../devs/squeakywheelgames.php">Squeaky Wheel Games</a></li>
                    <li><a href="../games.php">Games</a></li>
                    <li><a href="../games/politicalanimals.php">Political Animals</a></li>
                </ol>
                <div class="devbanner politicalanimals"></div>
                <?php include "../page-headers/page-header_politicalanimals.php";
                ?>
                <div class="panel panel-default">
                    <div class="panel-header"><h2>Reviews</h2></div>
                    <div class="panel-body">
                    <!--STEAM USER REVIEWS-->
                    <div class="user_reviews_summary_bar">
                            <div class="summary_section">
                                <div class="icon">
                                    <img src="../assets/img/reviewicons/Steam.png" alt="">STEAM
                                </div>
                                <div class="title">Overall Reviews:</div>
                                <span class="game_review_summary positive" data-tooltip-text="70% of the 78 user reviews for this game are positive."><strong>Mostly Positive</strong></span>
                                <span>(78 reviews)</span>
                            </div>
                        </div>
                    <!--END STEAM USER REVIEWS-->
                        <div id="disqus_thread"></div>
                        <script>
                        /**
                        *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                        *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                        /*
                        var disqus_config = function () {
                        this.page.url = URL;  // Replace URL with your page's canonical URL variable
                        this.page.identifier = IDENTIFIER; // Replace IDENTIFIER with your page's unique identifier variable
                        };
                        */
                        (function() { // DON'T EDIT BELOW THIS LINE
                        var d = document, s = d.createElement('script');
                        s.src = 'https://devsstory.disqus.com/embed.js';
                        s.setAttribute('data-timestamp', +new Date());
                        (d.head || d.body).appendChild(s);
                        })();
                        </script>
                        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                    </div>
                </div>
            </div>
        </div>
        <?php include "../footer.php" ?>
    </body>
    <?php include "../scripts.php"?>
</html>