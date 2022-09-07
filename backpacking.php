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
                <h1>Easy Backpacking Food Ideas</h1>

                <p>Are you preparing your next backpacking trip's meals? To help you get started, we've collected a list of our favourite camping foods, ingredients, and meal ideas. Find out which foods are excellent for hiking, learn about new ingredients, and receive ideas for new backpacking dinners.</p>

                <img src="./images/backpacking-2.jpg" alt="" title="">

                <p>Let's get one thing straight: there's no guilt in eating prepared food on a backpacking trip! We understand. Before embarking on a vacation, not everyone has time to prepare their own backpacking meals.</p>

                <h2>What Makes For Good Backpacking Food?</h2>

                <p>When assessing whether a food is suitable for hiking, consider shelf-stability, weight, calorie density, and cooking speed.</p>

                <p>There are a few factors to keep in mind when determining whether a food is good for backpacking: shelf-stable, weight, calorie density, and cook speed.</p>

                <p><span>Shelf-Stable: </span>Ingredients that can be stored at room temperature are essential. You can bring some perishable items, such as cheese or salami, if you eat them within the first few days, but for the most part, you should avoid bringing anything perishable.</p>

                <p><span>Lightweight: </span>Backpacking food should be as light as possible because it will be carried every step of the trip. The lightest foods are dehydrated and freeze-dried, though there are plenty of grocery store options we'll go over as well.</p>
  
                <p><span>Calorie Dense: </span>Backpacking requires a lot of energy, so you'll want to eat foods that will help you refuel correctly. To keep the weight down, we strive to average 125+ calories per ounce while planning our camping meals.</p>

                <p><span>Cooking Time: </span>Think about how much time you'll need to cook your food and how much fuel you'll need. Most travellers prefer faster-cooking dishes to save on fuel.</p>

            </main>

            <!-- SERVER -->
            <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.inc.php'; ?>

            <!-- LOCAL -->
            <? //include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.inc.php'; ?>
        </div>
    </body>
</html>