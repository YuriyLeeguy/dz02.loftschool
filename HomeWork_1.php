<?PHP
// Задание № 1
echo "Задание № 1<BR>";
$name = "Юрий";
$age = 39;
echo "Меня зовут: $name<BR>";
print ("Мне $age лет<BR>");
echo "\" <br> ! <BR> | <BR>\ <BR> / <BR> ' <BR> \" <BR> \\<BR>";

// Задание № 2
echo "<BR>Задание № 2<BR>";
const TOTAL_PICTURES=80;
echo "Всего ";
echo TOTAL_PICTURES . ' картин, из них ';
const FELT_PENS=23;
echo FELT_PENS. " картины написаны фломастером, ";
const PENCILS=40;
echo PENCILS." картин написаны карандашом и ";
const PAINTS=TOTAL_PICTURES-(FELT_PENS+PENCILS);
echo PAINTS." картин написаны красками.<BR>";

// Задание № 3
echo "<BR>Задание №3<BR>";
$age = mt_rand(-100, 100);
echo "Ваш возраст: $age <BR>";
if ($age > 65) {
    echo "Вам пора на пенсию";
} elseif ($age >= 18 and $age <= 65) {
    echo "Вам еще работать и работать!";
} elseif ($age < 18 and $age >= 1) {
    echo "Вам еще рано работать!";
} else {
    echo "Не известный возраст.";
}

// Задание № 4
echo "<BR><BR>Задание № 4<BR>";
$day = mt_rand(-5, 8);
echo "День: $day<BR>";
switch ($day) {
    case 1:
        echo "Это рабочий день<BR>";
        break;
    case 2:
        echo "Это рабочий день<BR>";
        break;
    case 3:
        echo "Это рабочий день<BR>";
        break;
    case 4:
        echo "Это рабочий день<BR>";
        break;
    case 5:
        echo "Это рабочий день<BR>";
        break;
    case 6:
        echo "Это выходной день<BR>";
        break;
    case 7:
        echo "Это выходной день<BR>";
        break;
    default:
        echo "Не известный день<BR>";
}

// Задание № 5
echo "<BR>Задание № 5<BR>";
$bmw=[
    'model'=>'X5',
    'speed'=>120,
    'doors'=>5,
    'year'=>2015
];
$toyota=[
    'model'=>'Nisan',
    'speed'=>100,
    'doors'=>5,
    'year'=>2016
];
$opel=[
    'model'=>'Astra',
    'speed'=>180,
    'doors'=>5,
    'year'=>2017
];
$cars=[
    'bmw'=>$bmw,
    'toyota'=>$toyota,
    'opel'=>$opel
];

foreach ($cars as $car => $val) {
    if ($car=='bmw') {
        echo "CAR $car <BR>";
        foreach ($bmw as $key => $value) {
            echo "$value ";
        }
    }
    if ($car=='toyota') {
        echo "<BR><BR>CAR $car <BR>";
        foreach ($toyota as $key => $value) {
            echo "$value ";
        }
    }
    if ($car=='opel') {
        echo "<BR><BR>CAR $car <BR>";
        foreach ($opel as $key => $value) {
            echo "$value ";
        }
    }
}
// Выводит массивы на экран, если снять с коммента.
/*
echo "<PRE>";
print_r($bmw);
print_r($toyota);
print_r($opel);
print_r($cars);
*/

// Задание № 6
echo "<BR><BR>Задание № 6<BR>";

echo '<table align="left" border="1">';
for ($i=1; $i <= 10; $i++) {
    echo "<tr>";
    for ($j=1; $j<=10; $j++) {
        $result=$i*$j;
        echo "<td>";
        if ($i % 2 == 0 and $j % 2 == 0) {
            echo "($result)";
        } elseif ($i % 2 <> 0 and $j % 2 <> 0) {
            echo "[$result]";
        } else {
            echo "$result";
        }
    };
    echo "</td>";
};
echo "<tr>"."<BR>";
