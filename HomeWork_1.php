<?php

const DELIMITER_LINE = "<BR>";
// Задание № 1
echo "Задание № 1", DELIMITER_LINE;
$name = "Юрий";
$age = 39;
echo "Меня зовут: $name", DELIMITER_LINE;
print ("Мне $age лет" . DELIMITER_LINE);
echo "\"" . DELIMITER_LINE
    . "!" . DELIMITER_LINE
    . "|" . DELIMITER_LINE
    . "\\" . DELIMITER_LINE
    . " /" . DELIMITER_LINE
    . "'" . DELIMITER_LINE
    . "\"" . DELIMITER_LINE
    . "\\" . DELIMITER_LINE;

// Задание № 2
echo DELIMITER_LINE . "Задание № 2" . DELIMITER_LINE;
const TOTAL_PICTURES = 80;
const FELT_PENS = 23;
const PENCILS = 40;
$paints = TOTAL_PICTURES - (FELT_PENS + PENCILS);
echo "Всего ";
echo TOTAL_PICTURES . ' картин, из них ';
echo FELT_PENS . " картины написаны фломастером, ";
echo PENCILS . " картин написаны карандашом и ";
echo "$paints картин написаны красками." . DELIMITER_LINE;

// Задание № 3
echo DELIMITER_LINE . "Задание №3" . DELIMITER_LINE;
const MAX_AGE = 65;
const MIN_VALID_AGE_FOR_WORK = 18;
$age = mt_rand(-100, 100);
echo "Ваш возраст: $age " . DELIMITER_LINE;
if ($age > MAX_AGE) {
    echo "Вам пора на пенсию";
} elseif ($age >= MIN_VALID_AGE_FOR_WORK and $age <= MAX_AGE) {
    echo "Вам еще работать и работать!";
} elseif ($age > 0 and $age < MIN_VALID_AGE_FOR_WORK) {
    echo "Вам еще рано работать!";
} else {
    echo "Не известный возраст.";
}

// Задание № 4
echo DELIMITER_LINE . DELIMITER_LINE . "Задание № 4" . DELIMITER_LINE;
$day = mt_rand(-5, 8);
echo "День: $day" . DELIMITER_LINE;
switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo "Это рабочий день" . DELIMITER_LINE;
        break;
    case 6:
    case 7:
        echo "Это выходной день" . DELIMITER_LINE;
        break;
    default:
        echo "Не известный день" . DELIMITER_LINE;
}

// Задание № 5
echo DELIMITER_LINE . "Задание № 5" . DELIMITER_LINE;
$bmw = [
    'model' => 'X5',
    'speed' => 120,
    'doors' => 5,
    'year' => 2015
];
$toyota = [
    'model' => 'Nisan',
    'speed' => 100,
    'doors' => 5,
    'year' => 2016
];
$opel = [
    'model' => 'Astra',
    'speed' => 180,
    'doors' => 5,
    'year' => 2017
];
$cars = [
    'bmw' => $bmw,
    'toyota' => $toyota,
    'opel' => $opel
];

foreach ($cars as $car => $val) {
    echo "CAR $car " . DELIMITER_LINE;
    foreach ($val as $value) {
        echo "$value ";
    }
    echo DELIMITER_LINE;
}

// Задание № 6
echo DELIMITER_LINE . DELIMITER_LINE . "Задание № 6" . DELIMITER_LINE;

// 1 + 3 % 2 = 0 это не четное = квадратные скобки
// 2 + 4 % 2 = 0 это четное = круглые скобки
// 1 + 2 = 1, 3 + 4 = 1 = ничего не ставим

echo '<table align="left" border="1">';
for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 10; $j++) {
        echo "<td>";
        $result = $i * $j;
        /*        if ($i % 2 == 0 and $j % 2 == 0) {
                    echo "($result)";
                } elseif ($i % 2 <> 0 and $j % 2 <> 0) {
                    echo "[$result]";
                } else {
                    echo "$result";
                }*/
        if (($i + $j) % 2 == 0) {
            if ($i % 2 == 0) {
                echo "($result)";
            } else {
                echo "[$result]";
            }
        } else {
            echo $result;
        }
    };
    echo "</td>";
};
echo "<tr>";
