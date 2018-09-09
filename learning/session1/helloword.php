<?php
/* comment php*/
// comment php
echo "Hello word";
$userName ="php04";

function myFunction(){
    echo"<br>";
    $a= 5;
    return $a;
}
echo myFunction();
function mySum($a =4, $b =585)
{
     // if ($tatol % 2 == 0){
    //     echo "<br>Chẵn";
    // }
    // else if ($tatol %3 == 0){
    //     echo "<br>Tổng là số lẻ và chia hết cho 3";
    // }
    // else {
    //     echo "<br>Tổng là số lẻ và không chia hết cho 3";
    // }
    $tatol = $a + $b ;
    $caculator = ($tatol %100 )%10;  
    if($tatol < 1000) {
        echo "<br>Hàng đơn vị là $caculator";
            if ($caculator %3 == 0){
            echo "<br>$caculator số lẻ  chia hết cho 3";
            }
            else {
            echo "<br> $caculator số lẻ  không chia hết cho 3";
            }   
    } 
    else {
    echo "";
    }
}
echo mySum();
    
?>