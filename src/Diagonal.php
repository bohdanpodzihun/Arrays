<?php

namespace Sorting;

class Diagonal
{
    public $diagonalArray = array();

    public function getDiagonalArray(): array
    {
        return $this->diagonalArray;
    }

    public function setDiagonalArray(array $diagonalArray)
    {
        $this->diagonalArray = $diagonalArray;
    }

    public function sort($array): array
    {
        $finalArray = array_chunk($array, 3);

        return $finalArray;
    }

    public function diagonalSorting()
    {
        echo "<br> Diagonal sorting: <br>";

        for ($k = 0; $k < count($this->diagonalArray) * 2; $k++) {
            for ($j = 0; $j <= $k; $j++) {
                $i = $k - $j;
                if ($i < count($this->diagonalArray) && $j < count($this->diagonalArray)) {
                    echo " | " . $this->diagonalArray[$i][$j];
                }
            }
            echo " | <br>";
        }
    }
}
