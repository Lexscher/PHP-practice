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
               
               $colors = array("Blue", "Red", "green", "Purple");
               $colors['key'] = "Blue";
               $colors['key1'] = "Red";
               $colors['key2'] = "green";
               $colors['key3'] = "Purple";
               
               // to echo out "green"
              //  echo $colors['key2']
               
               $ages['Nandita'] = "25";
               $ages['Tara'] = "24";
               $ages['Jordan'] = "23";
               $ages['Marisa'] = "22";
               
               // To get Tara's age
               echo $ages['Tara'];
               
               // conditionals!
               
               if ( $ages['Tara'] > $ages['Jordan']) :
                   echo $ages['Tara'] . " is older than " . $ages['Jordan'];
                else :
                    echo $ages['Jordan'] . " is older than " . $ages['Tara'];
               endif;
                ?>  
        </h1>
       
    </center>
    
</body>