<?php

namespace Sorting;

class Vertical
{
    public $verticalArray = array();

    public function getVerticalArray(): array
    {
        return $this->verticalArray;
    }

    public function setVerticalArray(array $verticalArray)
    {
        $this->verticalArray = $verticalArray;
    }

    public function verticalSorting($array): array
    {
        $finalArray = array_chunk($array, 3);

        return $finalArray;
    }

    public function outputArray()
    {
        echo "<br> Vertical sorting: <br>";
        for ($i = 0; $i < count($this->verticalArray); $i++) {
            for ($j = 0; $j < count($this->verticalArray[$i]); $j++) {
                echo " | " . $this->verticalArray[$j][$i];
            }
            echo " | <br>";
        }
    }
}
