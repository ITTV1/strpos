<?php

//Особенности strpos()
//    strpos($w, $s)    !==

$ssd = '<1?555555555555555mnjh';
//if (strpos($ssd, "<?") != false)
//    echo "IT TV ";


if (strval(strpos($ssd, "<1")) != "")
    echo "IT TV";
//

if (strpos($ssd, "<1") !== false)
    echo "IT TV";
?>


