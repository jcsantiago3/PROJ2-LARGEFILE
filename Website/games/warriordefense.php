<html>
    <head>
        <?php include "../head.php"; ?>
        <title>The Dev's Story - Games - Warrior Defense</title>
    </head>

    <body class="bgcolor">
        <?php include "../nav.php";
        ?>
        <div class="container contentpage contentwidth">
            <div class="item">
                <ol class="breadcrumb">
                    <li><a href="../developers.php">Developers</a></li>
                    <li><a href="../devs/coffeebrain.php">Coffee Brain Games</a></li>
                    <li><a href="../games.php">Games</a></li>
                    <li><a href="../games/warriordefense.php">Warrior Defense</a></li>
                </ol>
                <div class="devbanner warriordefense"></div>
                <?php include "../page-headers/page-header_warriordefense.php";
                ?>
                <div class="panel panel-default">
                    <div class="panel-header"><h2>Reviews</h2></div>
                    <div class="panel-body">
                        <!--GOOGLE PLAY USER REVIEWS-->
                    <div class="user_reviews_summary_bar_play">
                            <div class="summary_section">
                                <div class="icon">
                                    <img src="../assets/img/reviewicons/Play.png" alt="">PLAY
                                </div>
                                <div class="title">Overall Rating:</div>
                                <span class="game_review_summary positive_play" data-tooltip-text="92% of the 356 user reviews for this game are positive."><strong>&#9733;&#9733;&#9733;&#9733;&#9734;</strong></span>
                                <span>(275 reviews)</span>
                            </div>
                        </div>
                    <!--END GOOGLE PLAY USER REVIEWS-->
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