<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Отримуємо значення змінних $e і $f з форми
    $e = $_POST['e'];
    $f = $_POST['f'];

    // Виводимо перший рядок, потім другий
    echo "Перший рядок: " . $e . "<br>";
    echo "Другий рядок: " . $f . "<br>";

    echo "<br>";

    // Виводимо другий рядок, потім перший
    echo "Другий рядок: " . $f . "<br>";
    echo "Перший рядок: " . $e . "<br>";
}
?>
