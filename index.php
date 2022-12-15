<?php

// Example 1
$comb = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
$pass = array();
$combLen = strlen($comb) - 1;
for ($i = 0; $i < 8; $i++) {
    $n = rand(0, $combLen);
    $pass[] = $comb[$n];
}

var_dump($pass);
print(implode($pass));

// Example 2
// openssl_random_pseudo_bytes() для генерації псевдовипадкового рядка байтів
// bin2hex() перетворює двійкові дані в шістнадцятковий вигляд.
$bytes = openssl_random_pseudo_bytes(4);

echo '<br>' . $bytes;

$pass = bin2hex($bytes);
echo '<br> openssl_random_pseudo_bytes = ' . $pass;

// Example 3
// str_shuffle
$comb = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
$shfl = str_shuffle($comb);
$pwd = substr($shfl,0,8);
echo '<br>str_shuffle = ' . $pwd;


////////////////////////////////////////////////////////////////////////////
///
///
echo '<br>';
$str1 = "Тест";
$str2 = "Тест";
if($str1 == "Тест") {
    echo "TRUE"; // Результат: TRUE
}
echo '<br>';

if($str1 == $str2) {
    echo "TRUE"; // Результат: TRUE
}
//========================== бінарно-безпечне порівняння рядків
echo '<br>';

$str1 = "Тест";
$str2 = "тест";
if(strcmp($str1, "Тест") == 0) echo "TRUE"; // Результат: TRUE
echo strcasecmp($str1, $str2); // Результат: -1


//========================== функція trim
echo '<br>';
$str1 = "Тест";
$str2 = "  Тест   ";
if($str1 == trim($str2)) {
    echo "TRUE"; // Результат: TRUE
}
if(strcmp($str1, trim($str2)) == 0) {
    echo "TRUE"; // Результат: TRUE
}

//========================== Конвертування рядка PHP у ціле число (int, integer)
echo '<br>';
$str = "100";

$num = (int)$str;


//========================== перевірка і на тип дпних ===
echo '<br>';
$str = "100";
$num = (int)$str;
if ($str === 100) {echo "Рядок";}
if ($num === 100) {echo "Ціле число - int";}



//========================== Перетворення рядків у масив в PHP
echo '<br>';

/**
 * delimiter – роздільник
 * string – початковий рядок
 *limit – обмеження символів для елемента (необов’язковий параметр)
 *
 * explode ( string $delimiter , string $string [, int $limit ] )
 */
$string = "item1, item2, item3, item4";
$delimiter = ",";
$itemList = explode($delimiter, $string);
var_dump($itemList);



// ========================== Заміна рядків у PHP
/**
 * search – значення для пошуку. Для декількох значень можна використовувати масив.
 * replace – рядок заміни, його буде використано для заміни шуканих значень search. Для декількох значень можна використовувати масив.
 * subject – рядок або масив, в якому проводиться пошук і заміна. Якщо subject є масивом, то пошук з заміною буде здійснюватися над кожним елементом subject, а результатом функції також буде масив.
 * count – якщо цей параметр переданий, тоді він буде обмежувати кількість проведених замін.
 *
 * str_replace ( mixed $search , mixed $replace , mixed $subject [, int &$count ] )
 */
echo '<br>';
$originalString = "Мені подобається червоний колір, у мене є червоний автомобіль та червоний велосипед.";
$newString = str_replace("червоний", "зелений", $originalString);
echo $originalString . "<br>";
echo $newString . "<br>";

?>