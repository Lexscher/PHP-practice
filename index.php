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
                // While Loops!
                
                $a = 1;
                
                while( $a < 100 ){
                    if ($a % 3 == 0 and $a % 5== 0 ) {
                        echo "FizzBuzz";
                   } elseif ($a % 3 == 0) {
                        echo "Fizz";
                    } elseif ($a % 5 == 0) {
                        echo "Buzz";
                    } else {
                        echo $a;
                    }
                    echo "<br />";
                    $a++;
                }
               
               
                ?>  
        </h1>
       
    </center>
    
</body>