<?php

$a = preg_match_all("/[[:alnum:]]{1,}[@][[:alnum:]]{1,}[\.][a-z]{1,}/", "gpnashik.ac.in is a website while 11udarshang@gmail.com , admin@sample.com and hi@a.in are emails");

//echo $a;
print($a);
?>