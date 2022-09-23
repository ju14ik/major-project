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

            <main>
                <h1>Snacks</h1>





                <div class="recipe">

                    <img src="../../images/snacks/cheese-and-meat-platter.jpg" alt="" title="">

                    <div class="info">
                        <h2>Cheese and Meat Platter</h2>
                        <p></p>

                        <div class="roundup-button">
                            <a href="cheese-and-meat-platter.php">Read more</a>
                        </div>    
                    </div>

                </div>

                <div class="recipe">

                    <img src="../../images/snacks/chocolate-cherry-trail-mix.jpg" alt="" title="">

                    <div class="info">
                        <h2>Chocolate Cherry Trail Mix</h2>
                        <p></p>  
                        
                        <div class="roundup-button">
                            <a href="chocolate-cherry-trail-mix.php">Read more</a>
                        </div>  
                    </div>

                </div>

            </main>

            <?php include '../../includes/footer.inc.php'; ?>
        </div>
    </body>
</html>