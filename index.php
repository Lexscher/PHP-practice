<?php
include('variables.php'); 
include('functions.php'); 

?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $site_title ?> | About Us</title>
    </head>
</html>

<body>
    
    <center>
       <h1> 
           <?php 
                
               echo $site_title;
               separate();
                
           ?>
       </h1>
       <h3><?php 
       echo $sub_title;
       breakYoLegs();
       ?></h3>
       
       <p>
           The best starter pokemon to choose is Charmander, because charmander
           evolves into <?php echo $best_pokemon; ?>! Don't you understand?! <br />
           You'll never lose!
       </p>
        
            
            
                
                

 
    </center>
    
</body>