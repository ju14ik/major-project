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
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&family=Quicksand:wght@400;500;700&display=swap" rel="stylesheet">
    </head>
	<body>
        <div class="wrapper">
            <!-- SERVER -->
            <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.inc.php'; ?>
            <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/navigation.inc.php'; ?>

            <!-- LOCAL -->
            <? //include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.inc.php'; ?>
            <? //include $_SERVER['DOCUMENT_ROOT'] . '/includes/navigation.inc.php'; ?>

            <main>
                <h1>Skills hub</h1>

                <div class="skills">
                    <div class="skill">
                        <img src="./images/backpacking-2.jpg" alt="" title="">
                        <h3>Backpacking Food Ideas</h3>
                        <p>The ultimate resource on backpacking food including tons of great meal ideas, how many calories to pack, and more</p>
                        <div class="roundup-button">
                            <a href="backpacking.php">Read more</a>
                        </div>   
                    </div>

                    <div class="skill">
                        <img src="./images/backpacking-2.jpg" alt="" title="">
                        <h3>Backpacking Food Ideas</h3>
                        <p>The ultimate resource on backpacking food including tons of great meal ideas, how many calories to pack, and more</p>
                        <div class="roundup-button">
                            <a href="backpacking.php">Read more</a>
                        </div>   
                    </div>

                    <div class="skill">
                        <img src="./images/backpacking-2.jpg" alt="" title="">
                        <h3>Backpacking Food Ideas</h3>
                        <p>The ultimate resource on backpacking food including tons of great meal ideas, how many calories to pack, and more</p>
                        <div class="roundup-button">
                            <a href="backpacking.php">Read more</a>
                        </div>   
                    </div>

                    <div class="skill">
                        <img src="./images/backpacking-2.jpg" alt="" title="">
                        <h3>Backpacking Food Ideas</h3>
                        <p>The ultimate resource on backpacking food including tons of great meal ideas, how many calories to pack, and more</p>
                        <div class="roundup-button">
                            <a href="backpacking.php">Read more</a>
                        </div>   
                    </div>
                </div>

            </main>

            <!-- SERVER -->
            <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.inc.php'; ?>

            <!-- LOCAL -->
            <? //include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.inc.php'; ?>
        </div>
    </body>
</html>