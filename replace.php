<?php
## Множественная замена в строке.
  $from1 = ["{TITLE}", "{BODY}"];
  $to1   = [
    "программирование",
    "Учите на ютуб канале"
  ];
  $temp =<<<MARKER
<!DOCTYPE html>
<html lang='ru'>
<head>
  <title>{TITLE}</title>
  <meta charset='utf-8'>
</head>
<body>{BODY}</body>
</html>
MARKER;
  echo str_replace($from1, $to1, $temp);
?>
