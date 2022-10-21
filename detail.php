        <?php 
            include 'header.php'; 
            include "connect.php";
            $content_id = 0;
            $start_content_id = 0;
            $end_content_id = 0;
            $pagename = '';
            $search = '';
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
            if(isset($_GET['search']))
            {
                $search = $_GET['search'];
            }
        ?>
        <div class="wrapper">
            <main class="details">
                <?php
                    $images_sql = "SELECT image_file_name, image_alt FROM `images` 
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
                        $image = '<div class="details-img"><img src="./images/'.$images_result_fetch['image_file_name'].'" alt="'.$images_result_fetch['image_alt'].'"></div>';  
                    }

                    if(mysqli_num_rows($content_result) > 0)
                    {
                        echo '<div class="heading"><h1>'.$content_result_fetch['title'].'</h1></div>';
                        echo $image;
                        echo $content_result_fetch['content'];
                        

                        // Other recipes from this category
                        $other_sql = "SELECT content.content_id, content.title, content.description, content.content, category.category_name, contentcategorytype.contenttype_id
                        FROM `contentcategorytype` 
                            INNER JOIN content ON content.content_id=contentcategorytype.content_id
                            INNER JOIN category ON category.category_id=contentcategorytype.category_id
                            INNER JOIN contenttype ON contenttype.contenttype_id=contentcategorytype.contenttype_id
                        WHERE (category.category_name = '$pagename' OR '$pagename' = '') AND contentcategorytype.contenttype_id = '2'";
                        $other_result = mysqli_query($connection ,$other_sql) or die("Recipes query failed");

                        if(mysqli_num_rows($other_result) > 0)
                        {
                            echo '<div class="other-recipes-container">
                                    <h2>Other recipes from this category:</h2>
                                    <div class="recipes-block">';

                            $index = 0;
                            $other_start_content_id = 0;
                            $other_end_content_id = 0;
                            while($row = mysqli_fetch_assoc($other_result))
                            {
                                $other_content_id = $row['content_id'];
                                $images_sql = "SELECT image_file_name, image_alt FROM `images` 
                                        WHERE content_id = '$other_content_id' AND imagetype_id = 2 LIMIT 1";
                                $images_result = mysqli_query($connection ,$images_sql) or die("Images query failed");
                                $images_result_fetch = mysqli_fetch_array($images_result);

                                if($index == 0) {
                                    $other_start_content_id = $other_content_id;
                                }
                                if(mysqli_num_rows($other_result) > 0) {
                                    $other_end_content_id = $other_start_content_id+(mysqli_num_rows($other_result)-1);
                                }

                                if(mysqli_num_rows($images_result) > 0)
                                {
                                    echo    '<div class="other-recipe">
                                                <a href="detail.php?content_id='.$other_content_id.'&pagename='.$pagename.'&start_content_id='.$other_start_content_id.'&end_content_id='.$other_end_content_id.'">
                                                    <img src="./images/'.$images_result_fetch['image_file_name'].'" alt="'.$images_result_fetch['image_alt'].'">
                                                    <h2>'.$row['title'].'</h2>
                                                </a>
                                            </div>';                   
                                }
                                else
                                {
                                    echo    '<div class="other-recipe">
                                                <a href="detail.php?content_id='.$other_content_id.'&pagename='.$pagename.'&start_content_id='.$other_start_content_id.'&end_content_id='.$other_end_content_id.'">
                                                    <img src="./images/image_not_available.png" alt="Image not available error">
                                                    <h2>'.$row['title'].'</h2>
                                                </a>
                                            </div>'; 
                                }
                                $index++;
                            }
                            echo '</div></div>';
                        }
                    }
                    else {
                        echo '<h3 class="no-content">No content found!</h3>';
                    }          
                ?>  
                    <!-- Bottom navigation buttons -->
                    <?php 
                        if($start_content_id > 0 && $end_content_id > 0) {
                            echo '<div class="bottom-buttons">';
                            if($start_content_id == $content_id && $end_content_id == $content_id) {
                                //Back button
                                echo '<div class="nav-button back"><a href="content.php?pagename='.$pagename.'">Back</a></div>';
                            }
                            if($start_content_id < $content_id) {
                                //Previous button
                                echo '<div class="nav-button previous"><a href="detail.php?pagename='.$pagename.'&content_id='.($content_id-1).'&start_content_id='.$start_content_id.'&end_content_id='.$end_content_id.'">&laquo; Previous</a></div>'; 
                            }
                            if($end_content_id > $content_id) {
                                //Next button
                                echo '<div class="nav-button next"><a href="detail.php?pagename='.$pagename.'&content_id='.($content_id+1).'&start_content_id='.$start_content_id.'&end_content_id='.$end_content_id.'">Next &raquo;</a></div>'; 
                            }
                            echo '</div>';
                        }
                        else {
                            if($search != '' && $search != 'all') {
                                echo '<div class="nav-button back"><a href="search.php?search='.$search.'">Back</a></div>';
                            }
                            elseif($search == 'all') {
                                echo '<div class="nav-button back"><a href="search.php?search=">Back</a></div>';
                            }
                            else {
                                echo '<div class="nav-button back"><a href="index.php">Back</a></div>';
                            }
                        }
                    ?>
            </main>
        </div>
        <?php include 'footer.php'; ?>