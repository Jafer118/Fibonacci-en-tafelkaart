<?php
// Functie voor de Fibonacci-reeks tot n stappen
function fibonacci($n) {
    $a = 1;
    $b = 2;
    $result = [];

    // Loop om door alle stappen heen te gaan
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

    // Plak de getallen aan elkaar met een komma
    return implode(', ', $result);
}

// Functie voor de tafelkaart met geneste for-loops
function tafelkaart($n) {
    // Buitenste loop voor de rijen
    for ($i = 1; $i <= $n; $i++) {
        // Binnenste loop voor de kolommen
        for ($j = 1; $j <= $n; $j++) {
            // Vermenigvuldig en print met een tab ertussen
            echo ($i * $j) . "\t";
        }
        // Na elke rij een nieuwe regel starten
        echo "\n";
    }
}

// Testen of het werkt
echo "Fibonacci (n=8):\n";
echo fibonacci(8) . "\n\n";

echo "Tafelkaart (n=10):\n";
tafelkaart(10);
?>