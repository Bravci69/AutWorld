<!DOCTYPE html>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" href="pictures/AutWorld_Logo.webp" sizes="16x16">
<html>
    <head>
    ddd
    </head>
    <body>
        
    
    </body>
<h1>
<?php
// Use microtime() function to measure
// starting time

echo("casovac zacal"); 
 echo("</h1>");


$time_start = microtime(true);
  
// Code of program
$num = 0;
  
for( $i = 0; $i < 100000000; $i += 1 ) {
    $num += 5;
}
  
// Use microtime() function to measure
// ending time
$time_end = microtime(true);
  
// Time difference
$time = $time_end - $time_start;
  
echo "The speed of code = ".$time;
  
$time_start=mktime(0,45,0);
$time_end=mktime(0,0,0);
for ($i=0;$i<5;$i++){
if($i==1){
    echo " minutka";  
}
if($i==4){
    echo " ende";  
}
time_nanosleep(60,0);
}

$current_time= time();
$rozdiel=$time_start-$current_time;
echo $rozdiel;

?>

</html>
