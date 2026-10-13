<?php
// Function for the Fibonacci sequence up to n steps
function fibonacci($n) {
    $a = 1;
    $b = 2;
    $result = [];

    // Loop to iterate through all steps
    for ($i = 1; $i <= $n; $i++) {
        if ($i == 1) {
            $result[] = 1;
        } elseif ($i == 2) {
            $result[] = 2;
        } else {
            $next = $a + $b;
            $result[] = $next;
            $a = $b;
            $b = $next;
        }
    }

    // Join the numbers together with a comma
    return implode(', ', $result);
}

// Function for the multiplication table with nested for-loops
function tafelkaart($n) {
    // Outer loop for the rows
    for ($i = 1; $i <= $n; $i++) {
        // Inner loop for the columns
        for ($j = 1; $j <= $n; $j++) {
            // Multiply and print with a tab in between
            echo ($i * $j) . "\t";
        }
        // Start a new line after each row
        echo "\n";
    }
}

// Testen of het werkt
echo "Fibonacci (n=8):\n";
echo fibonacci(8) . "\n\n";

echo "Tafelkaart (n=10):\n";
tafelkaart(10);
?>