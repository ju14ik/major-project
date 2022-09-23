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
              <h1>Cheese and Meat Platter</h1>

              <img src="../../images/breakfast/oatmeal.jpg" alt="">
              
              <h2>You'll need:</h2>
              <ul>
                <li>30g cup quick cooking oats</li>
                <li>boiling water</li>
                <li>2 tablespoons powdered milk</li>
                <li>1 teaspoon of sugar</li>
                <li>10g dried coconut flakes</li>
                <li>1 Passion fruit</li>
                <li>1 Apple</li>
                <li>10g Almonds</li>
                <li>2 Tbsp Honey</li>
                <li>Salt</li>
              </ul>

              <h2>At home:</h2>
              <ul>                
                <li>Mix oats, powdered milk, sugar, coconut flakes, almonds and salt in a zip lock bag.</li>             
              </ul>

              <h2>On the trail:</h2>
              <ul>
                <li>Bring 20ml to 120ml of water to a boil, pour all the ingredients from zip lock bag, stir, and let stand for 5 minutes . Add sliced apple and passion fruit</li>
              </ul>

            </main>

            <?php include '../../includes/footer.inc.php'; ?>
        </div>

    </body>
</html>