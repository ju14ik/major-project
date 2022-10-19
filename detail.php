<?php 
            include 'header.php'; 
            include "connect.php";
            if(isset($_GET['content_id']))
            {
                $content_id = $_GET['content_id'];
            }
        ?>
        <div class="wrapper">
            <main class="recipe-details">
                <?php
                    $images_sql = "SELECT image_file_name FROM `images` 
                            WHERE content_id = '$content_id' AND imagetype_id = 3 LIMIT 1";
                    $images_result = mysqli_query($connection ,$images_sql) or die("Image query failed 1.3.1");
                    $images_result_fetch = mysqli_fetch_array($images_result);

                    $content_sql = "SELECT content.content_id, content.title, content.description, content.content, category.category_name, contentcategorytype.contenttype_id
                    FROM `contentcategorytype` 
                        INNER JOIN content ON content.content_id=contentcategorytype.content_id
                        INNER JOIN category ON category.category_id=contentcategorytype.category_id
                        INNER JOIN contenttype ON contenttype.contenttype_id=contentcategorytype.contenttype_id
                    WHERE content.content_id = '$content_id' LIMIT 1";
                    $content_result = mysqli_query($connection ,$content_sql) or die("Query failed 1.1");
                    $content_result_fetch = mysqli_fetch_array($content_result);
                    $image = '';

                    if(mysqli_num_rows($images_result) > 0)
                    {
                        // Image
                        //echo '<img src="./images/'.$images_result_fetch['image_file_name'].'" alt="" title="">';  
                        $image = '<img src="./images/'.$images_result_fetch['image_file_name'].'" alt="" title="">';  
                    }

                    if(mysqli_num_rows($content_result) > 0)
                    {
                        // Title + text
                        echo '<h1>'.$content_result_fetch['title'].'</h1>';
                        echo $image;
                        echo $content_result_fetch['content'];
                        
                    }
                    else {
                        echo '<h3 class="no-content">No content found!</h3>';
                    }
                ?>  

            </main>
            <?php include 'footer.php'; ?>
        </div>
    </body>
</html>