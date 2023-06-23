<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $c = $_POST['c'];
    $d = $_POST['d'];

    // Перевіряємо, чи введені значення є цілими числами
    if (is_numeric($c) && is_numeric($d)) {
        // Виконуємо математичні операції
        $sum = $c + $d;
        $product = $c * $d;
        $difference = $c - $d;
        $quotient = $c / $d;

        // Виводимо результати
        echo "Сума: " . $sum . "<br>";
        echo "Добуток: " . $product . "<br>";
        echo "Різниця: " . $difference . "<br>";
        echo "Частка: " . $quotient . "<br>";
    } else {
        echo "Будь ласка, введіть цілі числа для обчислень.";
    }
}
?>
