<!--
13. Есть строка $string = 'яблоко черешня вишня вишня черешня груша яблоко черешня вишня яблоко вишня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня черешня груша яблоко черешня вишня';<br>
<br>
Подсчитайте, сколько раз каждый фрукт встречается в этой строке. Выведите  в виде списка в порядке уменьшения количества:<br><br>


Пример вывода:<br>
яблоко – 12<br>
черешня – 8<br>
груша – 5<br>
слива - 3<br>
-->

<?php

$Text = 'яблоко черешня вишня вишня черешня груша яблоко черешня вишня яблоко вишня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня черешня груша яблоко черешня вишня';
var_dump($Text);

function CountKeyValue($string)
{
    $arr = array_filter(explode(" ",$string));
//    var_dump($arr);

    $arr2=array_count_values($arr);
//    var_dump($arr2);

    foreach ($arr2 as $key => $value) {
        $arr3 .=$key ."=>". $value .'<br>';
    }
    return $arr3;

}


echo CountKeyValue ($Text);