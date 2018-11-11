<?php
//echo "Первая строка", nl2br(HP_EOL), "Вторая строка";

$data = [
    1 => 'Первое значение',
    'Второй ключ' => [1, 2, 3]
];
foreach ($data as $key => $value) {
    echo "Это ключ", $key, PHP_EOL, "Это значение по ключу", $value, PHP_EOL, PHP_EOL;
}
