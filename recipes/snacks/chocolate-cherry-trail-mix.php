<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Google tag (gtag.js) --> 
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-PM962QFHPC"></script>
        <script> 
            window.dataLayer = window.dataLayer || []; 
            function gtag(){dataLayer.push(arguments);} 
            gtag('js', new Date()); 
            gtag('config', 'G-PM962QFHPC'); 
        </script>
        <meta charset="utf-8">
        <meta name="description" content="Website about hiking meals">
        <meta name="keywords" content="some, keywords">
        <title>Hike Foodie</title>
        <meta name="author" content="Julija Celinska">
        <link rel="canonical" href="https://julija.uk/something/something.php" />
        <link rel="icon" type="image/x-icon" href="./images/hedgehog-4.png">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" href="../../style/style.css">
        <!-- Used by nav (arrow down) -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Add fonts if needed -->

        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script type="text/javascript">
			$( document ).ready(function() {
                $('.header').on('click', '.search-toggle', function(e) {
                var selector = $(this).data('selector');
                
                $(selector).toggleClass('show').find('.search-input').focus();
                $(this).toggleClass('active');
                
                e.preventDefault();
                });
			});
		</script>

    </head>
	<body>
        <?php include '../../includes/header.inc.php'; ?>

        <div class="wrapper">

            <main class="recipe-details">
              <h1>Chocolate Cherry Trail Mix</h1>

              <img src="../../images/snacks/chocolate-cherry-trail-mix.jpg" alt="">
              
              <h2>You'll need:</h2>
              <ul>
                <li>Walnuts</li>
                <li>Dried cherries (or dried cranberries)</li>
                <li>Dark chocolate chunks and/or cacao nibs</li>
                <li>Pumpkin seeds</li>
                <li>Dried blueberies</li>
              </ul>

              <h2>At home:</h2>
              <ul>
                <li>Mix walnuts, dried cherries, dark chocolate chunks/cacao nibs, pumpkin seeds, dried blueberies into a large mixing bowl.</li>
                <li>Stir ingredients so they are evenly distributed.</li>
                <li>Equally divide into plastic bags for easy distribution.</li>
              </ul>

              <h2>On the trail:</h2>
              <ul>
                <li>Enjoy on the go</li>
              </ul>

            </main>

            <?php include '../../includes/footer.inc.php'; ?>
        </div>

    </body>
</html>