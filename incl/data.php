<?php
    $customers  = array(
        1 => array(
            'email'    => 'thommy@valentine.se',
            'name'     => 'Thomas van der Ven',
            'password' => 'thommy'            
        ),
        2 => array(
            'email'    => 'jenny@valentine.se',
            'name'     => 'Jenny Jäderborn',
            'password' => 'jenny'        
        ),
        3 => array(
            'email'    => 'amanda@valentine.se',
            'name'     => 'Amanda Englund',
            'password' => 'amanda'   
        ),
        4 => array(
            'email'    => 'faroch@valentine.se',
            'name'     => 'Faroch Mehri',
            'password' => 'faroch'   
        )
    );
    
    $categories = array(
        1 => 'Nallar',
        2 => 'Blommor'
    );
    
    $products   = array(
        1 => array(
            'catid'   => 1,
            'name'    => 'Oliver',
            'image'   => './images/nalle1.jpg',
            'dscrptn' => 'Jag är en lurvig och kramgo kompis på ca 10 cm och är Nallebudets populäraste.',
            'price'   => 299
        ),
        2 => array(
            'catid'   => 1,
            'name'    => 'Beige Kanin',
            'image'   => './images/nalle2.jpg',
            'dscrptn' => 'Jag är den superpopulära fluffiga kaninen Bashful Bunny, och är sådär extra mjuk och härlig.',
            'price'   => 249
        ),
        3 => array(
            'catid'   => 1,
            'name'    => 'VEM-Katten',
            'image'   => './images/nalle3.jpg',
            'dscrptn' => 'Jag är en färgglad katt från de populära Vem?-böckerna av Stina Wirsén, jag är designad i samarbete med Anna Hörling.',
            'price'   => 449
        ),
        4 => array(
            'catid'   => 1,
            'name'    => 'Nalle med rött hjärta',
            'image'   => './images/nalle4.jpg',
            'dscrptn' => 'Lite större nalle ( ca 16 cm) som håller i ett stort rött hjärta',
            'price'   => 399
        ),
        5 => array(
            'catid'   => 2,
            'name'    => 'Romantikboost',
            'image'   => './images/blomma1.jpg',
            'dscrptn' => 'Superromantisk bukett fylld med röda, rosa och cremefärgade rosor och säsongens gröna blad.',
            'price'   => 349
        ),
        6 => array(
            'catid'   => 2,
            'name'    => 'Kärleksfull',
            'image'   => './images/blomma2.jpg',
            'dscrptn' => 'Röda rosor med ett fång underbara rosa vaxblommor. Vas ingår ej men kan köpas som en tillvalsprodukt.',
            'price'   => 299
        ),
        7 => array(
            'catid'   => 2,
            'name'    => 'Rosor och gerbera',
            'image'   => './images/blomma3.jpg',
            'dscrptn' => 'En vacker bukett i rött och rosa. Tips! Du kan köpa till smarriga chokladpraliner i nästa steg.',
            'price'   => 199
        ),
        8 => array(
            'catid'   => 2,
            'name'    => 'Passion',
            'image'   => './images/blomma4.jpg',
            'dscrptn' => 'Ett fantastiskt exempel på en traditionell, röd rosbukett med brudslöja, frodig grönska och dekorativa hjärtan.',
            'price'   => 249
        ),
    );
?>