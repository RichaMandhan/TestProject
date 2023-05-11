<?php

function array_operartions($all_arrays)
{
    $common_values = array();
    foreach($all_arrays as $key => $value)
    {
        //individual array logic
        foreach($value as $valkey => $valsarr)
        {
           
            array_push($common_values,$valsarr);
        }
    }
   
    $array_counts = array_count_values($common_values);
   
    $distinct_values = array();
    foreach($array_counts as $key => $val){
        if($val == 1)
        {
            //echo $val;
            array_push($distinct_values,$key);
        }
    }
   
    return $distinct_values;
   
}


$main_array = array(
                array(1,2,3),
                array(3,4,5),
                array(5,6,7),
                array(7,8,9),
            );

$array_res = array_operartions($main_array);

print_r($array_res);



?>