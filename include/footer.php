



        </div> <!-- Avslutar div id content -->

        <div id = "footer">
        <h3>VallyBally Company, grundat 2018.</h3><br/>
        <h1>Vi älskar Kärlek, speciellt Alla hjärtans Dag ❤️</h1>
        <div id="favoriter">
            <?php
            echo "<h2>Favoriter: </h2><br/>";
         

        
         
            //Kollar att favoriter har blivit sparade
            if(isset($_POST['submit'])){
                //sparar det i session
                if(empty($_SESSION['checkFavorites'])) {
                    $_SESSION['checkFavorites'] = $_POST['checkFavorites'];
                }
                else{
                    $_SESSION['checkFavorites'] = array_merge($_POST['checkFavorites'], $_SESSION['checkFavorites']);
                }
                //Förhindrar dubbla länkar.
                $_SESSION['checkFavorites'] = array_unique($_SESSION['checkFavorites']);
            }
             //Skriver ut om post inte är tom.
            if(!empty($_SESSION['checkFavorites'])) { 
                
                // Loopar igenom och kollar vilka som har blivit checkade.
                foreach($_SESSION['checkFavorites'] as $selected) {
                    echo "<p>". $selected ."</p>";
                }
            }
            
            ?>
            </div>
        </div>
    </body>
</html>