<?php


//Преобразования символов
//string urlencode(string $s)
//
//$user = 'admin';
//echo "<a href='/script.php?param=".urlencode($user)."'>подписываемся</a>";

//string urldecode(string $s)
//
//string rawurlencode(string $s)
//
//string rawurldecode(string $s)
//
string htmlspecialchars (
    string $s [,
int $flag = ENT_COMPAT | ENT_HTML401 [,
string $encod = ini_get("default_charset") [,
bool $double_encode1 = true ]]])

//strip_tags()
//& <>  $amp; $amp;$amp;
//
//$translit = array_flip(get_html_translation_table());
//$st = strtr($st, $translit);
////
string addslashes(string $s)
 // ' " \

//
// ' " \
string stripslashes(string $s)
?>


