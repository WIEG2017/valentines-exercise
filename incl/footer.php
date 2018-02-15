        <footer>
            <?php
                foreach($_SESSION['fav'] as $fav)
                {
                    $fav->drawMe();
                }
            ?>
            <p>Copyright WIEG17</p>
        </footer>
    </body>
</html>