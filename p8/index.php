<?php



$file = fopen("sample.txt", "w") or die("Unable to open file!");

$txt = "Government Polytechnic, Nashik was established in the year 1980. 
The Government of Maharashtra allotted 30 Acres of land on which stands 
the majestic & sprawling Government Polytechnic campus. 
The Institute is located at Samangaon Road at 1.5 Km. 
from Nashik-Pune Highway, about 3 Km. 
from Nashik-Road Railway Station & 12 Km. from Central Bus Stand, Nashik.
";

fwrite($file, $txt);


fclose($file);


$file2 = fopen("sample.txt", "r") or die("Unable to open file!");

while(!feof($file2)) {
  echo fgets($file2) . "<br>";
}

fclose($file2);

?>