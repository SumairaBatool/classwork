<?php

// $name1=array("ali","ahmed","noor","kamal");
// $name2=array("ali2","ahmed2","noor2","kamal2");
// $search=array_diff($name1,$name2);
// print_r($search) ;
//                      // $search=array_search($name1);
//                      // to add value first
// $four=array_unshift($name1,"alam");
// print_r($four);
// print_r($name1);
// ***********************************************//
// all about user defind function*****************//
// ***********************************************//

//     $name ="hassan";
// function sayHi(){
//     // local scope
//     echo $name;
// }



$name="ali";
$name1="ahemd";
$name2="noori";
function fulname(){
    global $name, $name1, $name2,$fulname;
    $fulname=$name." ".$name1." ".$name2;
}
fulname();
echo $fulname;
?>