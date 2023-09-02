<?php
   
   function student() {
    static $marks = 96;
    $marks++;
    echo "static variables is:".$marks;
    echo "</br>";

   }
   student();
   student();
?>