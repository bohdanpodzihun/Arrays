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

    use Sorting\ConvertAndSort;
    use Sorting\Generate;
    use Sorting\sorters\Diagonal;
    use Sorting\sorters\Horizontal;
    use Sorting\sorters\Snail;
    use Sorting\sorters\Snake;
    use Sorting\sorters\Vertical;
    use Sorting\writers\Outputs;
    use Sorting\writers\TxtWriter;
    use Sorting\writers\DBWriter;

    $generate = new Generate();
        $convertAndSort = new ConvertAndSort();
        $outputs = new Outputs();
        $txtWriter = new TxtWriter();
        $dbWriter = new DBWriter();
        $horizontal = new Horizontal();
        $vertical = new Vertical();
        $snake = new Snake();
        $diagonal = new Diagonal();
        $snail = new Snail();

        $sizeOfArray = 7;
        $inputArray = $generate->generate($sizeOfArray);
        $outputs->outputArray($inputArray, "Random generated input array");
        $convertedAndSortedArray = $convertAndSort->convertAndSort($inputArray, $sizeOfArray);

        $horizontalForOutput = $horizontal->horizontalSorting($convertedAndSortedArray, $sizeOfArray);
        $outputs->outputArray($horizontalForOutput, "Horizontal array");

        $verticalForOutput = $vertical->verticalSorting($convertedAndSortedArray, $sizeOfArray);
        $outputs->outputArray($verticalForOutput, "Vertical array");

        $snakeForOutput = $snake->snakeSorting($convertedAndSortedArray, $sizeOfArray);
        $outputs->outputArray($snakeForOutput, "Snake array");

        $snailForOutput = $snail->snailSorting($convertedAndSortedArray, $sizeOfArray);
        $outputs->outputArray($snailForOutput, "Snail array");

        $diagonalForOutput = $diagonal->diagonalSorting($convertedAndSortedArray, $sizeOfArray);
        $outputs->outputArray($diagonalForOutput, "Diagonal array");
        ?>
    </div>

</body>
</html>