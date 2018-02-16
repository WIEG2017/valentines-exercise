        </div>
        <footer>
            <?php
                if(isset($_SESSION['fav']))
                {
                    foreach($_SESSION['fav'] as $fav)
                    {
                        unserialize($fav)->drawMe();
                    }
                }
            ?>
        
            <p>Copyright WIEG17</p>
            <p>Contact information: Medieinstitutet</p>
            <img src="images/logo.png" alt="ValentinesSchool" style="width: 5%; height: 5%;">
            <p>valentines@example.com</p>
            <a href="./tos.php">Terms of Service</a>

        </footer>
    </body>
</html>