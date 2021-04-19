<?php



$presentTime = new DateTime("10/21/2015 04:06");
$destinationTime = new DateTime("10/21/2015 04:29");

echo 'Present time : ' . $presentTime->format('m-d-Y H:i:s'). '<br>';
echo 'Destination time : ' . $destinationTime->format('m-d-Y  H:i:s'). '<br>';

$diff = $presentTime->diff($destinationTime);
print $diff->format("%m month/%d day/%Y year %H hour:%I min");