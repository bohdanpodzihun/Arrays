<?php

namespace Sorting;

class Snail
{
    public $snailArray = array();

    public function getSnailArray(): array
    {
        return $this->snailArray;
    }

    public function setSnailArray(array $snailArray)
    {
        $this->snailArray = $snailArray;
    }

    public function sort($array): array
    {
        $finalArray = array_chunk($array, 3);

        return $finalArray;
    }

    public function snailSorting()
    {
        $n = 0;
        $rows = count($this->snailArray);
        $cols = count($this->snailArray[0]);
        $top = 0;
        $bottom = $rows - 1;
        $left = 0;
        $right = $cols - 1;
        $dir = 1;


    }
}
