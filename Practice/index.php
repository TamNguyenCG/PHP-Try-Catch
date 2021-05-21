<?php

include_once 'DivideByZeroException.php';

/**
 * @throws DivideByZeroException
 */
function divide($numerator, $denominator): float|int
{
    if ($denominator === 0) {
        throw new DivideByZeroException();
    }
    return $numerator / $denominator;
}

try{
    $result = divide(100, 5);
    echo $result."<br>";
    $result = divide(100, 0);
    echo $result;
}catch (DivideByZeroException $e){
    echo "Error !!!".$e;
}