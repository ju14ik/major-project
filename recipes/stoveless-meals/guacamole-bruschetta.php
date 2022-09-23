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
              <h1>Guacamole bruschetta</h1>

              <img src="../../images/stoveless-meals/guacamole-bruschetta.jpg" alt="">
              
              <h2>You'll need:</h2>
              <ul>
                <li>1/2 loaf French bread</li>
                <li>2 tablespoons olive oil</li>
                <li>2 ripe avocados</li>
                <li>1 Tomato</li>
                <li>1 Lime</li>
                <li>1 Small red onion</li>
                <li>Black pepper</li>
                <li>Dried Chile pepper</li>
                <li>Sesame seeds</li>
                <li>Salt</li>
              </ul>

              <h2>At home:</h2>
              <ul>
                <li>Pack all the ingredients separately.</li>
              </ul>

              <h2>On the trail:</h2>
              <ul>
                <li>Heat up the olive oil in a pan, lightly toast the bread for a minute each side.</li>
                <li>Remove the bread from the pan and set aside</li>
                <li>Cut the avocado in 2, remove the stone and scoop out the flesh into a bowl. Mash with a fork</li>
                <li>Add tomato, red onion, lime juice, black pepper, salt, and mix until well combined</li>
                <li>Spoon a portion of the mixture onto each of bruschetta and sprinkle dried Chile pepper and sesame seeds on top.</li>
              </ul>

            </main>

            <?php include '../../includes/footer.inc.php'; ?>
        </div>

    </body>
</html>