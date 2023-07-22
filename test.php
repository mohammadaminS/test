<?php
$date = $_POST['Date'];
$chekD = 0;
$chekM = 0;



$y = substr($date,2,3);
$m = substr($date,5,7);
$d = substr($date,8,9);
$m = substr($m,0,2);


$d = substr($d,1,2);
$m = substr($m,1,2);
$y = substr($y,0,2);

// echo $y.'*'.$m.'*'.$d;

if ($d <= 21){
$chekD = 1;
$d = 31 + ($d - 21);
echo $d.'*';
}

if ($chekD == 1){
    $m-=1;
}

if ($m <= 2){
    $chekM = 1;
    $m = 12 + ($m - 2);
}
if ($chekM == 1){
    $y -= 1;
}
$y -= 21;

echo $y.'**'.$m.'**'.$d;


?>
