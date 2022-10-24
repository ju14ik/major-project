        <footer>
            <ul class="social">
                <li class="icon facebook">
                    <span class="tooltip">Facebook</span>
                    <a href="https://www.facebook.com/hikefoodie"><span><i class="fab fa-facebook-f"></i></span>&#8203;</a>
                </li>
                <li class="icon twitter">
                    <span class="tooltip">Twitter</span>
                    <a href="https://twitter.com/hikefoodie"><span><i class="fab fa-twitter"></i></span>&#8203;</a>
                </li>
                <li class="icon instagram">
                    <span class="tooltip">Instagram</span>
                    <a href="https://instagram.com/hike.foodie"><span><i class="fab fa-instagram"></i></span>&#8203;</a>
                </li>
                <li class="icon youtube">
                    <span class="tooltip">Youtube</span>
                    <a href="https://www.youtube.com/channel/UCOGukfrt7i9nj6gGWYq6hiQ"><span><i class="fab fa-youtube"></i></span>&#8203;</a>
                </li>
            </ul>

            <ul class="bottom-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="content.php">All recipes</a></li>
                <li><a href="contact.php">Contact us</a></li>
            </ul>
            <p>&copy; Julija Celinska 2022</p>
        </footer>
        <button onclick="topFunction()" id="myBtn" title="Go to top">
            <i class="fa fa-long-arrow-alt-up"></i>
        </button>

        <script>
            // Get the button
            let mybutton = document.getElementById("myBtn");

            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {scrollFunction()};

            function scrollFunction() {
                if ((document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) && screen.width > 992) {
                    mybutton.style.display = "block";
                } else {
                    mybutton.style.display = "none";
                }
            }
                // When the user clicks on the button, scroll to the top of the document
                function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>
    </body>
</html>