
<?php
$datetime1 = new DateTime('2013-01-01');
$datetime2 = new DateTime('2015-01-01');
$interval = $datetime1->diff($datetime2);

//print_r($interval);
//echo $interval->format('%R%a days');

echo $interval->days;
?>
