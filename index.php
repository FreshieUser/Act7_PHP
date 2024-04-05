<!DOCTYPE html>
<html>
<head>
    <title>PHP First Program</title>
</head>
<h1>Generate HTML content</h1>
<p>This example shows how to generate dynamic HTML content with mixed text and variables</p>
<body>
    <?php
    $name = "Jipthy"; 
    echo "<h2>Welcome, $name!</h2>";
    echo "<h2>Welcome, $name!</h2>";
    echo "<h2>Welcome, $name!</h2>";

    
    $headingLevel = "h4"; 
    echo "<$headingLevel>Welcome, $name!</$headingLevel>";

    $color = "red"; 
    $output = "<h1 style='color: $color;'>Welcome, $name!</h1>";
    echo $output;
    ?>
</body>
</html>
--------------------------------------------------------
<?php
    // Task a: Define two number variables and calculate their sum, difference, and product.
    $num1 = 10;
    $num2 = 5;
    $sum = $num1 + $num2;
    $difference = $num1 - $num2;
    $product = $num1 * $num2;

    // Task b: Define four number variables x1, x2, x3, and x4. Calculate their average.
    $x1 = 15;
    $x2 = 20;
    $x3 = 25;
    $x4 = 30;
    $average = ($x1 + $x2 + $x3 + $x4) / 4;
    ?>

    <h1>Calculation Example</h1>
    <ul>
        <li>Sum: <?php echo $sum; ?></li>
        <li>Difference: <?php echo $difference; ?></li>
        <li>Product: <?php echo $product; ?></li>
    </ul>

    <p>Average: <?php echo $average; ?></p>
     ------------------------------------------------------------------------
     <h1>Selection Example</h1>
     <?php
$numberToCheck = -7; 
if ($numberToCheck > 0) {
    echo "$numberToCheck is positive<br>";
} elseif ($numberToCheck < 0) {
    echo "$numberToCheck is negative<br>";
} else {
    echo "$numberToCheck is zero<br>";
}

$string1 = "Hello";
$string2 = "Hello"; 
if ($string1 === $string2) {
    echo "The strings are the same<br>";
} else {
    echo "The strings are different<br>";
}
?>
-------------------------------------------
<h1>LOOP EXAMPLE</h1>
<?php
    $limit = 5; 
    echo "<h2>Numbers from 1 to $limit:</h2>";
    echo "<ul>";
    for ($i = 1; $i <= $limit; $i++) {
        echo "<li>$i</li>";
    }
    echo "</ul>";
    $numberToSum = 5;
    $totalSum = 0;
    $j = 1;
    while ($j <= $numberToSum) {
        $totalSum += $j;
        $j++;
    }
    echo "<p>Sum of numbers from 1 to $numberToSum: $totalSum</p>";
    $x = 3; 
    $y = 4; 
    echo "<table border=\"1\">";
    for ($row = 1; $row <= $x; $row++) {
        echo "<tr>";
        for ($col = 1; $col <= $y; $col++) {
            echo "<td>Row $row, Column $col</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>