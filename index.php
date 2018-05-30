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
                // line breaks in my code
                function separate() {
                   echo  "<br /><br /> ___________________________________ <br /><br />";
                };
                
                // get that dog
              
                function doggo($breed, $age) {
                    echo "The dog is a " . $breed . " that is " . $age . " years old! <br />";
                };
                
               
                doggo("husky", "12");
                 doggo("chocolate lab", "4");
               
                separate();
               
                // write function
                 function writeMsg() {
                   echo "Hello World!";
                 };
               
                writeMsg();
              
                separate();
              
                // random numbers
                $random = rand(0, 3);
              
                $names = array("John", "Jacob", "Jingleheimer", "Schmidt");
                 echo " Smitty-" . $names[$random] . "-Werbenjagermanjensen!";
                 echo "<br />";
                 // Get number 1 every time
                function smittyWerbenjagermanjensen($num) {
                    $num = 1;
                    echo "He was number " . ($num) . "!!";
                };
                
                smittyWerbenjagermanjensen($random);
                separate();
                // PHP's date function
                
                // Alex's Eastern Standard Time Calendar!
                echo date("l dS \of F, Y");
                echo "<br />";
                // echo date("e"); This told me that we're in UTC time.
                    // I'm on the east coast, so We'll have to do something about that.
                echo "<br />";
                
                // turn into EST 
                function eastCostenization($str) {
                  
                   $str = date($str) + 0;
                    $str = $str - 4;
                    // if we're in military time.
                    if ($str > 12) {
                         
                        $str = $str - 8;
                    
                    }
                   return $str;
                };
                
                echo "It is " . date(eastCostenization("H") . ":i:s");
                
                
                ?>  
        </h1>
       
    </center>
    
</body>