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
                // For Loops!
               
               for ($a = 1; $a <= 100; $a++){
                   if ($a % 3 == 0 and $a % 7 == 0) {
                       echo "FizzBuzz";
                   } elseif ($a % 3 == 0) {
                      echo "Fizz";
                   } elseif ($a % 7 == 0) {
                       echo "Buzz";
                   } else {
                       echo $a;
                   }
                   echo "<br />";
               }
               
                ?>  
        </h1>
       
    </center>
    
</body>