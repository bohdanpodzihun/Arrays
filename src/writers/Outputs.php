<?php

namespace Sorting\writers;

class Outputs
{
    public function outputArray(array $array, $tableName)
    {
        echo "<table cellpadding='5' cellspacing='1' border='1' style='background-color: #c9fffa; margin-right: 30px'>";
        echo "<caption style='font-size: medium; color: #1b1f5d'>$tableName</caption>";
        for ($i = 0; $i < count($array); $i++) {
            echo "<tr style='color: #411d5e'>";
            for ($j = 0; $j < count($array[$i]); $j++) {
                echo "<td>{$array[$i][$j]}</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
}