        <?php 
            include 'header.php'; 
            include "connect.php";
        ?>

        <div class="wrapper">

            <main>

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
                        // image of 'no image'?
                    }
                ?>

                <!-- <img src="./images/main/white-text.jpg" alt="" title="Easy backpacking healthy meal"/> -->
                
                <div class="icon-row">

                    <?php 
                        $icons_sql = "SELECT image_file_name, image_description, image_href FROM `images` WHERE imagetype_id = '4'";
                        $icons_result = mysqli_query($connection ,$icons_sql) or die("Icons query failed");

                        if(mysqli_num_rows($icons_result) > 0)
                        {
                            while($row = mysqli_fetch_assoc($icons_result))
                            {
                                echo '<div class="icon">
                                <a href="'.$row['image_href'].'"><img src="./images/'.$row['image_file_name'].'" alt=""></a>
                                <a href="'.$row['image_href'].'"><h3>'.$row['image_description'].'</h3></a>
                                </div>';
                            }
                        }
                    ?>

                </div>

                <div class='row'>
                    <div class='column'>
                        <div class='left-column'>
                            Some Text in Column One
                        </div>
                    </div>
                    <div class='column'>
                        <div class='right-column'>
                            Some Text in Column Two
                        </div>
                    </div>
                </div>

            </main>

            <?php include 'footer.php'; ?>
        </div>

    </body>
</html>