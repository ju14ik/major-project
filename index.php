        <?php 
            include 'header.php'; 
            include "connect.php";
        ?>

        <div class="wrapper">

            <main class="home-page">

                <?php
                    $heading_sql = "SELECT content.content_id, content.title, content.description, content.content, category.category_name, contentcategorytype.contenttype_id
                    FROM `contentcategorytype` 
                        INNER JOIN content ON content.content_id=contentcategorytype.content_id
                        INNER JOIN category ON category.category_id=contentcategorytype.category_id
                        INNER JOIN contenttype ON contenttype.contenttype_id=contentcategorytype.contenttype_id
                    WHERE category.category_id = '1' AND contentcategorytype.contenttype_id = '1' LIMIT 1";
                    $heading_result = mysqli_query($connection ,$heading_sql) or die("Home page query failed");
                    $heading_result_fetch = mysqli_fetch_array($heading_result);
                    $heading_h1 = '';
                    $heading_h2 = '';

                    if(mysqli_num_rows($heading_result) > 0)
                    {
                        $heading_h1 = $heading_result_fetch['title'];
                        $heading_h2 = $heading_result_fetch['content']; 
                    }

                    echo '<h1>'.$heading_h1.'</h1>';
                ?>

                <!-- <h1>Quick and delicious hiking food recipes</h1> -->

                <!-- Main image -->
                <?php
                    $images_sql = "SELECT image_file_name, image_href FROM `images` 
                                    WHERE imagetype_id = 5 LIMIT 1";
                    $images_result = mysqli_query($connection ,$images_sql) or die("Query failed");
                    $images_result_fetch = mysqli_fetch_array($images_result);

                    if(mysqli_num_rows($images_result) > 0)
                    {
                        echo '<img src="./images/'.$images_result_fetch['image_file_name'].'" alt="" title="">';                   
                    }
                    else
                    {
                        echo '<img src="./images/image_not_available.png" alt="" title="">'; 
                    }

                    echo '<h2>'.$heading_h2.'</h2>';
                ?>
                
                <!-- <h2>Going on a hike and don't know what food to bring and you are a foodie? Look no more, we have the best and healthiest recipes for you right here!</h2> -->

                <!-- Icons -->
                <div class="icon-row">

                    <?php 
                        $icons_sql = "SELECT image_file_name, image_description, image_href FROM `images` WHERE imagetype_id = '4'";
                        $icons_result = mysqli_query($connection ,$icons_sql) or die("Icons query failed");

                        if(mysqli_num_rows($icons_result) > 0)
                        {
                            while($row = mysqli_fetch_assoc($icons_result))
                            {
                                echo '<div class="icon">
                                <a href="'.$row['image_href'].'">
                                <img src="./images/'.$row['image_file_name'].'" alt="">
                                </a>
                                <a href="'.$row['image_href'].'">
                                <h3>'.$row['image_description'].'</h3>
                                </a>
                                </div>';
                            }
                        }
                    ?>

                </div>

                <!-- Main content -->
                <?php
                    $content_sql = "SELECT content.content_id, content.title, content.description, content.content, category.category_name, contentcategorytype.contenttype_id
                    FROM `contentcategorytype` 
                        INNER JOIN content ON content.content_id=contentcategorytype.content_id
                        INNER JOIN category ON category.category_id=contentcategorytype.category_id
                        INNER JOIN contenttype ON contenttype.contenttype_id=contentcategorytype.contenttype_id
                    WHERE category.category_id = '2' AND contentcategorytype.contenttype_id = '3'";
                    $content_result = mysqli_query($connection ,$content_sql) or die("Home page query failed");

                    if(mysqli_num_rows($content_result) > 0)
                    {
                        while($row = mysqli_fetch_assoc($content_result))
                        {
                            $content_id = $row['content_id'];
                            $images_sql = "SELECT image_file_name FROM `images` 
                                    WHERE content_id = '$content_id' AND imagetype_id = 2 LIMIT 1";
                            $images_result = mysqli_query($connection ,$images_sql) or die("Query failed 1.3");
                            $images_result_fetch = mysqli_fetch_array($images_result);
                            $content_img = '';

                            if(mysqli_num_rows($images_result) > 0)
                            {
                                $content_img = '<div class="column"><img class="home-img" src="./images/'.$images_result_fetch['image_file_name'].'" alt="" title=""></div>';                   
                            }

                            if ($content_id % 2 != 0) //odd
                            {
                                echo '<div class="row">
                                <div class="column">
                                <h2>'.$row['title'].'</h2>
                                <div class="roundup-button">
                                <a href="detail.php?content_id='.$content_id.'">Read more</a>
                                </div>
                                </div>'
                                .$content_img.
                                '</div>';
                            }
                            else {
                                echo '<div class="row">'
                                .$content_img.
                                '<div class="column">
                                <h2>'.$row['title'].'</h2>
                                <div class="roundup-button">
                                <a href="detail.php?content_id='.$content_id.'">Read more</a>
                                </div>
                                </div>
                                </div>';
                            }

                        }
                    }
                ?>

            </main>

            <?php include 'footer.php'; ?>
        </div>

    </body>
</html>