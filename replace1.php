<?php

//array_keys()
//  array_value()
## Разница между функциями strtr() и str_replace().
  $text1 = "php has git";
  $repa = ["php" => "git", "git" => "php"];
  echo "str_replace(): ".
    str_replace(array_keys($repa), array_values($repa), $text1)."<br />";
  echo "strtr(): ".
    strtr($text1, $repa);
?>
