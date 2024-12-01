<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
include('class6.php');
// function myfun($num1=1,$num2=2){
//     return $num1+$num2;
// }
// $total=myfun(2,5);
// echo $total;

?>

<?php
// $age=20;
// function myfun(){
//     // echo $num1+$num2;
// //   access globally
//     $age=  $GLOBALS['age'];
//     echo $age;
// }
// myfun()

?>
<?php
// $age=20;
// function myfun(){
// static $num=0;
// $num++;
// echo $num;
// }
// myfun();
// echo "<br>";
// myfun();

?>
<?php
// function myfun(&$y){//value hi uth ky aya 
//     $y++;
//     echo $y;
// }
// $x=1;  // value nhi gaya srf ek copy gaya & nhi lgaye tu
// myfun($x);
// echo "<br>";
// echo $x;

?>

    <!-- recursive function -->
    <?php
     function fact($num){
        // base case
        if($num<2){
            return 1;
        }
                        //4-1....function call with new argument
        return ($num*fact($num-1)); //return vapis bjta ha value ko
     }
     $factans=fact(4);
     echo $factans;
     ?>
    
</body>
</html>