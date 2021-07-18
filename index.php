<?php

echo "Получить остаток деления 7 на 3=" . (7 % 3) . "<br/>";
echo "Получить целую часть сложения 7 и 7,15=" . (int)(7 + 7.15) . "<br/>";
echo "Получить корень из 25=" . sqrt(25) . "<br/>";
echo "<hr><br/><br/>";

$str = 'Десять негритят пошли купаться в море';
echo "Получить четвертое слово из фразы $str = ";
$str1 = explode(' ', $str);
print $str1[3] . "<br/>";
echo "Получить 17й символ из фразы $str = ";
print mb_substr($str, 16, 1) . "<br/>";
echo "Сделать заглавной первую букву во всех словах фразы $str = ";
echo mb_convert_case($str, MB_CASE_TITLE, "UTF-8") . "<br/>";
echo "Посчитать длину сроки $str = ";
echo mb_strlen($str) . "<br/>";
echo "<hr><br/><br/>";
echo "Правильно ли утверждение true равно 1 ";
echo true == 1 ? "yes" : "no";
echo "<br/>Правильно ли утверждение  false тождественно 0 ";
echo false === 0 ? "yes" : "no" . "<br/>";
echo "Какая строка длиннее three - три ";
$strLen1 = strlen('three');
$strLen2 = mb_strlen('три');
if ($strLen1 == $strLen2) {
    echo 'three==три';
} elseif ($strLen1 > $strLen2) {
    echo 'three>три';
} else {
    echo 'three<три';
}
echo "<br/>";
echo "Какое число больше 125 умножить на 13 плюс 7 или 223 плюс 28 умножить на 2 ";
if ((125 * 13 + 7) == (223 + 28 * 2)) {
    echo '((125*13+7)=(223+28*2))';
} elseif ((125 * 13 + 7) > (223 + 28 * 2)) {
    echo '((125*13+7)>(223+28*2))';
} else {
    echo '(125*13+7)>(223+28*2)';
}
















