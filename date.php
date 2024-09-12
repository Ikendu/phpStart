<?php
$time = strtotime('+5 months');
$date = date('Y.m.d', $time);
echo $date;

$startday = strtotime('Friday');
$endday = strtotime('+10 Friday', $startday);

while($startday < $endday){
    echo date('Y.m.d.h.i.s', $startday) . '<br>';
    $startday = strtotime('+1 week', $startday);
}

echo 'Including files <br>';

include 'validForm.php';
?>