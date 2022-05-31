<?php

namespace Sorting\sorters;

class Snake
{
    public function snakeSorting(array $array, int $size): array
    {
        $snakeArray = array();

        for ($i = 0; $i < $size; $i++) {
            for ($j = 0; $j < $size; $j++) {
                $snakeArray[$i][$j] = $array[$i * $size + $j * (1 - ($i % 2) * 2) + ($size - 1) * ($i % 2)];
            }
        }

        return $snakeArray;
    }
}
