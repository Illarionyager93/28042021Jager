<!--11. Написать функцию, которая в качестве аргумента принимает строку, и форматирует ее таким образом, что каждое новое предложение начиняется с большой буквы.<br>-->
<!--    Пример:-->
<!--    Входная строка: 'а васька слушает да ест. а воз и ныне там. а вы друзья как ни садитесь, все в музыканты не годитесь. а король-то — голый. а ларчик просто открывался.а там хоть трава не расти.';-->
<!--    Строка, возвращенная функцией :  'А Васька слушает да ест. А воз и ныне там. А вы друзья как ни садитесь, все в музыканты не годитесь. А король-то — голый. А ларчик просто открывался.А там хоть трава не расти.';-->


<?php

$Text = 'а васька слушает да ест. а воз и ныне там. а вы друзья как ни садитесь, все в музыканты не годитесь. а король-то — голый. а ларчик просто открывался.а там хоть трава не расти.';
var_dump($Text);



function ChangeNewSentence($string)
{
    $ConvertedString="";
    $arr = array_filter(explode(".",$string));
    var_dump($arr);

    foreach ($arr as $value) {
        $string= (ltrim($value, " ") . ". ");
        $ConvertedString .= mb_strtoupper(mb_substr($string, 0, 1)).mb_substr($string, 1);
    }
    return $ConvertedString;
//    var_dump($arr);
}


echo ChangeNewSentence ($Text);