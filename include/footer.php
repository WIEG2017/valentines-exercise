



        </div> <!-- Avslutar div id content -->

        <div id = "footer">
        <div id="favoriter">
            <?php
            echo "<h2>Favoriter: </h2><br/>";
         

        
         
            //Kollar att favoriter har blivit sparade
            if(isset($_POST['submit'])){
                //Skriver ut om post inte är tom.
                if(!empty($_POST['checkFavorites'])) {
                    //sparar det i session
                    $_SESSION['checkFavorites'] = $_POST['checkFavorites'];
                    
                    // Loopar igenom och kollar vilka som har blivit checkade.
                    foreach($_SESSION['checkFavorites'] as $_SESSION['selected']) {
                        echo "<p>". $_SESSION['selected'] ."</p>";
                    }
                }
            }
            
            ?>
            </div>
        </div>
    </body>
</html>