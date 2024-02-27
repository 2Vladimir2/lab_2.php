<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 

<?php
$dayOfWeek = date("w");
?>

<table border="1" style="border-collapse: collapse;">
    <tr >   
        <th colspan="3">График работы докторов, каб. 333</th>
    </tr>
    <tr style="background-color: goldenrod">
        <td>П.н.</td>
        <td>Фамилия, имя</td>
        <td>График</td>
    </tr>
    <tr>
        <td>1.</td>
        <td>Аксенти Елена</td>
        <td><?php echo ($dayOfWeek == 1 || $dayOfWeek == 3 || $dayOfWeek == 5) ? '8:00-12:00' : 'Нерабочий день'; ?></td>
    </tr>
    <tr>
        <td>2.</td>
        <td>Петрова Мария</td>
        <td><?php echo ($dayOfWeek == 2 || $dayOfWeek == 4 || $dayOfWeek == 6) ? '12:00-16:00' : 'Нерабочий день'; ?></td>
    </tr>
</table>

<br />

<?php
    $dayOfWeek = date("w");

    if ((date("G")) < 12){
        $timeOfDay = "Утро";}
    elseif ((date("G")) < 18) {
        $timeOfDay = "День";}
    else { $timeOfDay = "Вечер";}

    switch ($dayOfWeek) {
        case 1:
        case 2:
        case 3:
        case 4:
        case 5:
            $greeting = ($timeOfDay == "Утро") ? "Доброе утро!" : (($timeOfDay == "День") ? "Добрый день!" : "Добрый вечер!");
            break;
        case 6:
        case 0:
            $greeting = "Сегодня выходные! Наслаждайтесь вашим ";
            $greeting .= ($timeOfDay == "Утро") ? "утром!" : (($timeOfDay == "День") ? "днем!" : "вечером!");
            break;
    }
?>
    <h1><?php echo $greeting;?></h1>

</body>
</html>
