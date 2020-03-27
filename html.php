<!DOCTYPE html>
<html lang="ru">
<head>
  <title>Использование  в коде htmlspecialchars()</title>
</head>
<body>
  <?php
    $ex = <<<EXAMPLE
<?php
  echo "Подписываемся на канал!";
?>
EXAMPLE;
    echo htmlspecialchars($ex);
  ?>
</body>
</html>

<!--ENT_COMPAT &quot;-->
<!--ENT_NOQUOTES-->


<!--string htmlspecialchars (-->
<!--string $s [,-->
<!--int $flag1 = ENT_COMPAT | ENT_HTML401 [,-->
<!--string $encod = ini_get("default_charset") [,-->
<!--bool $double_encode1 = true ]]])-->
