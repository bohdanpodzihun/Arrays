<?php

namespace Sorting;

class Generate
{
    public $array = array();

    public function setArray($array)
    {
        $this->array = $array;
    }

    public function getArray(): array
    {
        return $this->array;
    }

    public function generateArray(): array
    {
        for ($i = 0; $i < 3; $i++):
            for ($j = 0; $j < 3; $j++):
                $array[$i][$j] = rand(1, 9);
            endfor;
        endfor;

        return $array;
    }

    public function outputArray()
    {
        echo "Random generated input array: <br>";

        for ($i = 0; $i < count($this->array); $i++) {
            for ($j = 0; $j < count($this->array[$i]); $j++) {
                echo " | " . $this->array[$i][$j];
            }
            echo " | <br>";
        }
    }
}
