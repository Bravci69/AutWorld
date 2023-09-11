<h1>
<?php
// Use microtime() function to measure
// starting time
echo("casovac zacal");
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
</h1>
