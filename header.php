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

        // case 'single.php':
        //     if(isset($_GET['id']))
        //     {
        //         $sql_title = "SELECT * FROM post WHERE post_id={$_GET['id']}";
        //         $result_title = mysqli_query($connection , $sql_title);
        //         $row_title = mysqli_fetch_assoc($result_title);
        //         $page_title = $row_title['title'];
        //     }
        //     else
        //     {
        //         $page_title = "No post Found";

        //     }
        //     break;
        // case 'category.php':
        //     if(isset($_GET['cid']))
        //     {
        //         $sql_title = "SELECT * FROM category WHERE category_id={$_GET['cid']}";
        //         $result_title = mysqli_query($connection , $sql_title);
        //         $row_title = mysqli_fetch_assoc($result_title);
        //         $page_title = $row_title['category_name'];
        //     }
        //     else
        //     {
        //         $page_title = "No post Found";

        //     }
        //     break;
        // case 'author.php':
        //     if(isset($_GET['aid']))
        //     {
        //         $sql_title = "SELECT * FROM user WHERE user_id={$_GET['aid']}";
        //         $result_title = mysqli_query($connection , $sql_title);
        //         $row_title = mysqli_fetch_assoc($result_title);
        //         $page_title = $row_title['username'];
        //     }
        //     else
        //     {
        //         $page_title = "No post Found";

        //     }
        //     break;
        // case 'search.php':
        //     $page_title = $_GET['search'];
        //     break;
        
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
        <meta name="description" content="Website about hiking meals">
        <meta name="keywords" content="some, keywords">
        <meta name="author" content="Julija Celinska">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">
        <!-- Title -->
        <title><?php echo $page_title; ?></title>
        <!-- Links -->
        <link rel="canonical" href="https://julija.uk/something/something.php" />
        <link rel="icon" type="image/x-icon" href="./images/hedgehog-4.png">
        <link rel="stylesheet" href="style/style.css?version=4">
        <!-- Used by nav (arrow down) -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Add fonts if needed -->
        <!-- Scripts -->
        <!-- <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script type="text/javascript">
			$( document ).ready(function() {
                $('.header').on('click', '.search-toggle', function(e) {
                var selector = $(this).data('selector');
                
                $(selector).toggleClass('show').find('.search-input').focus();
                $(this).toggleClass('active');
                
                e.preventDefault();
                });
			});
		</script> -->

    </head>
	<body>
        <header id="header-1" class="header">  
            <div class="container">  

                <!-- Logo -->
                <?php
                    include 'connect.php';
                    $images_sql = "SELECT image_file_name, image_href FROM `images` 
                                    WHERE imagetype_id = 1 LIMIT 1";
                    $images_result = mysqli_query($connection ,$images_sql) or die("Query failed");
                    $images_result_fetch = mysqli_fetch_array($images_result);

                    if(mysqli_num_rows($images_result) > 0)
                    {
                        echo '<a href="'.$images_result_fetch['image_href'].'"><img src="./images/'.$images_result_fetch['image_file_name'].'" alt="" title=""></a>';                   
                    }
                    else
                    {
                        echo '<a href="'.$images_result_fetch['image_href'].'"><img src="./images/image_not_available.png" alt="" title=""></a>';        
                    }
                ?>
           
                <form action="./search.php" autocomplete="on">
                    <input id="search" name="search" type="text" placeholder="What are you looking for?">
                    <!-- <input class="fa fa-search" id="search_submit" value="Rechercher" type="submit"> -->
                    <button class="search-button" type="submit"><i class="fa fa-search fa-2x"></i></button>
                </form>

            </div>
        </header>