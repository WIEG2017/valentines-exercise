    
            <!-- Här ska vi ha ren HTML kod! -->
            <footer>    
          

            <?php
                foreach($_SESSION['fav'] as $fav)
                {
                    $fav->drawMe();
                }
            ?>

                <p>Copyright WIEG17</p>
                <p>By WIEG17</p>
                <p>Contact information: Medieinstitutet</p>
                <img src="images/logo.png" alt="ValentinesSchool" style="width: 5%; height: 5%;">
                <p>valentines@example.com</p>

        
             </footer>

    </body>
</html>