<?php 
            include 'header.php'; 
            include "connect.php";
            if(isset($_GET['search']))
            {
                $search = str_replace("+", "%", strtolower($_GET['search']));
            }
        ?>
        <div class="wrapper">
            <div class="heading">
                <h1>Search result</h1>
            </div>
            <main class="search">
                <?php
                    // Content search
                    // $search_sql = "SELECT content.content_id, content.title, content.description, content.content, category.category_name, contentcategorytype.contenttype_id
                    // FROM `contentcategorytype` 
                    //     INNER JOIN content ON content.content_id=contentcategorytype.content_id
                    //     INNER JOIN category ON category.category_id=contentcategorytype.category_id
                    //     INNER JOIN contenttype ON contenttype.contenttype_id=contentcategorytype.contenttype_id
                    // WHERE content.title LIKE '%{$search}%' OR content.description LIKE '%{$search}%' OR content.content LIKE '%{$search}%'";
                    // $search_result = mysqli_query($connection ,$search_sql) or die("Search query failed");

                    // if(mysqli_num_rows($search_result) > 0)
                    // {
                    //     $index = 1;
                    //     while($row = mysqli_fetch_assoc($search_result))
                    //     {
                    //         echo '<div class="search-result-item">'.$index.': '.'<a href="detail.php?content_id='.$row['content_id'].'">'.$row['title'].'</a></div>';
                    //         $index++;
                    //     }
                    // }
                    // else {
                    //     echo '<h3 class="no-content">No content found!</h3>';
                    // }

                    // Content block
                    $content_sql = "SELECT content.content_id, content.title, content.description, content.content, category.category_name, contentcategorytype.contenttype_id
                            FROM `contentcategorytype` 
                                INNER JOIN content ON content.content_id=contentcategorytype.content_id
                                INNER JOIN category ON category.category_id=contentcategorytype.category_id
                                INNER JOIN contenttype ON contenttype.contenttype_id=contentcategorytype.contenttype_id
                            WHERE (content.title LIKE '%{$search}%' OR content.description LIKE '%{$search}%' OR content.content LIKE '%{$search}%') AND contentcategorytype.contenttype_id = '2'";
                    $content_result = mysqli_query($connection ,$content_sql) or die("Recipes query failed");

                    if(mysqli_num_rows($content_result) > 0)
                    {
                        while($row = mysqli_fetch_assoc($content_result))
                        {
                            $content_id = $row['content_id'];
                            $images_sql = "SELECT image_file_name, image_alt FROM `images` 
                                    WHERE content_id = '$content_id' AND imagetype_id = 2 LIMIT 1";
                            $images_result = mysqli_query($connection ,$images_sql) or die("Images query failed");
                            $images_result_fetch = mysqli_fetch_array($images_result);
                ?>  
                            <div class="recipe">

                                <?php
                                    if(mysqli_num_rows($images_result) > 0)
                                    {
                                        echo '<img src="./images/'.$images_result_fetch['image_file_name'].'" alt="'.$images_result_fetch['image_alt'].'">';                   
                                    }
                                    else
                                    {
                                        echo '<img src="./images/image_not_available.png" alt="Image not available error">'; 
                                    }
                                ?> 

                                <div class="info">
                                    <?php 
                                        echo '<h2>'.$row['title'].'</h2>';
                                        echo $row['description']; 
                                    ?>
                                    
                                    <div class="readmore-button">
                                        <?php 
                                            if($search == '') {
                                                echo '<a href="detail.php?content_id='.$content_id.'&search=all">Read more</a>'; 
                                            }
                                            else {
                                                echo '<a href="detail.php?content_id='.$content_id.'&search='.$search.'">Read more</a>'; 
                                            }
                                        ?>
                                    </div>  
                                </div>
                            </div>
                <?php
                        }
                    }
                    else
                    {
                        echo '<h3 class="no-content">No content found!</h3>';
                    }
                ?>    
                <div class="nav-button back"><a href="index.php">Back</a></div>         
            </main>
        </div>
        <?php include 'footer.php'; ?>