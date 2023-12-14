<?php
class Calculator {
    public function add($x, $y) {
        return $x + $y;
    }

    public function subtract($x, $y) {
        return $x - $y;
    }

    public function multiply($x, $y) {
        return $x * $y;
    }

    public function divide($x, $y) {
        if ($y == 0) {
            throw new Exception("Division by zero is not allowed.");
        }
        return $x / $y;
    }
}

$calc = new Calculator();
echo "1 + 2 = " . $calc->add(1, 2) . "\n";
echo "3 - 1 = " . $calc->subtract(3, 1) . "\n";
echo "2 * 4 = " . $calc->multiply(2, 4) . "\n";
echo "6 / 3 = " . $calc->divide(6, 3) . "\n";
?>