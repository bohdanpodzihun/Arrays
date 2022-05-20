<?php

namespace Sorting;

class Horizontal 
{
    public $horizontalArray = array();

    public function getHorizontalArray(): array
    {
        return $this->horizontalArray;
    }

    public function setHorizontalArray(array $horizontalArray)
    {
        $this->horizontalArray = $horizontalArray;
    }

    public function horizontalSorting($array): array
    {
        $finalArray = array_chunk($array, 3);

        return $finalArray;
    }

    public function outputArray()
    {
        echo "<br> Horizontal sorting: <br>";

        for ($i = 0; $i < count($this->horizontalArray); $i++) {
            for ($j = 0; $j < count($this->horizontalArray[$i]); $j++) {
                echo " | " . $this->horizontalArray[$i][$j];
            }
            echo " | <br>";
        }
    }
}
