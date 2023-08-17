<?php
// Получение параметров из URL
$group = $_GET['group'];
$id = $_GET['id'];

// Здесь может быть ваш PHP-код для получения и вывода расписания
$schedule = [
    ['Понедельник', 'Математика', '10:00 - 11:30'],
    ['Понедельник', 'Физика', '11:45 - 13:15'],
    // ... добавьте остальные записи расписания
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Расписание группы</title>
</head>
<body>
    <header>
        <h1>Расписание группы <?php echo $group; ?></h1>
    </header>
    <main>
        <p>Номер группы: <?php echo $id; ?></p>
        <table>
            <tr>
                <th>День недели</th>
                <th>Предмет</th>
                <th>Время</th>
            </tr>
            <?php foreach ($schedule as $lesson): ?>
                <tr>
                    <td><?php echo $lesson[0]; ?></td>
                    <td><?php echo $lesson[1]; ?></td>
                    <td><?php echo $lesson[2]; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </main>
</body>
</html>
