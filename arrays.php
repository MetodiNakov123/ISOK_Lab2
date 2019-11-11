<?php

// echo "========== Vezba 1.1 ========================<br/><br/>";

$arr1 = array(2, 5, 6, 10, 41, 24, 32, 9, 16, 19);
$arr2 = array("Metodi" => "Metodi", "Nakov" => "Nakov", "Kochani" => "Kochani");
$arr3 = array(array(1,2,3,4), array(5,6,7,8,9));


echo "========== Vezba 1.2 ========================<br/><br/>";

foreach($arr1 as $key => $val){
    print "$val ";
}


echo "<br/><br/>========== Vezba 1.3 ========================<br/><br/>";

$newArray = array();
foreach ($arr1 as $val){
    if ($val > 20){
        array_push($newArray, $val);
    }
}

foreach ($newArray as $val){
    print "$val ";
}



echo "<br/><br/>========== Vezba 1.4 ========================<br/><br/>";

$recenica = "PHP is a widely-used general-purpose scripting language that is especially suited for Web development";

$niza = explode(" ", $recenica);
$aPole = array();

foreach ($niza as $val){
    $aPole[$val] = strlen($val);
}

foreach ($aPole as $key => $value){
    print "$key => $value <br/>";
}