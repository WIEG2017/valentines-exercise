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
        
            <p>Copyright WIEG17 &copy; </p>
            <p>Contact information: Medieinstitutet</p>
            <img src="images/pink.png" alt="pinkheart" style="width: 3%; height: 3%;">
            <p>valentines@example.com</p>
            <a href="./tos.php">Terms of Service</a>
        

        </footer>
    </body>
</html>