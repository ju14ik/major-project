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
        <link rel="stylesheet" href="style/style.css">
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
        <?php include 'includes/header.inc.php'; ?>

        <div class="wrapper">

            <main>
                <img src="./images/main/white.jpg" alt="" title="Easy backpacking healthy meal"/>
                
                <div class="icon-row">

                    <div class="icon">
                        <a href="./recipes/breakfast/breakfast.php"><img src="./images/icons/breakfast.png" alt=""></a>
                        <h3>Breakfast</h3>
                    </div>

                    <div class="icon">
                        <a href=""><img src="./images/icons/lunch.png" alt=""></a>
                        <h3>Lunch</h3>
                    </div>

                    <div class="icon">
                        <a href=""><img src="./images/icons/dinner.png" alt=""></a>
                        <h3>Dinner</h3>
                    </div>

                    <div class="icon">
                        <a href="./recipes/snacks/snacks.php"><img src="./images/icons/snacks.png" alt=""></a>
                        <h3>Snacks</h3>
                    </div>

                    <div class="icon">
                        <a href="./recipes/stoveless-meals/stoveless-meals.php"><img src="./images/icons/stoveless-meals.png" alt=""></a>
                        <h3>Stoveless meals</h3>
                    </div>

                    <div class="icon">
                        <a href=""><img src="./images/icons/stove-cooked-meals.png" alt=""></a>
                        <h3>Stove cooked meals</h3>
                    </div>

                    <div class="icon">
                        <a href=""><img src="./images/icons/dessert.png" alt=""></a>
                        <h3>Dessert</h3>
                    </div>

                    <div class="icon">
                        <a href=""><img src="./images/icons/drinks.png" alt=""></a>
                        <h3>Drinks</h3>
                    </div>

                </div>

                <!-- <div class="icon-row">
                    <div class="icon">
                        <a href=""><img src="./images/icons/drinks.png" alt=""></a>
                        <h3>Drinks</h3>
                    </div>


                    <div class="icon">
                        <a href=""><img src="./images/icons/dessert.png" alt=""></a>
                        <h3>Dessert</h3>
                    </div>

                    <div class="icon">
                        <a href=""><img src="./images/icons/stove-cooked-meals.png" alt=""></a>
                        <h3>Stoveless meals</h3>
                    </div>

                    <div class="icon">
                        <a href=""><img src="./images/icons/stoveless-meals.png" alt=""></a>
                        <h3>Stove cooked meals</h3>
                    </div>

                </div> -->


                <div class='row'>
                    <div class='column'>
                        <div class='left-column'>
                            Some Text in Column One
                        </div>
                    </div>
                    <div class='column'>
                        <div class='right-column'>
                            Some Text in Column Two
                        </div>
                    </div>
                </div>

            </main>

            <?php include 'includes/footer.inc.php'; ?>
        </div>

    </body>
</html>