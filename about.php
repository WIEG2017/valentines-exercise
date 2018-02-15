<?php
    $page_title = "About Us";
    include "incl/header.php";
?>
<h1>Om oss</h1>
<wrapperText>
<form method="GET"><input class='buttonStorText' type="submit" name="storText" value="Tryck för större text"/></form>
</wrapperText>
<?php
if(isset($_GET['storText'])) {
    echo "<wrapperText><p class='textStor'>
    Spicy jalapeno bacon ipsum dolor amet brisket pork belly sirloin kevin, jowl fatback kielbasa ball tip. T-bone shank ribeye tenderloin ball tip leberkas porchetta biltong boudin jowl strip steak chicken filet mignon pork belly brisket. Tail porchetta meatball sausage capicola, shoulder beef ribs tenderloin kielbasa swine leberkas. Pancetta prosciutto corned beef, rump turkey flank ham hock. Rump shank ham, pork pastrami pig salami strip steak flank boudin pork belly alcatra. Drumstick ribeye buffalo doner, burgdoggen swine pork prosciutto brisket.
    Doner cupim burgdoggen pork belly jerky porchetta. Andouille boudin sausage cupim beef ribs spare ribs leberkas ribeye filet mignon. Jerky pig chuck pork short ribs andouille rump picanha tail turducken burgdoggen bacon short loin. Drumstick turducken shoulder, spare ribs pancetta tongue bacon ribeye t-bone hamburger pig doner capicola sausage. Tenderloin tail brisket ball tip landjaeger. Pastrami ground round rump pork belly beef ribs beef cow biltong hamburger andouille doner salami bresaola shank jowl. Jerky sausage picanha pastrami.
    Beef t-bone hamburger prosciutto ham meatloaf cupim cow shankle. Pork loin doner chuck spare ribs filet mignon.
    </p>
    
    <p class='textStor'>
    Tri-tip short ribs t-bone biltong brisket swine alcatra. Short ribs corned beef chicken, turducken jerky swine fatback jowl cow sausage kielbasa tongue. Short loin porchetta salami, tri-tip prosciutto pastrami pig rump bacon sausage pork chop buffalo. Ground round bresaola alcatra, pork belly doner pig sirloin kevin rump boudin strip steak leberkas tongue.
    Pork salami ribeye, meatball frankfurter shankle pork chop jowl rump pork loin tail hamburger short ribs biltong brisket. Picanha pastrami chicken turducken jowl short loin short ribs shoulder t-bone. Turducken cupim drumstick jowl kielbasa, capicola bacon hamburger cow kevin meatloaf biltong. Picanha alcatra flank pork kevin shank andouille sirloin turkey tail ribeye venison ham hock pastrami pork chop. Capicola landjaeger swine sirloin meatloaf andouille ham hock cupim buffalo picanha alcatra pig kielbasa. Leberkas pork andouille cupim filet mignon pancetta kielbasa buffalo short ribs turducken. Tri-tip shankle shank meatloaf cupim, bacon short loin.
    Meatball landjaeger shankle, pastrami turkey prosciutto ham hock corned beef brisket. Shank bresaola salami pork chop rump tongue. Cupim ball tip beef filet mignon pork chop tri-tip. Alcatra pork chop meatloaf tri-tip. Kevin ham hock t-bone chuck short ribs brisket ham meatloaf, doner fatback ribeye shankle chicken capicola. Pork frankfurter meatball ground round, filet mignon rump short loin alcatra meatloaf.
    </p></wrapperText>";
}
else {
    echo "<wrapperText><p class='textNormal'>
    Spicy jalapeno bacon ipsum dolor amet brisket pork belly sirloin kevin, jowl fatback kielbasa ball tip. T-bone shank ribeye tenderloin ball tip leberkas porchetta biltong boudin jowl strip steak chicken filet mignon pork belly brisket. Tail porchetta meatball sausage capicola, shoulder beef ribs tenderloin kielbasa swine leberkas. Pancetta prosciutto corned beef, rump turkey flank ham hock. Rump shank ham, pork pastrami pig salami strip steak flank boudin pork belly alcatra. Drumstick ribeye buffalo doner, burgdoggen swine pork prosciutto brisket.
    Doner cupim burgdoggen pork belly jerky porchetta. Andouille boudin sausage cupim beef ribs spare ribs leberkas ribeye filet mignon. Jerky pig chuck pork short ribs andouille rump picanha tail turducken burgdoggen bacon short loin. Drumstick turducken shoulder, spare ribs pancetta tongue bacon ribeye t-bone hamburger pig doner capicola sausage. Tenderloin tail brisket ball tip landjaeger. Pastrami ground round rump pork belly beef ribs beef cow biltong hamburger andouille doner salami bresaola shank jowl. Jerky sausage picanha pastrami.
    Beef t-bone hamburger prosciutto ham meatloaf cupim cow shankle. Pork loin doner chuck spare ribs filet mignon.
    </p>
    
    <p class='textNormal'>
    Tri-tip short ribs t-bone biltong brisket swine alcatra. Short ribs corned beef chicken, turducken jerky swine fatback jowl cow sausage kielbasa tongue. Short loin porchetta salami, tri-tip prosciutto pastrami pig rump bacon sausage pork chop buffalo. Ground round bresaola alcatra, pork belly doner pig sirloin kevin rump boudin strip steak leberkas tongue.
    Pork salami ribeye, meatball frankfurter shankle pork chop jowl rump pork loin tail hamburger short ribs biltong brisket. Picanha pastrami chicken turducken jowl short loin short ribs shoulder t-bone. Turducken cupim drumstick jowl kielbasa, capicola bacon hamburger cow kevin meatloaf biltong. Picanha alcatra flank pork kevin shank andouille sirloin turkey tail ribeye venison ham hock pastrami pork chop. Capicola landjaeger swine sirloin meatloaf andouille ham hock cupim buffalo picanha alcatra pig kielbasa. Leberkas pork andouille cupim filet mignon pancetta kielbasa buffalo short ribs turducken. Tri-tip shankle shank meatloaf cupim, bacon short loin.
    Meatball landjaeger shankle, pastrami turkey prosciutto ham hock corned beef brisket. Shank bresaola salami pork chop rump tongue. Cupim ball tip beef filet mignon pork chop tri-tip. Alcatra pork chop meatloaf tri-tip. Kevin ham hock t-bone chuck short ribs brisket ham meatloaf, doner fatback ribeye shankle chicken capicola. Pork frankfurter meatball ground round, filet mignon rump short loin alcatra meatloaf.
    </p></wrapperText>";
}
?>




<?php
    include "incl/footer.php";
?>