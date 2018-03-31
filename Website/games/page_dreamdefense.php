<html>
    <head>
        <?php include "../head.php"; ?>
    </head>

    <body class="bgcolor">
        <?php include "../nav.php";
        ?>
        <div class="container contentpage contentwidth">
            <div class="item">
                <ol class="breadcrumb">
                    <li><a href="../developers.php">Developers</a></li>
                    <li><a href="../devs/page_altitudegames.php">Altitude Games</a></li>
                    <li><a href="../games.php">Games</a></li>
                    <li><a href="../games/page_dreamdefense.php">Warrior Defense</a></li>
                </ol>
                <div class="devbanner dreamdefense"></div>
                <?php include "../page-headers/page-header_dreamdefense.php";
                ?>
                <div class="panel panel-default">
                    <div class="panel-header"><h2>Reviews</h2></div>
                    <div class="panel-body">
                        <div id="disqus_thread"></div>
                        <script>
                        /**
                        *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                        *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                        /*
                        var disqus_config = function () {
                        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
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