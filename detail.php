<?php 
            include 'header.php'; 
            include "connect.php";
            $content_id = 0;
            $start_content_id = 0;
            $end_content_id = 0;
            $pagename = '';
            if(isset($_GET['content_id']))
            {
                $content_id = $_GET['content_id'];
            }
            if(isset($_GET['pagename']))
            {
                $pagename = $_GET['pagename'];
            }
            if(isset($_GET['start_content_id']))
            {
                $start_content_id = $_GET['start_content_id'];
            }
            if(isset($_GET['end_content_id']))
            {
                $end_content_id = $_GET['end_content_id'];
            }
        ?>
        <div class="wrapper">
            <main class="details">
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
                        $image = '<img src="./images/'.$images_result_fetch['image_file_name'].'" alt="" title="">';  
                    }

                    if(mysqli_num_rows($content_result) > 0)
                    {
                        echo '<h1>'.$content_result_fetch['title'].'</h1>';
                        echo $image;
                        echo $content_result_fetch['content'];
                        
                    }
                    else {
                        echo '<h3 class="no-content">No content found!</h3>';
                    }
                ?>  

                    <?php 
                        if($start_content_id > 0 && $end_content_id > 0) {
                            if($start_content_id == $content_id && $end_content_id == $content_id) {
                                //Back button
                                echo '<div class="nav-button back"><a href="content.php?pagename='.$pagename.'">Back</a></div>';
                            }
                            if($start_content_id < $content_id) {
                                //Previous button
                                echo '<div class="nav-button previous"><a href="detail.php?content_id='.($content_id-1).'&start_content_id='.$start_content_id.'&end_content_id='.$end_content_id.'">&laquo; Previous</a></div>'; 
                            }
                            if($end_content_id > $content_id) {
                                //Next button
                                echo '<div class="nav-button next"><a href="detail.php?content_id='.($content_id+1).'&start_content_id='.$start_content_id.'&end_content_id='.$end_content_id.'">Next &raquo;</a></div>'; 
                            }
                        }
                        else {
                            echo '<div class="nav-button back"><a href="index.php">Back</a></div>';
                        }
                    ?>
            </main>
            <?php include 'footer.php'; ?>
        </div>
    </body>
</html>