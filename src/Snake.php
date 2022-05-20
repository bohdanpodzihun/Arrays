<?php

namespace Sorting;

class Snake
{
    public $snakeArray = array();

    public function getSnakeArray(): array
    {
        return $this->snakeArray;
    }

    public function setSnakeArray(array $snakeArray)
    {
        $this->snakeArray = $snakeArray;
    }

    public function snakeSorting($array): array
    {
        $finalArray = array_chunk($array, 3);

        return $finalArray;
    }

    public function outputArray()
    {
        echo "<br> Snake sorting: <br>";

        for ($i = 0; $i < count($this->snakeArray); $i++) {
            if ($i % 2 === 0) {
                for ($j = 0; $j < count($this->snakeArray[0]); $j++) {
                    echo " | " . $this->snakeArray[$i][$j];
                }
                echo " | <br>";
            } else {
                for ($j = count($this->snakeArray[0]) - 1; $j >= 0; $j--) {
                    echo " | " . $this->snakeArray[$i][$j];
                }
                echo " | <br>";
            }
        }
    }
}
