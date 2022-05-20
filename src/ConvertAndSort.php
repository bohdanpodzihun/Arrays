<?php

namespace Sorting;

class ConvertAndSort extends Generate
{
    public $converted = array();

    public function getConverted(): array
    {
        return $this->converted;
    }

    public function setConverted(array $converted)
    {
        $this->converted = $converted;
    }

    public function convertAndSort($array): array
    {
        $convertedArray = call_user_func_array('array_merge', $array);

        asort($convertedArray);

        return $convertedArray;
    }

}
