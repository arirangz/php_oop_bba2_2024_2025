<?php
class ArrayTools
{
    public static function getMax(array $myArray):float
    {
        $max = $myArray[0];
        foreach($myArray as $value) {
            if ($value >= $max) {
                $max = $value;
            }
        }
        return $max;
    }
    public static function getMin(array $myArray):float
    {
        $min = $myArray[0];
        foreach($myArray as $value) {
            if ($value <= $min) {
                $min = $value;
            }
        }
        return $min;
    }
}