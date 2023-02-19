<?php
print"<h3> Visitors Count</h3>";
$name="counter.txt";
$file=fopen($name,"r");
$hits=fname($file,"%d");
fclose($file);

$hits[0]++;
$file=fopen($name,"w");
fprintf($file,"%d",$hits[0];
fclose($file);

print"Total Visitors Count:"$hits[0];
?>

