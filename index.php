<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Array sorting</title>
</head>
<body>
    <div class="container">
    <?php
        require 'vendor/autoload.php';

        use Sorting\Generate;
        use Sorting\ConvertAndSort;
        use Sorting\Outputs;
        use Sorting\sorters\Horizontal;
        use Sorting\sorters\Vertical;
        use Sorting\sorters\Snake;
        use Sorting\sorters\Diagonal;
        use Sorting\sorters\Snail;

        $generate = new Generate();
        $convertAndSort = new ConvertAndSort();
        $outputs = new Outputs();
        $horizontal = new Horizontal();
        $vertical = new Vertical();
        $snake = new Snake();
        $diagonal = new Diagonal();
        $snail = new Snail();

        $sizeOfArray = 7;
        $inputArray = $generate->generate($sizeOfArray);
        echo "Random generated input array: <br>";
        $outputs->outputArray($inputArray);
        $convertedAndSortedArray = $convertAndSort->convertAndSort($inputArray, $sizeOfArray);

        $horizontalForOutput = $horizontal->horizontalSorting($convertedAndSortedArray, $sizeOfArray);
        echo "<br> Horizontal array: <br>";
        $outputs->outputArray($horizontalForOutput);

        $verticalForOutput = $vertical->verticalSorting($convertedAndSortedArray, $sizeOfArray);
        echo "<br> Vertical array: <br>";
        $outputs->outputArray($verticalForOutput);

        $snakeForOutput = $snake->snakeSorting($convertedAndSortedArray, $sizeOfArray);
        echo "<br> Snake array: <br>";
        $outputs->outputArray($snakeForOutput);

        $snailForOutput = $snail->snailSorting($convertedAndSortedArray, $sizeOfArray);
        echo "<br> Snail array: <br>";
        $outputs->outputArray($snailForOutput);

        $diagonalForOutput = $diagonal->diagonalSorting($convertedAndSortedArray, $sizeOfArray);
        echo "<br> Diagonal array: <br>";
        $outputs->outputArray($diagonalForOutput);
        ?>
    </div>

</body>
</html>