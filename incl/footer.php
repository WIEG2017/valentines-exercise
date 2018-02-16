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
            <p>valentines@example.com</p>
            <a href="./tos.php">Terms of Service</a>

        </footer>
    </body>
</html>