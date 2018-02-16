
<?php include 'include/header.php';?>

<div class="content">

    <div class="zoom">
    <h2 class="rubrik">Fakta om rosor</h2>
    <form method='GET' action="<?php $_SERVER["PHP_SELF"];?>">
    <input type="submit" value="Zooma in" name="zoomtext"></input>
    <input type="submit" value="Zooma ut" name="zoomtextut"></input>

</form>

    <?php 
    
    ?>
        <?php 
        if($_GET['zoomtext']){
            echo "<div class='text' style='font-size:16px;'><p>" . 
            'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras blandit nisi sit amet consequat varius. Pellentesque vitae felis id sapien vestibulum laoreet. Curabitur tempor diam et nunc maximus pharetra. Phasellus eget efficitur mi. Vestibulum scelerisque scelerisque arcu vel fringilla. Curabitur aliquam turpis eget ligula pellentesque elementum sed at massa. Morbi vulputate, erat at bibendum consectetur, augue nibh vulputate erat, vel facilisis lectus mauris quis tortor. Fusce id ultricies dolor, lobortis molestie mi. Quisque egestas non augue in dapibus. Nam eu posuere orci. Proin consequat vel felis sed aliquet. Duis vel libero lectus. Integer sit amet libero faucibus, rhoncus purus quis, ornare elit. Donec ut sollicitudin lorem. <br><br>

            Cras volutpat maximus sapien, quis aliquam risus feugiat quis. Integer elementum tempus lacus, quis tristique orci accumsan sed. Suspendisse at massa in leo scelerisque luctus et eget diam. Etiam ut lectus nec tellus lobortis rutrum sit amet eu sapien. Aenean sit amet mauris est. Nunc eu mi sed est mollis ullamcorper vel sed purus. Duis quis rutrum nulla. Proin porttitor, lorem in molestie vulputate, enim sem pellentesque leo, in luctus sapien libero et nisi. Phasellus sed nibh vitae lacus eleifend elementum. Quisque dapibus justo cursus neque luctus, nec tempor lacus commodo. Integer dictum nulla tellus, ac hendrerit erat viverra quis. Aenean lacinia, enim a pharetra rutrum, erat augue ultricies tortor, at mattis ex velit sed nulla. Vestibulum purus libero, eleifend et porttitor non, vulputate non sem. Phasellus dui turpis, ultricies a feugiat a, ornare non urna.<br><br>
            
            Suspendisse nunc lectus, luctus quis faucibus et, dignissim eu lorem. Nunc euismod vulputate velit, blandit dignissim orci hendrerit ut. Donec mollis dui eget tristique aliquet. Nullam ultricies tincidunt purus, non ultrices mi egestas quis. Aliquam laoreet cursus nisl, ut egestas sapien malesuada at. Cras ultricies, leo in elementum pretium, dui orci pulvinar quam, sed luctus odio nulla nec quam. Maecenas ac mauris ut elit accumsan tempus et eu ligula. Nam porta iaculis mi non auctor. Nam a tincidunt leo. Praesent suscipit gravida tristique. Quisque lacinia leo finibus ligula dapibus, vel elementum ex tempor. Donec rutrum dapibus felis, euismod ornare magna dictum eget. Fusce vulputate, mauris blandit molestie tincidunt, purus urna posuere est, ut lacinia massa mi vestibulum dui. Integer sollicitudin eu arcu id ultrices. Nullam scelerisque magna at tristique lacinia. Sed facilisis dui a leo efficitur laoreet.
                ' . "</p></div></div>";
                
      
        }else{
            echo "<div class='text' style='font-size:14px;'><p>" . 
            'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras blandit nisi sit amet consequat varius. Pellentesque vitae felis id sapien vestibulum laoreet. Curabitur tempor diam et nunc maximus pharetra. Phasellus eget efficitur mi. Vestibulum scelerisque scelerisque arcu vel fringilla. Curabitur aliquam turpis eget ligula pellentesque elementum sed at massa. Morbi vulputate, erat at bibendum consectetur, augue nibh vulputate erat, vel facilisis lectus mauris quis tortor. Fusce id ultricies dolor, lobortis molestie mi. Quisque egestas non augue in dapibus. Nam eu posuere orci. Proin consequat vel felis sed aliquet. Duis vel libero lectus. Integer sit amet libero faucibus, rhoncus purus quis, ornare elit. Donec ut sollicitudin lorem. <br><br>

            Cras volutpat maximus sapien, quis aliquam risus feugiat quis. Integer elementum tempus lacus, quis tristique orci accumsan sed. Suspendisse at massa in leo scelerisque luctus et eget diam. Etiam ut lectus nec tellus lobortis rutrum sit amet eu sapien. Aenean sit amet mauris est. Nunc eu mi sed est mollis ullamcorper vel sed purus. Duis quis rutrum nulla. Proin porttitor, lorem in molestie vulputate, enim sem pellentesque leo, in luctus sapien libero et nisi. Phasellus sed nibh vitae lacus eleifend elementum. Quisque dapibus justo cursus neque luctus, nec tempor lacus commodo. Integer dictum nulla tellus, ac hendrerit erat viverra quis. Aenean lacinia, enim a pharetra rutrum, erat augue ultricies tortor, at mattis ex velit sed nulla. Vestibulum purus libero, eleifend et porttitor non, vulputate non sem. Phasellus dui turpis, ultricies a feugiat a, ornare non urna.<br><br>
            
            Suspendisse nunc lectus, luctus quis faucibus et, dignissim eu lorem. Nunc euismod vulputate velit, blandit dignissim orci hendrerit ut. Donec mollis dui eget tristique aliquet. Nullam ultricies tincidunt purus, non ultrices mi egestas quis. Aliquam laoreet cursus nisl, ut egestas sapien malesuada at. Cras ultricies, leo in elementum pretium, dui orci pulvinar quam, sed luctus odio nulla nec quam. Maecenas ac mauris ut elit accumsan tempus et eu ligula. Nam porta iaculis mi non auctor. Nam a tincidunt leo. Praesent suscipit gravida tristique. Quisque lacinia leo finibus ligula dapibus, vel elementum ex tempor. Donec rutrum dapibus felis, euismod ornare magna dictum eget. Fusce vulputate, mauris blandit molestie tincidunt, purus urna posuere est, ut lacinia massa mi vestibulum dui. Integer sollicitudin eu arcu id ultrices. Nullam scelerisque magna at tristique lacinia. Sed facilisis dui a leo efficitur laoreet.
                ' . "</p></div></div>";
        }

        ?>       
</div>

