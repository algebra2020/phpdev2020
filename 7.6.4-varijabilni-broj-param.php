<?php
/**
 * Vraća zbroj parametara
 * @return int
 */
function sum() {
    // Dobijamo niz parametara u obliku polja
   // print_r(func_get_args());
    /*
      Array
    (
    [0] => 1
    [1] => 2
    [2] => 3
    [3] => 4
    )
     */
    
    $zbroj = 0;
    foreach (func_get_args() as $value) {
        $zbroj += $value;
    }
    return $zbroj;
}

echo sum(1, 2, 3, 4);  // suma je 10

/**
 * Zbroj parametara pomoću 
 * func_num_args() i func_get_arg($i)
 * 
 * @return int
 */
function sum1() {   
    $zbroj = 0;
    for ($i = 0; $i < count(func_num_args()); $i++) {
        $zbroj += func_get_arg($i);
    }
    return $zbroj;
}

echo sum1(1, 2, 3, 4);  // suma je 10