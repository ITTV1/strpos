<?php

Замена

string str_replace(string $from1, string $t, mixed $text1 [, int &$c])

//preg_replace()

//n12br()


$s = str_replace("\n", "<br />\n", $s)

string str_ireplace(string $from1, string $t, string $text1 [, int &$c])


string substr_replace(string $text1, string $t, int $s [,int $l])

substr($text1, 0, $str) . $to . substr($t, $str+$l)

работает быстрее
substr_replace()
?>


