<?php
   $dp = array("cm", "if", "mech", "civil");
   
  
   $pdp = preg_grep("/c(\w+)/", $dp);
   
   print "Found department is " . $pdp[0]."<br/>";
   //print "Found department is " . $pdp[1]."<br/>";
   print "Found department is " . $pdp[2]."<br/>";
   print "Found department is " . $pdp[3];
?>