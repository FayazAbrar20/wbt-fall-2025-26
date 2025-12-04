<?php 
$length = 20;
$width = 10;
$area = $length*$width;
echo "length : $length <br>";
echo "width : $width <br>";
echo "area : $area <br>";

$parameter = 2*($length+$width);
echo "parameter : $parameter<br><br>";

$amount = 20000;
echo "amount : $amount<br>";
$vat = ($amount *15)/100;
echo  "vat : $vat<br><br>";
$number = 7;
if($number %2 ==0){
    echo "even<br>";
}
else{
    echo "Odd<br>";
}
$number1 = 5;
$number2 = 7;
$number3 = 10;

if($number1>$number2 &&$number1>$number3){
    echo "number 1 is large<br>";
}
elseif($number2>$number1 &&$number2>$number3){
    echo "number 2 is large<br>";
}
elseif($number3>$number1 &&$number3>$number2){
    echo "number 3 is large<br>";
}
else{
    echo "error<br>";
}
for($i = 10;$i<=100;$i++){
    if($i %2 !=0){
    echo "$i is odd<br>";
}

}

$fruits =["apple","banana","orange"];
$search = "banana";
for($i = 0;$i<=2;$i++){
    if($fruits[$i]== $search){
    echo "we found  $fruits[$i] at $i <br>";
}
}


for($i = 1;$i<=3;$i++){
    for($j = 1;$j<=$i;$j++){
    echo "* "." " ;
}
echo "<br>";}
for($i = 1;$i<=3;$i++){
    for($j = 3;$j>=$i;$j--){
    echo "$j "." " ;
}
echo "<br>";}
?>