<!DOCTYPE html>
<html>
<head>
    <title>Суперглобальні змінні PHP</title>
    <style>
        table {
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
        }
    </style>
</head>
<body>
<h1>Суперглобальні змінні PHP</h1>

<table>
    <tr>
        <th>Позначення змінної</th>
        <th>Характеристика</th>
        <th>Отримане значення</th>
    </tr>
    <tr>
        <td>$GLOBALS</td>
        <td>Зберігає всі глобальні змінні</td>
        <td><?php print_r($GLOBALS); ?></td>
    </tr>
    <tr>
        <td>$_SERVER</td>
        <td>Інформація про сервер і середовище</td>
        <td><?php print_r($_SERVER); ?></td>
    </tr>
    <tr>
        <td>$_GET</td>
        <td>Параметри, передані методом GET</td>
        <td><?php print_r($_GET); ?></td>
    </tr>
    <tr>
        <td>$_POST</td>
        <td>Параметри, передані методом POST</td>
        <td><?php print_r($_POST); ?></td>
    </tr>
    <tr>
        <td>$_FILES</td>
        <td>Інформація про завантажені файли</td>
        <td><?php print_r($_FILES); ?></td>
    </tr>
    <tr>
        <td>$_COOKIE</td>
        <td>Змінні, збережені в кукі</td>
        <td><?php print_r($_COOKIE); ?></td>
    </tr>
    <tr>
        <td>$_REQUEST</td>
        <td>Змінні HTTP-запиту ($_GET, $_POST і $_COOKIE об'єднані)</td>
        <td><?php print_r($_REQUEST); ?></td>
    </tr>
    <tr>
        <td>$_ENV</td>
        <td>Інформація про змінні середовища</td>
        <td><?php print_r($_ENV); ?></td>
    </tr>
</table>
</body>
</html>
