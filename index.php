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
                // Functions
              
                function doggo($breed, $age) {
                    echo "The dog is a " . $breed . " that is " . $age . " years old!";
                }
               
               doggo("husky", "12");
                ?>  
        </h1>
       
    </center>
    
</body>