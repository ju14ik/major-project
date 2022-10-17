        <?php 
            include 'header.php'; 
            include "connect.php";
        ?>

        <div class="wrapper">

            <main>
                <img src="./images/main/white-text.jpg" alt="" title="Easy backpacking healthy meal"/>
                
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

                    <!-- <div class="icon">
                        <a href="content.php?pagename=breakfast"><img src="./images/icons/breakfast.png" alt=""></a>
                        <h3>Breakfast</h3>
                    </div>

                    <div class="icon">
                        <a href=""><img src="./images/icons/lunch.png" alt=""></a>
                        <h3>Lunch</h3>
                    </div>

                    <div class="icon">
                        <a href=""><img src="./images/icons/dinner.png" alt=""></a>
                        <h3>Dinner</h3>
                    </div>

                    <div class="icon">
                        <a href="./recipes/snacks/snacks.php"><img src="./images/icons/snacks.png" alt=""></a>
                        <h3>Snacks</h3>
                    </div>

                    <div class="icon">
                        <a href="./recipes/stoveless-meals/stoveless-meals.php"><img src="./images/icons/stoveless-meals.png" alt=""></a>
                        <h3>Stoveless meals</h3>
                    </div>

                    <div class="icon">
                        <a href=""><img src="./images/icons/stove-cooked-meals.png" alt=""></a>
                        <h3>Stove cooked meals</h3>
                    </div>

                    <div class="icon">
                        <a href=""><img src="./images/icons/dessert.png" alt=""></a>
                        <h3>Dessert</h3>
                    </div>

                    <div class="icon">
                        <a href=""><img src="./images/icons/drinks.png" alt=""></a>
                        <h3>Drinks</h3>
                    </div> -->

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