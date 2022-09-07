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
                <h1>Breakfast</h1>

                <div class="recipe">

                    <img src="./images/risotto/risotto.jpg" alt="" title="">

                    <div class="info">
                        <h2>Risotto With Veggies</h2>
                        <p>This is one of our FAVORITE trail meals. Make risotto at home and dehydrate it along with some vegetables like peas and mushrooms. It’s creamy, filling, and feels super gourmet in the backcountry without a lot of fuss.</p>
                        <img src="./images/nutrition-2.png" alt="" title="">
                        <!-- <ul>
                            <li><img src="" alt=""></li>
                            <li><img src="" alt=""></li>
                            <li><img src="" alt=""></li>
                        </ul> -->
                        <div class="roundup-button">
                            <a href="risotto.php">Read more</a>
                        </div>                       
                    </div>

                </div>

                <div class="recipe">

                    <img src="./images/risotto/risotto.jpg" alt="" title="">

                    <div class="info">
                        <h2>Risotto With Veggies</h2>
                        <p>This is one of our FAVORITE trail meals. Make risotto at home and dehydrate it along with some vegetables like peas and mushrooms. It’s creamy, filling, and feels super gourmet in the backcountry without a lot of fuss.</p>
                        <!-- <img src="./images/nutrition.jpg" alt="" title=""> -->
                        <ul>
                            <li><span>Calories: </span>684kcal</li>
                            <li><span>Carbohydrates: </span>95g</li>
                            <li><span>Protein: </span>12g</li>
                            <li><span>Fat: </span>23g</li>
                            <li><span>Saturated Fat: </span>3g</li>
                        </ul>
                        <div class="roundup-button">
                            <a href="risotto.php">Read more</a>
                        </div>                       
                    </div>

                </div>

                <div class="recipe">

                    <img src="./images/risotto/risotto.jpg" alt="" title="">

                    <div class="info">
                        <h2>Risotto With Veggies</h2>
                        <p>This is one of our FAVORITE trail meals. Make risotto at home and dehydrate it along with some vegetables like peas and mushrooms. It’s creamy, filling, and feels super gourmet in the backcountry without a lot of fuss.</p>

                        <div class="roundup-button">
                            <a href="risotto.php">Read more</a>
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