<?php 

    $site_title = "Pokèmon Unversity";
    $footer_copyright = "pokemonuniversity.edu";
    $sub_title = "Producing Pokèmon Masters since 1996";
    $best_pokemon = "Charzard";
    
    $school_description = "There are great things at work here at Pokèmon Unversity.<br /> <br /> We have the best instructors, all of whome are skinny legends. You'll love the <i>How to run your opponents into the ground</i> class by Hoenn region's champion, Xela, as well as the <i>make me turn up with thes berries</i> class by Johto region's Rock Gym Leader, Brock!! Here at Pokèmon Unversity, we teach you how to become your best self. Our safari-Alpha has a plethora of amazing pokemon. This will be where you catch your first pokemon! Join us for the unique experience that you've never even heard of before! Hogwarts? Who's that? Sorry! Never heard of her. 💁‍♀️";
    

    $cool_peeps = array("John", "Jacob", "Jingleheimer", "Schmidt", "Smitty Werbenjagermanjensen", "Dora and Boots", "David Dobrik", "Liza Koshy", "Jason Nash", "Trisha Paytas", "Professor Oak", "Nurse Jenny");

    function rando($arr) {
        // get the length of whatever array you put in
        $arr_length = count($arr);
        // randomly pick an index from the array
        $r = rand(0, $arr_length - 1);
        // echo that name
        echo $arr[$r];
    };










?>