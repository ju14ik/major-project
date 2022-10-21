<?php
    include 'connect.php';
    $title_name = basename($_SERVER['PHP_SELF']);
    $default_page_title = 'Hike Foodie';
    switch ($title_name) {
        case 'content.php':
            if(isset($_GET['pagename']))
            {
                $page_title = $default_page_title . ' | ' . $_GET['pagename'];
            }
            else
            {
                $page_title = "No content found";
            }
            break;       
        default:
            $page_title = $default_page_title;
            break;
    }
?>

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
        <!-- meta -->
        <meta charset="utf-8">
        <meta name="description" content="Website about hiking food">
        <meta name="keywords" content="hiking food, hiking meals, hike foodie, hiking breakfast, hiking lunch, hiking dinner, hiking snacks, hiking dessert, hiking drinks">
        <meta name="author" content="Julija Celinska">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">
        <!-- Title -->
        <title><?php echo $page_title; ?></title>
        <!-- Links -->
        <link rel="canonical" href="https://julija.uk/something/something.php" />
        <link rel="icon" type="image/x-icon" href="./images/favicon.png">
        <link rel="stylesheet" href="style/style.css?version=38">
        <!-- Used by search button -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css'>
    </head>
	<body>
        <header id="header-1" class="header">  
            <div class="container">  

                <!-- Logo -->
                <?php
                    include 'connect.php';
                    $images_sql = "SELECT image_file_name, image_href, image_alt FROM `images` 
                                    WHERE imagetype_id = 1 LIMIT 1";
                    $images_result = mysqli_query($connection ,$images_sql) or die("Query failed");
                    $images_result_fetch = mysqli_fetch_array($images_result);

                    if(mysqli_num_rows($images_result) > 0)
                    {
                        echo '<a href="'.$images_result_fetch['image_href'].'"><img src="./images/'.$images_result_fetch['image_file_name'].'" alt="'.$images_result_fetch['image_alt'].'"></a>';                   
                    }
                    else
                    {
                        echo '<a href="'.$images_result_fetch['image_href'].'"><img src="./images/image_not_available.png" alt="Image not available error"></a>';        
                    }
                ?>
                <div class="search-form-container">
                    <form class="search-form" action="./search.php" autocomplete="on">
                        <input id="search" name="search" type="text" placeholder="What are you looking for?">
                        <button class="search-button" type="submit"><i class="fa fa-search fa-2x"></i></button>
                    </form>
                </div>
            </div>
        </header>