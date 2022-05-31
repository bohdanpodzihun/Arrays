<?php

namespace Sorting;

class Generate
{
    public function generate($size = 3): array
    {
        $array = array();

        for ($i = 0; $i < $size; $i++) {
            for ($j = 0; $j < $size; $j++) {
                $array[$i][$j] = rand(1, $size * $size);
            }
        }

        return $array;
    }
}
