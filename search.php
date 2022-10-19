<?php 
            include 'header.php'; 
            include "connect.php";
            if(isset($_GET['search']))
            {
                $search = str_replace("", "%", strtolower($_GET['search']));
            }
        ?>
        <div class="wrapper">
            <main class="search">
                <?php
                    // Content text
                    $search_sql = "SELECT content.content_id, content.title, content.description, content.content, category.category_name, contentcategorytype.contenttype_id
                    FROM `contentcategorytype` 
                        INNER JOIN content ON content.content_id=contentcategorytype.content_id
                        INNER JOIN category ON category.category_id=contentcategorytype.category_id
                        INNER JOIN contenttype ON contenttype.contenttype_id=contentcategorytype.contenttype_id
                    WHERE content.title LIKE '%{$search}%' OR content.description LIKE '%{$search}%' OR content.content LIKE '%{$search}%'";
                    $search_result = mysqli_query($connection ,$search_sql) or die("Search query failed");

                    if(mysqli_num_rows($search_result) > 0)
                    {
                        $index = 1;
                        while($row = mysqli_fetch_assoc($search_result))
                        {

                            echo '<div class="search-result-item">'.$index.': '.'<a href="detail.php?content_id='.$row['content_id'].'">'.$row['title'].'</a></div>';
                            $index++;
                        }
                    }
                    else {
                        echo "<h2>No content found!</h2>";
                    }
                ?>  

            </main>
            <?php include 'footer.php'; ?>
        </div>
    </body>
</html>