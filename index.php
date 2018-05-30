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
               
              $colors = array("Blue", "Green", "Red", "Silver");
              $arr_length = count($colors);
              
              for($x = 0; $x < $arr_length; $x++) {
                  if ($colors[$x] == "Silver" ) {
                      echo "Argent";
                      echo "<br />";
                  } else {
                  echo $colors[$x];
                  echo "<br />";
                  }
              }
              
               
                ?>  
        </h1>
       
    </center>
    
</body>