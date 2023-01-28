<?php
//echo "Hello World \n";
//echo "Bangladesh is a land of river.";
$name=array("Abadul"=>"6","Haque"=>"5","Rubel"=>"4");
//$i=count($name);
//echo $name['Abadul'];
foreach($name as $x=>$x_value){

    //echo "My name is ".$x." and My age is ".$x_value."\n";
}


$arr = array(1, 2, 3, 4);
foreach ($arr as &$value) {
    $value = $value * 2;
    echo $value."\n";
}
// $arr is now array(2, 4, 6, 8)
unset($value); // break the reference with the last element

foreach($value as $i){
echo $i;

}



?>

