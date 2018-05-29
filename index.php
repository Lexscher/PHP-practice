<!DOCTYPE html>
<html>
    <head>
        <title>My php website!</title>
    </head>
</html>

<body>
    
    <center>
        
        <h1>
               <?php 
                 // comparison operators
              /*
                 == 
                  >
                  <
                  >=
                  <=
                  !=
              */
               // Escape characters!
               $my_var = "And then she said to me 
               \"You're ugly!\"
               ";
             echo $my_var;
             
             $a  = 1;
             $b = 9;
             $c = 4;
             
             if ($a > $c ) {
                 echo $a . " is greater than " . $c;
             } else {
                 echo $c . " is greater than " . $a;
             }
              
                ?>  
        </h1>
       
    </center>
    
</body>