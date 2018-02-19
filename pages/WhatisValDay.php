<?php
    session_start();    
    include '../include/header.php';
    include '../include/functions.php';
?>

<?php

if(isset($_POST['pension'])) {
    header('Location:WhatisValDay2.php');
    die('ooops');
};

echo "<form class='ReadBtn' action='WhatisValDay2.php' METHOD'POST'>";

echo "<input type='submit' name='text' value='Pensionärsläge'><br>";

echo "</form>";

echo "<h1>  Alla Hjärtans Dag 💘</h1>";

echo "<div>Remember the date: 14 Februari. Love is in the air!</div>";


echo "<p>
Alla hjärtans dag, eller Valentine’s Day som den heter på engelska, började firas i Sverige mycket sent. 
Förebilden kom från USA under 1900-talet och firandet har växt de senaste decennierna. 
I anglosaxisk tradition har dagen större betydelse än här. Den går tillbaka på medeltida vårfester, där flickor och pojkar på lek parades samman inför våren.
</p><br/>";

echo "<img src='/img/valday.jpg'></img><br/>";

echo "<br/><p>Alla hjärtans dag är en kalendarisk högtid som är ny i Sverige och Norden, trots att den har medeltida ursprung. Dagens namn är Valentin efter ett romerskt helgon, om vilket inte mycket är känt. Anledningen till att han är ihågkommen i vår tid är att 14 februari på medeltiden ansågs vara den dag då fåglarna bildade par. I England och Frankrike utsågs byns pojkar och flickor till låtsaspar för ett år på Valentindagen.

Det har lett till att Valentine’s Day har varit en romantikens dag i England ända sedan medeltiden. De första mångfaldigade Valentinkorten dök upp i England på 1400-talet, och under 1700-talet såldes kommersiellt framställda kort. Man såg också denna dag som vårens första dag.

I vår tid har det uppstått en romantisk legend utan historisk bakgrund som har till syfte att förklara valentinbrevens ursprung. Den berättar att den fängslade Valentin lärde känna fångvaktarens dotter, och innan han dog skrev han ett avskedsbrev och undertecknade med ”din Valentin”. Det skulle vara det första valentinbrevet.

Sanningshalten i sägner och legender är som regel tveksam, men berättelsen har i alla fall fått förklara valentinkortens ursprung. Men högtiden har även koppling till en romersk vårhögtid, som hölls i mitten av februari.</p></br>";

echo "<p>
Alla hjärtans dags väg till Sverige gick via handeln, som såg marknadsföringsmöjligheter i dagen. Första skyltningen i Sverige är belagd år 1956 och därefter har försäljningen av speciellt godis och blommor ökat. Att dagen har en viss betydelse vittnar också försäljningen av rosor om. Ett år såldes ett par miljoner rosor, som är den mest populära blomman. Denna dag säljs även tulpaner och andra blommor.

 

Den svenska skolan har alltmer fångat upp alla hjärtans dag. I en del svenska skolor firar skolbarnen dagen med att ge blommor till sina kamrater. Blommornas färg har olika betydelse: en röd blomma betyder oftast kärlek, en vit kanske vänskap och en rosa eller gul kan betyda ”span”.
</p>";


?>


<?php
    include '../include/footer.php';
?>