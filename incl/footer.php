        <footer>
            <?php
                if(isset($_SESSION['fav']))
                {
                    foreach($_SESSION['fav'] as $fav)
                    {
                        $fav->drawMe();
                    }
                }
            ?>
            <p>Copyright WIEG17</p>
        </footer>
    </body>
</html>