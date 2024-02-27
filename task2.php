<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$d = date("D");
if ($d == "Fri") :
?>
    <br />Хороших вам выходных!<br />
<?php elseif ($d == "Sun") : ?>
    <br />Завтра начинается новая рабочая неделя!

<?php

$message = ($d == "Fri") ? "<br />Хороших вам выходных!<br />" : "<br />Приятного рабочего дня, вам!<br />";
echo $message;

else : ?>
    <br />Приятного рабочего дня, вам!<br />
<?php endif;

$d2 = date("w");;
if ($d2 == "1") : ?>
    Сегодня понедельник
<?php elseif ($d2 == "2") : ?>
    Сегодня вторник
<?php elseif ($d2 == "3") : ?>
    Сегодня среда
<?php elseif ($d2 == "4") : ?>
    Сегодня четверг
<?php elseif ($d2 == "5") : ?>
    Сегодня пятница
<?php elseif ($d2 == "6") : ?>
    Сегодня суббота
<?php else : ?>
    Сегодня воскресенье
<?php endif; ?>

</body>
</html>
