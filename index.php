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
        use Sorting\sorters\Horizontal;
        use Sorting\sorters\Vertical;
        use Sorting\sorters\Snake;
        use Sorting\sorters\Diagonal;
        use Sorting\sorters\Snail;

        $generate = new Generate();
        $convertAndSort = new ConvertAndSort();
        $horizontal = new Horizontal();
        $vertical = new Vertical();
        $snake = new Snake();
        $diagonal = new Diagonal();
        $snail = new Snail();

        $generate->setArray($generate->generateArray());
        $generate->outputArray();

        $convertAndSort->setConverted($convertAndSort->convertAndSort($generate->array));
        echo "<br> Converted into one-dimensional array and sorted by growth: <br>";
        echo implode(", ", $convertAndSort->converted) . "<br>";

        $horizontal->setHorizontalArray($horizontal->horizontalSorting($convertAndSort->converted));
        $horizontal->outputArray();

        $vertical->setVerticalArray($vertical->verticalSorting($convertAndSort->converted));
        $vertical->outputArray();

        $snake->setSnakeArray($snake->snakeSorting($convertAndSort->converted));
        $snake->outputArray();

        $diagonal->setDiagonalArray($diagonal->sort($convertAndSort->converted));
        $diagonal->diagonalSorting();

        echo "<br> Snail sorting: <br>";
        $snail->setSnailArray($snail->sort($convertAndSort->converted));

        ?>
    </div>

</body>
</html>