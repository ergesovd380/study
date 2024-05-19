<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <title>PHP Lessons with Fehmi Uyar</title>
</head>
<body>
<div class="container-fluid mt-3">
  <div class="alert alert-primary">
    <?php 
//  Lesson 1 Start
      // echo "Hello PHP";

## TYPES
/*  Lesson 5 Data Types
      Типы в PHP:
        String - обычный str;
        Integer - полное число 65;
        Float - неполное число 65,2;
        Boolean - true, false;
        Array - массив;
        Object - объект;
        NULL - ничего нет;
    */
      // $str = 'Hello from PHP';            // ; обязательно в php
      // $int = 658;
      // $float = 653.56;
      // $bool = true;
      // $arr = array(12, 123, 2562);        // одно и тоже с arr2
      // $arr2 = [12, 123, 2562];
      // // $obj = {
      // //   str: 'Hello from obj',
      // //   int: 1215
      // // };
      // echo $str.'<br>'.$int.'<br>'.$float.'<br>'.$bool.'<br>'.$arr[2].'<br>'.$arr2[1].'<br>';
      // echo var_dump($arr)       // чтобы посмотреть тип переменной


## STRING
// Lesson 6 - 12    Strings (Все функции строк)

/* Функции по работе с длиной строки 
      strlen() - показывает кол-во символов length;
      Str_Word_count() - показывет сколько слов в переменной;
      str_pad — Дополняет строку другой строкой до заданной длины;
      str_repeat — Возвращает повторяющуюся строку;
      strcspn — Возвращает длину участка в начале строки, не соответствующего маске (strcsp(string, characters, offset, length) string-Строка для исследования, characters-Строка, содержащая каждый из запрещённых символов, offset-Позиция в строке string, с которой начинается поиск, length-Длина фрагмента из string для обследования)
      stripos — Возвращает позицию первого вхождения подстроки без учёта регистра
      strstr — Находит первое вхождение подстроки
      stristr — Регистронезависимый вариант функции strstr()
      strpbrk — Ищет в строке любой символ из заданного набора и возвращает после него все
      substr_count — Возвращает кол-во вхождений подстроки
      wordwrap — Переносит строку по указанному количеству символов
    */
      // $str = 'Hello PHP';
      // echo strlen($str).': показывает кол-во символов length'.'<br>'; // 9

      // echo str_Word_count($str).': показывет сколько слов в переменной'.'<br>'; // 2

      // $php = 'Hello PHP';
      // echo str_pad($php, 18, '+'); // Hello PHP+++++++++
      // echo '<br>';

      // echo str_repeat('+', 10); // ++++++++++
      // echo '<br>';

      // echo strcspn('Hello PHP', 'P'); // 6
      // echo '<br>';

      // echo stripos('I started to learn PHP', 'php'); // 19
      // echo '<br>';

      // echo strstr('ergesovd380@gmail.com', 'sov'); // sovd380@gmail.com
      // echo '<br>';

      // echo stristr('ergesovd380@gmail.com', 'sOv'); // sovd380@gmail.com
      // echo '<br>';

      // echo strpbrk('This is a Simple text', 'mi'); // is is a Simple text
      // echo '<br>';

      // echo substr_count('Hello PHP. I started to learn PHP', 'PHP'); // 2
      // echo '<br>';

      // echo wordwrap('Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, rem. jvbkjbhjbkjbhjhbkjnbhjjk', 15, '<br>', true);
    

/* Функции по работе с словами внутри строки, поиски, убрат какое-то слово
      strpos() - искать что-то в текcте;
      str_replace() - изменить в тексте слова;
      chop() - убирает последнее слово;
      strrev() - переварачивает текст;
      str_ireplace — Регистронезависимый вариант функции str_replace();
      strtr — Преобразовывает заданные символы или заменяет подстроки
      substr — Возвращает подстроку (substr($string, $offset, $length = null) string - Входная строка, offset - позиция, length - длина)
      substr_replace — Заменяет часть строки
    */
      // $str = 'Hello PHP';
      // echo strpos($str, 'PHP').': искать в тексте (после , нужно писать что ишем. Мы ишем PHP)'.'<br>'; // 6

      // echo str_replace('PHP', 'JS', $str).': сначала пишем что будем менять, потом на что, потом сам текст)'.'<br>'; // Hello JS

      // echo chop($str, 'P').": убирает последнее слово или букву (нужно после ',' написать букву)".'<br>'; // Hello PH

      // echo strrev($str).': переварачивает текст'.'<br>'; // PHP olleH

      // echo str_ireplace('Js', 'php', 'I love js so much'); // I love php so much
      // echo '<br>';

      // echo strtr('Hillo Word', 'il', 'el'); // Hello Word
      // echo '<br>';
      // $trans = array("h" => "-", "hello" => "hi", "hi" => "hello");
      // echo strtr("hi all, I said hello", $trans); // hello all, I said hi
      // echo '<br>';

      // echo substr('user_1', 5); // 1
      // echo '<br>';

      // echo substr_replace('Hello PHP', 'Hello JS', 0); // Hello JS
      // echo '<br>';

  
/* Функции которые делят, разбивают
      chunk_split() - Разбивает строку на фрагменты по длине;
      sscanf — Разбирает строку в соответствии с заданным форматом;
    */
      // 
      // echo chunk_split($str, 2, '.').': Разбивает строку на фрагменты'.'<br>'; // chunk_split

      // $text = 'age:22 weight:70kg';
      // sscanf($text, 'age:%d weight:%dkg', $agescanf, $weightscanf);
      // echo 'Давлету '.$agescanf.' лет, он весит '.$weightscanf.'кг'; // Давлету 22 лет, он весит 70кг
      // echo '<br>';


/* Функции которые меняют формат строки (массив, число, объект)
      Explode() - строку переводит в массив, точно так же, как в JS;
      implode() - массив переводит в строку, точно так же как join('') в JS;
      join() - массив переводит в строку, точно так же как join('') в JS;
      str_split — Преобразовывает строку в массив;
      number_format - делает в формает number
      parse_str — Разбирает строку в переменные (Использовать эту функцию без параметра result крайне НЕ РЕКОМЕНДУЕТСЯ. Подобное использование объявлено УСТАРЕВШИМ);
    */
      // $str = 'Hello PHP';
      // print_r(explode(' ', $str)); // print_r (Array ( [0] => Hello [1] => PHP ))
      // $name = 'Dovlet, Muhammet, Begench, Shirin';
      // echo '<br>'.$name.'<br>';
      // print_r(explode(',', $name, 2)); // Сделал два значения в массиве (Если поставить -1, просто не возмет последнюю значению, и сделает обычный массив ['Dovlet', 'Muhammet', 'Begench'])
      // echo "<br>";

      // $arr = array('HTML', 'CSS', 'JS', 'TS');
      // echo implode(', ', $arr); // HTML, CSS, JS, TS
      // echo "<br>";

      // echo join(', ', $arr); // HTML, CSS, JS, TS
      // echo "<br>";

      // $str = "Hello Friend";
      // print_r(str_split($str)); // Array ( [0] => H [1] => e [2] => l [3] => l [4] => o [5] => [6] => F [7] => r [8] => i [9] => e [10] => n [11] => d )
      // echo '<br>';
      // print_r(str_split($str, 3)); //Array ( [0] => Hel [1] => lo [2] => Fri [3] => end ) (length - Максимальная длина фрагмента.)
      // echo '<br>';

      // $nf = '1000000'.'<br/>';
      // $nf1 = '1000000.152'.'<br/>';
      // $nf2 = '1999.9'.'<br/>';
      // echo number_format($nf); // 1,000,000
      // echo '<br>';
      // echo number_format($nf1, 2); // 1,000,000.15
      // echo '<br>';
      // echo number_format($nf2); // 2,000
      // echo '<br>';

      // parse_str("name=Davlet&age=22", $output); // name and age - String, output - result
      // echo "Имя: ".$output['name']."<br> Возраст: ".$output['age'].'<br>';


/* Функции которые ставят и удаляют слэшы и пробелы
      Addcslashes() - добавляет слэш, куда показешь;
      Addslashes() - добавляет слэш где есть " внутри текста;
      quotemeta — Возвращает модифицированную строку, в которой перед каждым символом из следующего списка: . \ + * ? [ ^ ] ( $ ), вставлен обратный слеш (\);
      stripcslashes — Удаляет экранирование символов, произведённое функцией addcslashes()
      stripslashes - Удаляет экранирование символов
      rtrim - убирает пробелы с права
      ltrim - убирает пробелы с лева
      trim - убирает проблелы с обоих сторон
    */
      // $str = 'Hello PHP';
      // echo addcslashes($str, 'P').': сначала ставим текст, потом где будем ставить слэш (в нашем случае везьде где есть P)'.'<br>'; // Hello \PH\P

      // echo addslashes('Hello "PHP"').': внутри текста показываем где будем ставить "\"'.'<br>'; // Hello \"PHP\"

      // $quot = "Dovlet, what are you doing? (I think he's stupid)";
      // echo quotemeta($quot);  // Dovlet, what are you doing\? \(I think he's stupid\)
      // echo '<br>';

      // echo stripcslashes("I\'m not bad boy"); // I'm not bad boy
      // echo '<br>';

      // echo stripslashes("I\'m not bad boy"); // I'm not bad boy
      // echo '<br>';

      // $tr = ' Trim ';
      // echo 'Использование'.$tr.', здесь без trim';
      // echo '<br>';
      // echo 'Использование'.trim($tr).', здесь с trim'; // trim
      // echo '<br>';
      // echo 'Использование'.ltrim($tr).', здесь с ltrim'; // ltrim
      // echo '<br>';
      // echo 'Использование'.rtrim($tr).', здесь с rtrim'; // rtrim
      // echo '<br>';


/* Функции которые меняют текст (слова) по ASCII
      Bin2hex() - меняет буквы по таблице ASCII (из CHAR в HEX);
      Chr() - меняет символы по таблице ASCII (из DEC, HEX, OCT в CHAR);
      ord - Показывает занчение только первой буквы с таблицы ACII - dec
    */
      // $str = 'Hello PHP';
      // echo bin2hex($str).': меняет буквы по таблице ASCII (из CHAR в HEX)'.'<br>'; // bin2hex
      // echo chr(80).': DEC буква P'.'<br>'; // P
      // echo chr(0x48).': HEX буква H'.'<br>'; // H
      // echo chr(0120).': OCT буква P'.'<br>'; // P
      // $or = 'Hello';
      // echo ord($or); // только H, 72 из char в dec


/* Функции которые меняют текст в формате UUENCODE, хеширует, изменить по алгоритму
      convert_uuencode() - Меняет строку в формате uuencode;
      convert_uudecode() - uuencode переводит на нормальную строку;

      crc32() - строку переводит на цифры с помощью алгоритма crc32;

      Crypt() - строку переводит хэщированную строку;

      html_entity_decode() - HTML ресурсы переводит, в читаемый код {
        HTML ресурсы: (После каждого ресурса, нужно поставить ;);
          &amp - & (амперсанд);
          &quot - " (двойные ковычки);
          &#039 - ' (одинарная ковичка);
          &lt - < (Меньше);
          &gt - > (Больше);
      }
      htmlentities() - обычный код, переводит в HTML ресурсы;
      htmlspecialchars_decode() - Одно и тоже с html_entity_decode();
      htmlspecialchars() - Одно и тоже с htmlentities();

      md5 - для шифрование строки (можно несколько раз зашифровать тектс, нап: md5(md5(md5($str))));
      md5_file - для зашифрование письмо внутри файла

      printf — Выводит отформатированную строку;
      sprintf — Возвращает отформатированную строку (Не печатает как print);

      sha1 — Возвращает SHA1-хеш строки (sha1_file() - Возвращает SHA1-хеш файла);

      soundex — Возвращает ключ soundex для строки;

      str_rot13 — Выполняет преобразование ROT13 над строкой;

      str_shuffle — Переставляет символы в строке случайным образом;
    */
      // $str = 'Hello PHP';
      // $uuencode = convert_uuencode($str);
      // echo $uuencode.': Меняет строку в формате uuencode'.'<br>';
      // $uudecode = convert_uudecode($uuencode); 
      // echo $uudecode.': uuencode переводит на нормальную строку'.'<br>'; // uudecode

      // echo crc32($str).': строку переводит на цифры с помощью алгоритма crc32'.'<br>'; // crc32

      // echo crypt($str).': строку переводит хэщированную строку'.'<br>'; // crypt

      // $hed = '&lt;a href=&quot;https://youtube.com&quot;&gt;YouTube&lt;/a&gt;';
      // echo html_entity_decode($hed);  // html_entity_decode
      // echo '<br>';
      // $he = '<a href="https://youtube.com">YouTube</a>';
      // echo htmlentities($he); // htmlentities
      // echo '<br>';
      // $hsd = 'this is so &lt;b&gt;nice&lt;/b&gt; code';
      // echo htmlspecialchars_decode($hsd); // htmlspecialchars_decode
      // echo '<br>';
      // $hs = 'this is so <b>nice</b> code';
      // echo htmlspecialchars($hs); // htmlspecialchars
      // echo "<br>";

      // $md = 'Hello PHP, зашифруй';
      // $file = './modules/Lesson9.txt';
      // echo md5($md); // md5
      // echo '<br>';
      // echo 'MD5-хеш файла ' . $file . ': ' . md5_file($file); // md5_file
      // echo '<br>';

      // printf('Его зовут %s, ему %u года', $output['name'], $output['age']);
      // echo '<br>';

      // echo sprintf('Его зовут %s, ему %u года', $output['name'], $output['age']);
      // echo '<br>';

      // $sha = 'Расшифруй';
      // echo sha1($sha); //sha1(string $string, bool $binary = false) Если необязательный аргумент binary имеет значение true, хеш возвращается в виде бинарной строки из 20 символов, иначе он будет возвращён в виде 40-символьного шестнадцатеричного числа.
      // echo '<br>';

      // echo soundex($output['name']); //D143
      // echo '<br>';

      // echo str_rot13('Hello PHP'); // Uryyb CUC
      // echo '<br>';

      // echo str_shuffle('abcdef'); // abfedc (каждый раз меняется)
      // echo '<br>';


/* Функции которые работают с буквами в строке
      lcfirst - только первую букву делает строчным
      strtolower - все буквы делает строчными
      ucfirst - только первую букву делает заглавным
      ucwords - каждом слове первую букву делает заглавным
      strtoupper - все буквы делает заглавными   
    */
      // $lcf = 'Hello From Lowercase';
      // echo lcfirst($lcf);  //lcfirst 
      // echo '<br>';
      // echo strtolower($lcf);
      // echo '<br>';
      // $ucf = 'hello from uppercase  ';
      // echo ucfirst($ucf); // ucfirst
      // echo '<br>';
      // echo ucwords($ucf);  // ucwords
      // echo '<br>';
      // echo strtoupper($ucf); // strtoupper
      // echo '<br>';


/* Функции которые работают с html тегами с строке 
      nl2br - Вставляет HTML-код <br> перед каждым \n (обязательно, должно быть внутри "", nl2br($nl, true) - для XML, false для HTML)
      strip_tags — Удаляет теги HTML и PHP из строки (strip_tags($string, $allowed_tags = null) string - Входная строка, allowed_tags - необязательный параметр может быть использован для указания тегов, которые не нужно удалять)
    */
      // $nl = "Смотри как работает \n на деле";
      // echo nl2br($nl); // nl2br
      // echo '<br>';

      // echo strip_tags('Hello <br> <strong>PHP</strong>', '<strong>');
      // echo '<br>';


/* Функции которые возвращают язык, локаль, строку в коде, файл, 
      nl_langinfo — Возвращает информацию о языке и локали (https://www.php.net/manual/ru/function.nl-langinfo.php)
    */


/* Функции которые сравнивают
      similar_text — Вычисляет степень похожести двух строк;
      strcasecmp — Бинарно-безопасное сравнение строк без учёта регистра;
      strcmp — Бинарно-безопасное сравнение строк;
      substr_compare — Бинарно-безопасное сравнение 2 строк со смещением, с учётом или без учёта регистра ( 
        substr_compare(
          $haystack - Основная сравниваемая строка.
          $needle - Следующая сравниваемая строка.
          $offset - Стартовая позиция сравнения. Если отрицательна, то обозначает смещение с конца строки.
          $length = null - Длина сравнения. По умолчанию используется максимальная из длин needle и haystack минус offset
          $case_insensitive = false - Если case_insensitive имеет значение true, сравнение выполняется без учёта регистра
        )
      )
    */
      // echo similar_text('Hello PHP', 'Hello JavaScript'); // 6
      // echo '<br>'; 

      // similar_text('Hello PHP', 'Hello JavaScript', $procent); // При передаче по ссылке третьего аргумента, similar_text() присваивает ему степень похожести двух строк в процентах, деля результат similar_text() на среднее число длин заданных строк 100 раз.
      // echo $procent; // 48
      // echo '<br>';

      // echo strcasecmp('HEllo PHP', 'Hello Php'); // 0 (Возвращает -1, если string1 меньше string2, 1, если string1 больше string2, и 0, если строки равны.)
      // echo '<br>';

      // echo strcmp('Hello Php', 'Hello Php'); // 0 (Возвращает -1, если string1 меньше string2, 1, если string1 больше string2, и 0, если строки равны.)
      // echo '<br>';

      // echo substr_compare("abcde", "BC", 1, 2, true); // 0 Возвращает -1, если string1 меньше string2, 1, если string1 больше string2, и 0, если строки равны
      // echo '<br>';


// Lesson 7 fprintf и fopen
      // $text = 'PHP';
      // $number = '7';
      // $file = fopen('./modules/Lesson7.txt', 'w');   // fopen - означает открой этот файл, w (write) - напишы туда
      // fprintf($file, 'Я начал учить %s, это урок № %u', $text, $number); // Получается, я открыл этот файл и написал туда то что в переменнах
      //   /*https://www.php.net/manual/ru/function.sprintf.php - Здесь есть все спецификаторы, и как ими пользоваться
      //     CHAR - символ из таблицы ASCII;
      //     HEX - Шестнадцатеричное представление;
      //     OCT - Восьмеричное представление;
      //     DEC - как id в этом таблице;  
      //   */


/* Lesson 13
    is_int() - Проверяет, представляет ли собой переменная целое число
    is_float — Проверяет, представляет ли собой переменная число с плавающей точкой
    is_numeric — Проверяет, содержит ли переменная число или числовую строку
    */
    //   $num = 3;
    //   if(is_int($num)) echo "$num is integer <br>";
    //   $num = '3';
    //   if(is_int($num)) {
    //     echo "$num is integer (string) <br>";
    //   } else {
    //     echo "$num isn't integer (string) <br>";
    //   };
    //   $num = 3.69;
    //   if(is_int($num)) {
    //     echo "$num is integer (float) <br>";
    //   } else {
    //     echo "$num isn't integer (float) <br>";
    //   };

    //   $float = 3.69;
    //   if(is_float($float)) echo "$float is float <br>";
    //   $float = '3.69';
    //   if(is_float($float)) {
    //     echo "$float is float <br>";
    //   } else {
    //     echo "$float isn't float (string) <br>";
    //   };
    //   $float = 3;
    //   if(is_float($float)) {
    //     echo "$float is float <br>";
    //   } else {
    //     echo "$float isn't float (integer) <br>";
    //   };

    //   $numeric = 3;
    //   if(is_numeric($numeric)) echo "$numeric is numeric (integer) <br>";
    //   $numeric = 3.69;
    //   if(is_numeric($numeric)) echo "$numeric is numeric (float) <br>";
    //   $numeric = '3';
    //   if(is_numeric($numeric)) echo "$numeric is numeric (string) <br>";

    // // чтобы менять тип можно перед переменным поставить тип. Например:
    //   $x = 798.987;
    //   echo gettype($x).'<br>';
    //   $x = (int)798.987;
    //   echo gettype($x).'<br>';
    //   $x = (int)'798.987';
    //   echo gettype($x).'<br>';


## NUMBERS
/* Lesson 14 
    abs — Возвращает абсолютную величину (делаеют положительным)
    acos — Вычисляет арккосинус
    acosh — Вычисляет гиперболический арккосинус
    asin — Вычисляет арксинус
    asinh — Вычисляет гиперболический арксинус
    atan — Вычисляет арктангенс
    atan2 — Вычисляет арктангенс двух переменных
    atanh — Вычисляет гиперболический арктангенс
    base_convert — Преобразовывает числа между произвольными системами счисления
    bindec — Возвращает десятичный эквивалент двоичного числа binary_string (Параметр принимает только строки. Данные других типов приведут к непредсказуемому результату.)
    ceil — Округляет дробное число в бо́льшую сторону
    cos — Вычисляет косинус
    cosh — Вычисляет гиперболический косинус
    decbin — Переводит число из десятичной системы счисления в двоичную (наоборот bindec)
    dechex — Переводит число из десятичной системы счисления в шестнадцатеричную (hex для css)
    decoct — Переводит число из десятичной системы счисления в восьмеричную
    deg2rad — Преобразовывает значение из градусов в радианы
    exp — Вычисляет степень числа e
    expm1 — Возвращает результат exp($num) - 1, вычисленный так, чтобы он был точным, даже если значение числа близко к нулю
    fdiv — Делит одно число на другое по правилам стандарта IEEE 754
    floor — Округляет дробное число в меньшую сторону
    fmod — Возвращает дробный остаток от деления по модулю (fmod(float $num1, float $num2): float  num1 = i * num2 + r, где i)
    hexdec — Переводит число из шестнадцатеричной системы счисления в десятичную (наоборот dechex)
    hypot — Рассчитывает длину гипотенузы прямоугольного треугольника (Функция hypot() возвращает длину гипотенузы прямоугольного треугольника с длинами сторон x и y или расстояние точки (x, y) до начала координат Эквивалентно вызову sqrt($x * $x + $y * $y))
    intdiv — Делит два числа без остатка
    is_finite — Проверяет, конечно ли число с плавающей точкой (Функция возвращает true, если значение num не нечисло NAN, не положительная бесконечность INF, не отрицательная бесконечность -INF, иначе false)
    is_infinite — Проверяет, бесконечно ли число с плавающей точкой (Функция проверяет, относится ли значение параметра num к положительной INF или отрицательной бесконечности -INF и возвращает результат)
    is_nan — Проверяет, представляет ли собой число с плавающей точкой нечисло
    log10 — Вычисляет десятичный логарифм
    log1p — Функция log1p() возвращает результат log(1 + num), вычисленный так, чтобы он был точным, даже если значение числа num близко к нулю. Из-за недостатка точности функция log() иногда возвращает результат log(1).
    log — Вычисляет натуральный логарифм
    max — Возвращает наибольшее значение
    min — Находит наименьшее значение
    octdec — Переводит число из восьмеричной системы счисления в десятичную (наоборот decoct)
    pi — Возвращает число Пи (Константа M_PI даёт идентичный результат)
    pow — Возводит в степень
    rad2deg — Преобразовывает значение из радианов в градусы (наоборот deg2rad)
    round — Округляет число с плавающей точкой (float)
    sin — Вычисляет синус
    sinh — Вычисляет гиперболический синус
    sqrt — Извлекает квадратный корень
    tan — Вычисляет тангенс
    tanh — Вычисляет гиперболический тангенс
  */
      // echo abs(-55)." abs <br>";

      // echo acos(0.5)." acos <br>";

      // echo acosh(55)." acosh <br>";

      // echo asin(0.5)." asin <br>";

      // echo asinh(55)." asinh <br>";

      // $atan1 = 55;
      // $atan2 = 0.5;
      // echo atan2($atan1, $atan2)." atan2 <br>";

      // echo atanh(0.5)." atanh <br>";

      // $base_con = 'a37334';
      // echo base_convert($base_con, 16, 2)." base_convert <br>";

      // echo bindec('110011')." bindec <br>";

      // echo ceil(4.3)." ceil <br>";

      // echo cos(55)." cos <br>";

      // echo cosh(55)." cosh <br>";

      // echo decbin(51)." decbin <br>";
      
      // echo dechex(110011)." dechex <br>";

      // echo decoct(110011)." decoct <br>";

      // echo deg2rad (90)." deg2rad  <br>";

      // echo exp(5.7) . " exp <br>";

      // echo expm1(5.7) . " expm1 <br>";

      // echo fdiv(4.3, 2) . " fdiv <br>";

      // echo floor(4.3)." floor <br>";

      // echo fmod(5.7, 1.3)." fmod <br>"; // Значение переменной $r равно 0.5, потому что 4 * 1.3 + 0.5 = 5.7

      // echo hexdec('1adbb')." hexdec <br>";

      // echo intdiv(4.3, 2) . " intdiv <br>";

      // echo is_finite(1) . " is_finite <br>";

      // echo is_infinite(1.99e4999) . " is_infinite <br>";

      // echo log10(15) . " log10 <br>";

      // echo log1p(15) . " log1p <br>";

      // echo log(15) . " log <br>";

      // echo max(1, 3, 5, 6, 7) . " max <br>";

      // echo min(1, 3, 5, 6, 7) . " min <br>";

      // echo octdec(326673) . " octdec <br>";

      // echo pi() . " pi <br>";

      // echo pow(2, 4) . " pow <br>";

      // echo rad2deg(1.5707963267949) . " rad2deg <br>";

      // echo round(4.3) . " round <br>";

      // echo sin(60) . " sin <br>";

      // echo sinh(60) . " sinh <br>";

      // echo sqrt(25) . " sqrt <br>";

      // echo tan(60) . " tan <br>";

      // echo tanh(60) . " tanh <br>";
      

## OPERATORS
/* Lesson 20 Операторы 
   xor - оператор, который говорит, что оба сравниваемых элемента не должны быть true, или false
   ??/?: - Оперторы if/else
   .= - опертор присваивание, с имеющимся значением
*/
      // $a = 20;
      // $b = 50;
      // if($a == 20 xor $b == 50) {
      //   echo 'Cool';
      // } else {
      //   echo 'Оба true'.'<br>';
      // }
      // if($a == 25 xor $b == 51) {
      //   echo 'Cool';
      // } else {
      //   echo 'Оба false'.'<br>';
      // }
      // if($a == 23 xor $b == 50) echo 'Один из них false, один true'.'<br>';

      // echo @$c ? $c : 'Нет такой переменной'.'<br>';
      // $c = 'Переменная C';
      // echo $c ?? 'Нет такой переменной';
      // echo '<br>';

      // $x = 'Hello';
      // $y = 'PHP';
      // $x .= $y;
      // echo $x;
      // echo '<br>';

      // echo $_GET['name'] ?? 'Нет Get запроса'; // Если в ссылку добавить ?name=Dovlet Ergeshov, вернет Dovlet Ergeshov


/* Lesson 22
Switch */
      // $mycolor = 'black';
      // switch($mycolor) {
      //   case "black":
      //     echo "It's black";
      //   break;
      //   case "orange":
      //     echo "It's orange";
      //   break;
      //   case "white":
      //     echo "It's white";
      //   break;
      //   default:
      //      echo "Not color";
      // }


/* Lesson 24
Foreach */
      // $languages = array(
      //   "PHP" => "server",
      //   "HTML" => "client",
      //   "CSS" => "client",
      //   "Javascript" => "client",
      //   "Node JS" => "server",
      //   "React JS" => "client",
      //   "Angular JS" => "client"
      // );
      // foreach($languages as $key => $item) {
      //   echo "$key = $item <br>";
      // }


## ARRAY
/* Lesson 27
Array functions 
  array_change_key_case — Меняет регистр всех ключей в массиве (Возвращает массив array, все ключи которого преобразованы в нижний или верхний регистр. Числовые ключи останутся нетронутыми.)
  array_chunk - Разбивает массив на части (т.е. создает несколько массивов внутри массива, с этими данными)
  array_column — Возвращает массив из значений одного столбца входного массива
  array_combine — Создаёт новый массив, используя один массив в качестве ключей, а другой для его значений
  array_diff - Сравнивает массив, переданный в параметр array, с одним или несколькими другими массивами и возвращает значения из массива array, которые отсутствуют во всех других массивах
  array_diff_assoc - В этой функции, в отличие от функции array_diff(), ключи массива также участвуют в сравнении
  array_diff_key - Сравнивает ключи array с ключами arrays и возвращает разницу. Эта функция схожа с array_diff() за исключением того, что сравниваются ключи, а не значения
  array_diff_uassoc - Сравнивает значения массива array cо значениями массивов arrays и возвращает разницу. В этой функции, в отличие от функции array_diff(), ключи массива также участвуют в сравнении. В отличие от функции array_diff_assoc(), в этой функции ключи сравнивает пользовательская callback-функция, а не встроенная
*/ 
      echo "array_change_key_case <br>";
      $age = [
        "Dovlet" => 22,
        "Muhammet" => 19,
        "Shirin" => 23,
        "Begench" => 13
      ];
      print_r(array_change_key_case($age, CASE_UPPER)); echo "<br>"; // array_change_key_case(array, case) (array - Обрабатываемый массив, case - Либо CASE_UPPER, либо CASE_LOWER (используется по умолчанию))

      echo "array_chunk <br>";
      $input_array = array('a', 'b', 'c', 'd', 'e');
      echo "<pre>"; print_r(array_chunk($input_array, 2)); echo "</pre> <br>";   // array_chunk(array, length, preserve_keys = false) (array - массив который нужно разбить, length - размер каждой части)
      echo "<pre>"; print_r(array_chunk($input_array, 2, true)); echo "</pre>";     // perserve_keys - если true будут сохранены оригинальные ключи элементов массива

      echo "array_column <br>";
      $records = array(
        array(
            'id' => 2135,
            'first_name' => 'John',
            'last_name' => 'Doe',
        ),
        array(
            'id' => 3245,
            'first_name' => 'Sally',
            'last_name' => 'Smith',
        ),
        array(
            'id' => 5342,
            'first_name' => 'Jane',
            'last_name' => 'Jones',
        ),
        array(
            'id' => 5623,
            'first_name' => 'Peter',
            'last_name' => 'Doe',
        )
      );
      $first_names = array_column($records, 'first_name');
      print_r($first_names); echo "<br>";  // array_column(array, $column_key, $index_key = null) (array - многомерный массив или объект, из которого будет извлекаться значения, column_key - ключ столбца значение которого нужно вернуть)
      $last_names = array_column($records, 'last_name', 'id');
      print_r($last_names); echo "<br>";  // index_key - столбец,значения которого будет ключами или индексами возвращаемого массива

      echo "array_combine <br>";
      $a = array('green', 'red', 'yellow');           // array(keys) - массив в качетве ключей 
      $b = array('avocado', 'apple', 'banana');       // array(values) - массив в качетве значений
      $c = array_combine($a, $b);                     // array_combine(array(keys), array(values));
      print_r($c); echo "<br>";

      echo "array_count_values <br>";
      $array = array(1, "hello", 1, "world", "hello");
      print_r(array_count_values($array)); echo "<br>";

      echo "array_diff <br>";
      $array1 = array("a" => "green", "blue", "red");        // Сравнивает массивы и возвращает те значение, которые есть в этом массиве, а в остальных нет
      $array2 = array("b" => "green", "yellow", "red");
      $array3 = array("b" => "green", "yellow", "red", "black");
      $result = array_diff($array1, $array2, $array3);
      print_r($result); echo "<br>";

      echo "array_diff_assoc <br>";
      $result_assoc = array_diff_assoc($array1, $array2, $array3);
      print_r($result_assoc); echo "<br>";                  // Сравнивает массивы и возвращает те значение (с ключами), которые есть в этом массиве, а в остальных нет

      echo "array_diff_key <br>";
      $result_key = array_diff_key($array1, $array2, $array3);
      print_r($result_key); echo "<br>";                      // Сравнивает массивы и возвращает те ключи, которые есть в этом массиве, а в остальных нет

      // echo "array_diff_uassoc <br>";
      // function key_compare_func($a, $b) {
      //   if($a === $b) return 0;
      //   return $a <=> $b;     // Функция сравнения должна возвращать целое, которое меньше, равно или больше нуля, если первый аргумент является соответственно меньшим, равным или большим, чем второй
      // }
      // $result_uassoc = array_diff_uassoc($array1, $array2, $array3, "key_compare_func");
      // print_r($result_uassoc); echo "<br>";         // Сравнивает массивы, с помощью нештатной функции, и возвращает те значение (с ключами), которые есть в этом массиве, а в остальных нет

      echo "array_diff_ukey <br>";
      function key_compare_func($key1, $key2)
      {
        return $key1 <=> $key2;
      }
      
      $array1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4);
      $array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8);
      
      var_dump(array_diff_ukey($array1, $array2, 'key_compare_func'));
    ?>
  </div>
</div>

<script src="./js/bootstrap.bundle.min.js"></script>
</body>
</html>