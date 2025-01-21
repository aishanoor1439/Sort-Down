<?php
$numbers = array(46, 87, 23, 99, 24, 65);
rsort($numbers);
foreach($numbers as $number){
    echo $number."<br>";
}