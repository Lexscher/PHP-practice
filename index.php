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
               // line breaks in my code
                function separate() {
                   echo  "<br /><br /> ___________________________________ <br /><br />";
                };
                // String Manipulattion
                $bs = "Alexander is the best php programmer on this planet!";
                $truth = "<i><u>not</u> the</i>";
                echo str_replace(ucwords("the"), strtoupper($truth), ucwords($bs));
                separate();
                echo 
                str_shuffle($bs);
                separate();
                
                ?>  
        </h1>
       
    </center>
    
</body>