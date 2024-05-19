<!DOCTYPE html>
<html lang='ru'>
<head>
<title>Простейший PHP-сценарий</title>
<meta charset='utf-8'>
</head>
<body>
  <h1>PHP 7</h1>
  <h2>Дмитрий Катеров / Игорь Семдянов</h2>
  <div>
    <?php
## ХАРАКТЕРИСТИКИ ЯЗЫКА PHP
/* Использование PHP в Web 
Стр 120 - 121 */
    /*
      // Вычисляем текущую дату в формате "день.месяц год"
      $dat = date("d.m y");
      // Вычисляем текущее время
      $tm = date("h:i:s");
      # Выводим их
      echo "Текущая дата: $dat года<br />\n";
      echo "Текущее время: $tm<br />\n";
      # Выводим цифры
      echo "А вот квадраты и кубы первых 5 натуральных чисел:<br />\n";
      echo "<ul>\n";
        for ($i = 1; $i <= 5; $i++) {
        echo "<li>$i в квадрате = " . ($i * $i);
        echo ", $i в кубе = " . ($i * $i * $i) . "</li>\n";
      echo "</ul>";
    */


## ПЕРЕМЕННЫЕ, КОНСТАНТЫ ТИПЫ ДАННЫХ
/*integer(целое число)
Стр 128*/
    /*
      echo PHP_INT_MAX; // 9223372036854775807 (32-битном 2147483647)
    */

    
/*double(вещественное число)
Стр 129*/
    /*
      // 346.1256 -> 3.461256*10^2 -> 3.461256e+2
      // 0.00012 -> 1.2*10^4 -> 1.2e-4
    */


/*string(строка текста)
Стр 130*/
    /*
      // Длина строки ограничена 2 Гбайт
      // Каждый PHP-скрипт ограничен в объеме 128 Мбайт
    */


/*array (ассоциативный массив)
Стр 130 - 131*/
    /*
      $a = array(
        0 => 'Нулевой элемент',
        'name' => 'James',
        'surname' => 'Bond'
      );
      print_r($a);
      echo '<br>';

      echo $a['surname'];   // Выдает из массива
      echo '<br>';

      echo $a[1] = 'Первый элемент';    // Создает в массиве ключ с таким значением
      echo '<br>';

      echo $a['name'] = 'Mike';   // Меняет значение
    */
      

/*Действие с переменными
Стр 132 - 139*/
    /*
      // isset() - Проверяет существует ли переменная
      $a = 'Hello PHP';
      if(isset($a)) {
        echo 'Everything ok';
      }
      echo '<br>';

      // unset() - Уничтажает переменную (Можно применить еще в массивах и объектах. Нап: unset($array[angel]) Удалить элемент с ключом angel)
      unset($a);
      if(isset($a)) {
        echo 'Everything ok';
      } else {
        echo 'Переменная не существует';
      }
      echo '<br>';

      // Определение типа переменной
      $a = 'Hello PHP';
      is_int($a);   // Возвращает true, если $a - целое число
      is_double($a);   // Возвращает true, если $a - действительное число
      // is_infinite($a);   // Возвращает true, если $a - бесконечное действительное число INF
      // is_nan($a);   // Возвращает true, если $a - не допустимое числовое значение NAN
      is_string($a);   // Возвращает true, если $a - строка
      is_numeric($a);   // Возвращает true, если $a является либо числом, либо строковом представлением число. Рекомендуется использовать вместо is_intiger() и is_double()
      is_bool($a);   // Возвращает true, если $a имеет значение true или false
      is_scalar($a);   // Возвращает true, если $a - один из перечисленных выше типов. Т.е. если это простой тип
      is_null($a);   // Возвращает true, если $a - NULL (NULL - это не скалярный тип)
      is_array($a);   // Возвращает true, если $a - массив
      is_object($a);   // Возвращает true, если $a содержит ссылку к объекту
      gettype($a);   // Возвращает тип переменной

      // Установить типа переменной
      // settype($var, $type) - Пытается привести тип переменной var к типу type (type - все возвращаемые типы gettype(), кроме bool)
      // Если var нечисловая строка, type - 'integer', возвращается false
      $var = '132';
      echo gettype($var);
      echo '<br>';
      settype($var, 'int');
      echo gettype($var);
      echo '<br>';

      // Кроме settype(), есть еще:
      floatval($a); // преобразует к вещественному числу
      strval($a); // преобразует в строку
      intval($a); // преобразует в целое число

      // Кроме указанных, можно еще с указанием круглых скобках перед переменной:
      $value = 3.14;
      echo (int)$value." (".gettype((int)$value).")";
      echo '<br>';
      echo (string)$value." (".gettype((string)$value).")";
      echo '<br>';
      echo (bool)$value." (".gettype((bool)$value).")";
      echo '<br>';
      echo (float)$value." (".gettype((float)$value).")";
      echo '<br>';

      // Ссылочные переменные 1) Жесткие; 2) Символические; 3) Ссылки на объект
      // Жесткие ссылки
      $first = "It's first";
      $second =& $first; // оператор &, после =, это означает жесткую ссылку (Их можно еще в массивах использовать)
      echo $first.' '.$second;
      echo '<br>';

      $second = 'We change second';
      echo $first.' '.$second;
      echo '<br>';
      // unset() - Не удаляет жесткие, он просто разрывает между ними связь

      // Символические ссылки
      $color = 'Красный';
      $blue = 'Синий';
      $red = 'color';
      echo $$red;   // Два оператора $$, смотрит не название переменной, а на ее значение
      echo '<br>';

      // Ссылки на объекты
      class AgentSmith {}   // Обявляем класс
      $obj = new AgentSmith();  // Создаем новый класс
      $obj -> first = 'First item';   // Присваеваем значение
      $link = $obj;   // Копируем ссылку на объект
      $link -> first = 'Second item';   // Меняем значение
      echo "obg first: {$obj->first}, link first: {$link->first}";
    */


/*Константы
Стр 141 - 144*/
    /*
      // В PHP существует несколько предопределенных констант
      echo __FILE__ . '<br>'; // Имя файла в котором расположен запущенный код
      echo __LINE__ . '<br>'; // Текущий номер строки
      echo __FUNCTION__ . '<br>'; // Имя текущей функции 
      echo __CLASS__ . '<br>'; // Имя текущего класса
      echo PHP_VERSION . '<br>'; // Версия интерпретатора PHP
      echo PHP_OS . '<br>'; // Имя операционной системы
      echo PHP_EOL . '<br>'; // Корректный символ конца строки (End Of Line) для платформы (\n для Linux, \r\n для Windows, \n\r для MacOs)

      // Оперделение констант 
      // define() - новый контанты. void define(string $name, string $value, bool $case_sen=true);
      // name - название константы, value - значение константы, case_sen - если равен true, то в дальнейшем в программе регстр букв константы учитывается (default - true)
      define('con', 'Тестовая константа', true);
      echo coN . '<br>';

      // Проверка на существовение константы
      echo defined('con') . '<br>';

      // Как получить константу
      echo constant('cOn');
    */


/*Отладочные функции
Стр 144*/
    /*
      $a = array('a'=>'Apple', 'b'=>'Banana', 'c'=>array('x', 'y', 'z'));
      echo "<pre>"; print_r($a); echo "</pre>";
      echo '<br>';

      echo 'var_export: Обратите внимание на две детали. Во-первых, функция корректно обрабатывает апострофы внутры значений переменных - она добавляет обратный слеш перед ними, чтобы результат работы оказался корректным кодом на PHP. Во-вторых, для объектов функция создает описание всех свойств класса, в том числе и закрытых (private)';
      class SomeClass
      {
        private $x = 100;
      }
      $b = array(1, array("Programms hacking programs. Why&", "д'Артаньян'"));
      echo "<pre>"; var_export($b); echo "</pre>";
      $obj = new SomeClass();
      echo "<pre>"; var_export($obj); echo "</pre>";
    */


## ВЫРАЖНИЯ И ОПЕРАЦИИ PHP
/* Строка в ковычках
Стр 149*/
    /*
      $text = "Some text";
      echo "Hello $text world <br>";
      echo "Hello \$text world";
    */


/* Вызов внешней программы
Стр 151*/
    /*
      $st = `command.com/c dir`;
      echo "<pre>$st</pre>";
    */


/*Оператор <=>
Стр 162*/
    /*
      // Оператор <=> сравнивает два числа $a и $b, возвращая 0 - если числа равны
      // -1 - если $a меньше $b
      // 1 - если $a больше $b
      function cmp($a, $b) {
        if($a === $b) return 0;
        if($a < $b) return -1;
        if($a > $b) return 1;
      }
      $arr = array(3, 1, 7, 6, 9, 4);
      usort($arr, 'cmp');
      print_r($arr);
      echo '<br>';

      // Функция usort() - в будущем. Облегченный вариант этой функции
      $arr = array(3, 1, 7, 6, 9, 4);
      usort($arr, function($a, $b) { return $a <=> $b; });
      print_r($arr);
    */
    ?>

<!-- Особенности оператора @
Стр 164 -->
    <!-- Отключить навязчивого предупреждения -->
    <!-- <form action="">
      <input type="submit" name="doGo" value="Click!">
    </form> -->
    <?php
    // В массиве $_REQUEST всегда содержатся пришедшие из формы данные
    // if($_REQUEST['doGo']) echo 'Вы нажали кнопку'; // Ошибка
    // if(@$_REQUEST['doGo']) echo 'Вы нажали кнопку'; // Правильный вариант
    ?>

<!-- РАБОТА С ДАННЫМИ ФОРМЫ -->
<!-- Блокировка сервера
Стр 172 -->
    <?php if(!isset($_REQUEST['doGo'])) {?>
      <!-- <form action="">
        <input type="text" name="login" placeholder="Login" value=""><br>
        <input type="text" name="password" placeholder="Password" value=""><br>
        <input type="submit" name="doGo" value="Нажмите кнопку"><br>
      </form> -->
    <?php } else {
      // if($_REQUEST['login'] == "root" && $_REQUEST['password'] == "Turkmenistan@022") {
      //   echo "Доступ открыт для пользователя {$_REQUEST['login']}";
      //   // Команда блокирования рабочей станции (работает в NT-системах)
      //   system("rundll32.exe user32.dll,LockWorkStation");
      // } else {
      //   echo "Доступ закрыт для пользователя {$_REQUEST['login']}";
      // }
    }?>


<!-- Вывод IP адреса и браузер пользователя
Стр 173 -->
    <!-- <p><?= $_SERVER['REMOTE_ADDR'] ?></p>
    <p><?= $_SERVER['HTTP_USER_AGENT'] ?></p> -->


<!-- Трансляция Cookie
Стр 174 -->
    <?php
      // В начале счетчик равен 0
      $count = 0;
      // Если cookie что-то есть, берем счетчик оттуда
      if(isset($_COOKIE['count'])) $count = $_COOKIE['count'];
      $count++;
      // Записываем в cookie новое значение счетчика
      setcookie('count', $count, 0x7FFFFFFF, '/');
      // Выводим счетчик
      echo "Cookie count - $count <br>";
    ?>


<!-- Обработка списков
Стр 174 -->
    <!-- <form action="<?=$_SERVER['SCRIPT_NAME']?>" method="post">
      <select name="Sel[]" multiple onfocus="SelectValue()">
        <option selected>First</option>
        <option>Second</option>
        <option>Third</option>
      </select> <br>
      <input type="submit" value="Push!">
    </form> -->
    <?php 
      // if(isset($_REQUEST['Sel'])) {
      //   print_r($_REQUEST['Sel']);
      // } else {
      //   echo 'Please choose';
      // }
    ?>


<!-- Обработка массивов
Стр 175 -->
    <!-- <form action="">
      Имя: <input type="text" name="Date[name]"><br>
      Адрес: <input type="text" name="Date[addr]"><br>
      Город: <br>
      <input type="radio" name="Date[city]" value="Moscow">Москва <br>
      <input type="radio" name="Date[city]" value="Peter">Санкт-Петербург <br>
      <input type="radio" name="Date[city]" value="Ashgabat">Ашхабад <br>
      <input type="submit" name="doGo" value="Нажмите кнопку">
    </form> -->
    <?php
      // if(@$_REQUEST['Date']) {
      //   echo "Имя: {$_REQUEST['Date']['name']} <br> Адрес: {$_REQUEST['Date']['addr']} <br> Город: {$_REQUEST['Date']['city']}";
      // }
    ?>


<!-- Диагностика
Стр 176 -->
    <!-- <pre>
      <?php 
        print_r($GLOBALS); // ВСе глобальные переменные
      ?>
    </pre> -->


<!-- Особенности флажков checkbox
Стр 177 -->
    <?php 
      // if(isset($_REQUEST['doGo'])) {
      //   foreach($_REQUEST['known'] as $k => $v) {
      //     if($v) echo "Вы знаете язык $k! <br>";
      //     else echo "Вы не знаете язык $k! <br>";
      //   }
      // }
    ?>
    <!-- <form action="<?=$_SERVER['SCRIPT_NAME']?>" method="post">
      Какие языки программирование вы знаете? <br>
      <input type="hidden" name="known[PHP]" value="0">
      <input type="checkbox" name="known[PHP]" value="1"> PHP <br>
      <input type="hidden" name="known[PERL]" value="0">
      <input type="checkbox" name="known[PERL]" value="1"> PERL <br>
      <input type="submit" name="doGo" value="Go!">
    </form> -->


<!-- КОНСТРУКЦИЯ ЯЗЫКА -->
<!-- Цикл с предусловием while
Стр 182 -->
    <?php 
      // $count = 0;
      // $item = 2;
      // while($count <= 31):
      //   echo "$item <br>";
      //   $item *= 2;
      //   $count++;
      // endwhile;
    ?>


<!-- Нетрадиционное использование do/while и break
Стр 185 -->
    <?php
      // if(isset($_REQUEST['doSubmit'])) do {
      //   if($_REQUEST['name'] == 'Dovlet'):
      //     echo "Name ".$_REQUEST['name']; break;  // break - выходит из цикла do/while
      //   endif;
      //   if($_REQUEST['age'] == 22):
      //     echo "Age ".$_REQUEST['age'];
      //   endif;

      //   exit();
      // } while (0);
    ?>
    <!-- <form action="<?=$_SERVER['SCRIPT_NAME']?>">
      <input type="text" name="name">
      <input type="number" name="age">
      <input type="submit" name="doSubmit">
    </form> -->

  
<!-- Цикл foreach (Вывод всех переменных окружения)
Стр 187 -->
    <?php
      // foreach($_SERVER as $k => $i) {
      //   echo "<b>$k</b> => <tt>$i</tt> <br>";
      // }
    ?>


<!-- АССОЦИАТИВНЫЕ МАССИВЫ -->
<!-- Конструкция list()
Стр 196 -->
    <?php 
      // Например у нас есть массив fio[]
      // $fio = array ('Ergeshov', 'Dovlet', 22);
      // // Мы хотим присвоить значения массива в соответствующие переменные
      // list($surname, $name, $age) = $fio;
      // echo $surname . '<br>';

      // // Если мы хотим только 2 и 3 элемент массива, то просто пропускаем первый:
      // list(, $name1, $age1) = $fio;
      // echo "$name1 $age";
    ?>

  
<!-- Слияние массивов с помощью оператора +
Стр 200 -->
    <?php
      // $good = ['age' => 22, 'weight' => 70];
      // $bad = ['name' => 'Dovlet', 'surname' => 'Ergeshov'];
      // $all = $good + $bad;
      // var_dump($all); // 22, 70, Dovlet, Ergeshov
      // echo '<br>';

      // $a = array('one','two');
      // $b=array('three','four','five');
      // print_r ($a + $b); // one, two, five
      // // При конкатенации массивов с некоторыми одинаковомы элементами (т.е. с одинаковыми ключами) в результирующем массиве останится только один элемент с таким же ключом - тот который был первом массиве, и на том же самом месте
    ?>


<!-- Перебор ассоциативного массива 
Стр 202
    reset() - просто устанавливает этот элемент на первую позицию (т.е. возвращает первый элемент или false если пуст);
    key() - возвращает ключ текущего элемента;
    next() - перемещает текущий элемент на одну позицию вперед (или false если такого элемента нет);
    end() - устанавливает позицию текущего элемента в конец массива (или false если пуст);
    prev() - передвигает элемент на одну позицию назад (т.е. возвращает полседний элемент или false если такого элемента нет);
    currunt() - возвращает значение текущего элемента
    each() - возвращает ключ и значение текущего элемента в виде списочного массива
 -->
    <?php
      // $birth = [
      //   "Thomas Anderson" => "1962-03-11",
      //   "Keanu Reeves" => "1962-09-02"
      // ];
      // for(reset($birth); ($k = key($birth)); next($birth)) {  // Начиная с начала (пользоваться таким вариантом крайне не рекомендуется, т.к. если ключ массива 0, то цикл оборвется)
      //   echo "$k родился: {$birth[$k]} <br>";
      // }

      // echo "С конца вперед <br>";
      // for(end($birth); ($k = key($birth)); prev($birth)) { // Начиная с конца (пользоваться таким вариантом крайне не рекомендуется, т.к. если ключ массива 0, то цикл оборвется)
      //   echo "$k родился: {$birth[$k]} <br>";
      // }

      // echo "Старый способ перебора <br>";
      // for(reset($birth); list($k, $v) = @each($birth);) {   // Старый способ (PHP ругается что функция each устарела)
      //   echo "$k родился: $v <br>";
      // }

      // echo "С помощью цикла foreach <br>";
      // foreach($birth as $k => $v) echo "$k родился: $v <br>";     // С помощью foreach (Рекомендуется везде использовать именно этот способ)
    ?>


<!-- Ссылочный синтаксис foreach
Стп 204 -->
    <?php 
      // $arr = [1, 2, 3, 4, 5];
      // foreach($arr as $v) $v++;   // foreach каждый раз делает копию массива, поэтому исходный массив он не меняет
      // print_r($arr); // 1, 2, 3, 4, 5
      // echo '<br>';

      // foreach($arr as &$k) $k++;    // Здесь мы с помощью оператора &, сделали жесткую ссылку, который менят значение
      // print_r($arr); // 2, 3, 4, 5, 6
      // echo "<br> $k"; // переменную k лучше потом не использовать, так как он все еще жестко привязан последному элементу массива
    ?>


<!-- Списки и строки
Стр 205
    explode() - из строки делает массив
    implode() - из массива делает строку
    join() - точно так же как implode
-->
    <?php 
      // $str = "3597219361 | Thomas Anderson | 1962-03-11 | Текст, содержащий (|) !";
      // $arr = explode('|', $str, 4);   // 1 - с какого элемента разделить, 2 - строка, 3 - Лимит
      // print_r($arr);
      // echo '<br>';

      // // $newStr = implode(' | ', $arr);
      // $newStr = join(' | ', $arr);
      // print_r($newStr);
    ?>


<!-- Сериализвция
Стр 206 
    serialize() - для серилизации элемента
    unserialize() - распокует серилизованный элемент
-->
    <?php ## Серилизация - полезно для хранения или передачи значений PHP между скриптами без потери их типа и структуры.
      // $arr = [
      //   "Dovlet" => [
      //     "age" => 22,
      //     "job" => "undeinde"
      //   ],
      //   "Muhammet" => [
      //     "age" => 19,
      //     "job" => "student"
      //   ]
      // ];
      // $str = serialize($arr);
      // print_r($str);  // a:2:{s:6:"Dovlet";a:2:{s:3:"age";i:22;s:3:"job";s:8:"undeinde";}s:8:"Muhammet";a:2:{s:3:"age";i:19;s:3:"job";s:7:"student";}} (a:2 - array количество значений, s:6 - string length)
      // echo '<br>';

      // $norm = unserialize($str);
      // var_dump($norm);
    ?>


<!-- ФУНКЦИИ И ОБЛАСТИ ВИДИМОСТИ -->
<!-- Функции 
Стр 210 -->
    <?php 
      // Функция принимает ассоцаитивный массив и создает несколько тегов <option value="$k">$v</option> ($k-ключ, $v-значение)
      // Если задан второй параметр, тогда добавляет атрибут selected
      // function selecItems($items, $selected = 0) {    // selected = 0: Выбран первый элемент
      //   $text = "";
      //   foreach ($items as $k => $v) {
      //     if($k === $selected) {
      //       $ch = " selected";                      // артибут selected
      //     } else {
      //       $ch = "";
      //     }
      //     $text .= "<option$ch value='$k'>$v<?option>\n";   // Создание и добавление option
      //   }
      //   return $text;
      // }

      // $names = [        // Массив для функции
      //   "Weaving" => "Hugo",
      //   "Goddard" => "Paul",
      //   "Taylor" => "Robert"
      // ];

      // if (isset($_REQUEST['surname'])) {      // Проверка глобальной переменный
      //   $name = $names[$_REQUEST['surname']];   // Прикрепление имени к переменной
      //   echo "Вы выбрали: {$_REQUEST['surname']}, {$name}";   // Вывости в экран
      // }
    ?>
    <!-- Функция вызвана здесь, внутри тега select для того чтобы создать теги option -->
    <!-- <form action="<?=$_SERVER['SCRIPT_NAME']?>">
      <select name="surname">
        <?//=selecItems($names, $_REQUEST['surname'])?>
      </select><br>
      <input type="submit" value="Узнать фамилию">
    </form> -->


<!-- Переменное число параметров
Стр 215 -->
    <?php
      // function myecho() {
      //   foreach(func_get_args() as $v) {
      //     echo "Hello";
      //     echo "$v <br>";
      //   }
      // } 
      // myecho("Меркурий", "Венера", "Замля", "Марс");
    ?>


<!-- Использование оператора ...
Стр 216 -->
    <?php // Опреторатор ... - несколько строки делает как массив (т.е. берет строки и добавляет в массив для параметра функции)
      // function myfunc(...$planets) {
      //   foreach($planets as $v) {
      //     echo "$v <br>";
      //   }
      // }
      // myfunc("Mercury", "Mars", "Earth");

      // // Его еще можно использовать как list (Берет массив и прикрепляет к переменнам в параметре функции)
      // function myfunc2($Mer, $Mars, $Earth) {
      //   echo "$Mer <br>";
      //   echo "$Mars <br>";
      //   echo "$Earth <br>";
      // }
      // $planets2 = ['Mercury', 'Mars', 'Earth'];
      // myfunc(...$planets2);
    ?>


<!-- Типизация аргументов возвращаемого занчения 
Стр 218 -->
    <?php // Для того чтобы PHP эмулировал режим жесткой типизации и требовал от аргументов функции указанные при объявлении типов, необходимо включить строгий режим типизации 
    // // Для этого необходимо воспользоваться ключевым словом declare, установив значение объявления strict_types = 1 (declare - пишется только в первой строке!)
    // function sum(int $fst, int $snd) : int {
    //   return $fst + $snd;
    // }
    // echo sum(2, 4); // 6
    // echo sum(2.4, 4); // Fatal error: Uncaught TypeError: Argument 1 passed to sum() must be of the type int, float given
    ?>

  
<!-- Глобальные переменные 
Стр 219 -->
    <?php
      // $monthes = [
      //   1 => "Январь",
      //   2 => "Февраль",
      //   3 => "Март",
      //   4 => "Апрель",
      //   5 => "Май",
      //   6 => "Июнь",
      //   7 => "Июль",
      //   8 => "Август",
      //   9 => "Сентябрь",
      //   10 => "Октябрь",
      //   11 => "Ноябрь",
      //   12 => "Декабрь"
      // ];
      // $num = 505;
      // function getMonth($n) {
      //   global $monthes, $num;
      //   echo $num . '<br>';
      //   echo $monthes[$n];
      // }
      // getMonth(5);
      // echo "<br>";

      // // Второй вариант написание этой же функции 
      // function getMonth2($v) {
      //   echo $GLOBALS["monthes"][$v];
      // }
      // getMonth2(6);
      // /*
      //   С массимом $GLOBALS допустимы не все операции, разрешенные с обычнимы массивами. А именно, мы не можем:
      //     1) прсвоить этот массив какой-либо переменной целиком, используя оператор =;
      //     2) как следствие, передать его функции "по значению" - можно передавать только по ссылке;
      // */
    ?>
  </div>
</body>
</html>