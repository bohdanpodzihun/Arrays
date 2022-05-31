<?php

namespace Sorting\sorters;

class Snail
{
    public function snailSorting(array $array, int $size): array
    {
        $snailArray = array();
        $shiftedArray = $array;
        $coordinateX = -1;
        $coordinateY = 0;
        $xIteration = 1;
        $yIteration = 0;
        $sizeOfLine = $size - 1;
        $i = 0;
        $value = 0;

        foreach ($array as $value) {
            if ($i > $sizeOfLine) {
                if ($xIteration === 1) {
                    $xIteration = 0;
                    $yIteration = 1;
                    $sizeOfLine -= 1;
                } elseif ($yIteration === 1) {
                    $xIteration = -1;
                    $yIteration = 0;
                } elseif ($xIteration === -1) {
                    $xIteration = 0;
                    $yIteration = -1;
                    $sizeOfLine -= 1;
                } elseif ($yIteration === -1) {
                    $xIteration = 1;
                    $yIteration = 0;
                }
                $i = 0;
            }
            $i += 1;
            $coordinateX += $xIteration;
            $coordinateY += $yIteration;
            $snailArray[$coordinateY][$coordinateX] = $value;
        }

        return $snailArray;
    }
}
