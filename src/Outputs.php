<?php

namespace Sorting;

class Outputs
{
    public function outputArray(array $array)
    {
        for ($i = 0; $i < count($array); $i++) {
            for ($j = 0; $j < count($array[$i]); $j++) {
                echo "  " . $array[$i][$j];
            }
            echo "<br>";
        }
    }
}