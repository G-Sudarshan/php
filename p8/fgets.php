<?php

$f2 = fopen("sample.txt", "r") or die("Unable to open file!");

while(!feof($f2)) {
  echo fgets($f2) . "<br>";
}
fclose($f2);
?>