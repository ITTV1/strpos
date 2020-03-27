<?php
# Транслитерация строк в пхпс русского на транслит (кирилица)
  function transliterate($a) {
    $a = strtr($a,
      "абвгдежзийклмнопрстуфыэАБВГДЕЖЗИЙКЛМНОПРСТУФЫЭ",
      "abvgdegziyklmnoprstufyeABVGDEGZIYKLMNOPRSTUFYE"
    );
    $a = strtr($a, array(
      'ё'=>"yo",    'х'=>"h",  'ц'=>"ts",  'ч'=>"ch", 'ш'=>"sh",
      'щ'=>"shch",  'ъ'=>'',   'ь'=>'',    'ю'=>"yu", 'я'=>"ya",
      'Ё'=>"Yo",    'Х'=>"H",  'Ц'=>"Ts",  'Ч'=>"Ch", 'Ш'=>"Sh",
      'Щ'=>"Shch",  'Ъ'=>'',   'Ь'=>'',    'Ю'=>"Yu", 'Я'=>"Ya",
    ));
    return $a;
  }
  echo transliterate("Заходите на канал IT TV. Ставим лайки. Подписываемся на канал");
?>
